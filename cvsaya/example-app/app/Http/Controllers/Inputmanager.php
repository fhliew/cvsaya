<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Pagecontroller;
    use App\Models\Employee;
    use App\Models\Employeedetail;
    //use Carbon\Carbon;

    class Inputmanager extends Controller{
       
        public static function insertdatatodatabase($data){
            $idlogin = 644;
            include_once "Connection.php";
            $query ='';
            if($data['title'] === 'Pendidikan'){
                $query = "INSERT INTO `1pendidikan` (idlogin,Tahun,sampai,pendidikan,asal) VALUES ($idlogin'".$data['Tahun']."','".$data['sampai']."','".$data['pendidikan']."','".$data['asal']."')";
            }
            elseif($data['title'] === 'Pengalaman'){
                $query = "INSERT INTO `1pengalaman` (idlogin,tahun,sampai,sebagai,perusahaan,gaji,jobdesk,resign,referensi,kondisi) VALUES ($idlogin'".$data['tahun']."','".$data['sampai']."','".$data['sebagai']."','".$data['perusahaan']."','".$data['gaji']."','".$data['jobdesk']."','".$data['resign']."','".$data['referensi']."','".$data['kondisi']."')";
            }
            else if($data['title'] === 'Kualifikasi') $query = "INSERT INTO `1kualifikasi` (idlogin,kualifikasi) VALUES($idlogin,'".$data['kualifikasi']."')"; 
            $query = mysqli_query($_GLOBALS['connection'], $query);
            if(mysqli_affected_rows($_GLOBALS['connection']) > 0) {
                return "Data tersimpan!!";
            }
            return "Data tidak Tersimpan!!";
        }

        public static function inputdata(Request $req){
            $input = $req->input();
            $insertsuccessful = self::insertdatatodatabase($input);
            return back()->withErrors(['msg' => $insertsuccessful]);
        }
        
        public static function inputdatapekerjaan(Request $req){
            include_once "Connection.php";
            $idlogin = 644;
            $input = $req->input();
            $inputsuccessful = false;

            $emp_data=mysqli_query($_GLOBALS['connection'],"INSERT INTO `1employee` (idlogin,job,inginposisi,memimpin,profile) VALUES($idlogin,'".$input['job']."','".$input['inginposisi']."','".$input['memimpin']."','".$input['profile']."')");

            $inputsuccessful = mysqli_affected_rows($_GLOBALS['connection']) > 0;

            if($inputsuccessful){
                $gaji_data=mysqli_query($_GLOBALS['connection'],"INSERT INTO `1keinginangaji` (idlogin,Previous,Current,Desired,Ulasan,kondisi) VALUES($idlogin,'".$input['Previous']."','".$input['Current']."','".$input['Desired']."','".$input['Ulasan']."','".$input['kondisi']."')");

                if(mysqli_affected_rows($_GLOBALS['connection']) > 0) {
                    return back()->withErrors(['msg' => "Data Tersimpan!!"]);
                }
            }
            return back()->withErrors(['msg' => "Data tidak tersimpan!!"]);
        }

        public static function inputdataprofil(Request $req){
            include_once "Connection.php";
            $idlogin = 644;
            $input = $req->input();

            $updateHeader =Employee::where('idlogin', $idlogin)->update([
                'alamat' => $input['alamat'] ?? '',
                'website' => $input['website'] ?? ''
            ]);

            // if ($updateHeader) {
                //var_dump($input['IdAgama']);
                $updatedetail = EmployeeDetail::where('idlogin',$idlogin)->update([
                    'ttl' =>  $input['ttl'] ?? '',//Carbon::parse($input['ttl']) ?? '',  
                    'tpl' => $input['tpl'] ?? '',
                    'jk' => $input['jk'] ?? '',
                    'IdAgama' => $input['IdAgama'] ?? 0,
                ]);
                if($updatedetail) return back()->withErrors(['msg' => "Data tersimpan!!"]);
            // }
            return back()->withErrors(['msg' => "Data tidak tersimpan!!"]);           
        }
    }
    
?>