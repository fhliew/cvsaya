<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    
    class Inputmanager extends Controller{
       
        public static function insertdatatodatabase($data){
            include_once "Connection.php";
            $query ='';
            if($data['pilihtemacv'] === 'Pendidikan'){
                $query = "INSERT INTO `1pendidikan` (Tahun,sampai,pendidikan,asal) VALUES ('".$data['Tahun']."','".$data['sampai']."','".$data['pendidikan']."','".$data['asal']."')";
            }
            elseif($data['pilihtemacv'] === 'Pengalaman'){
                $query = "INSERT INTO `1pengalaman` (tahun,sampai,sebagai,perusahaan,gaji,jobdesk,resign,referensi,kondisi) VALUES ('".$data['tahun']."','".$data['sampai']."','".$data['sebagai']."','".$data['perusahaan']."','".$data['gaji']."','".$data['jobdesk']."','".$data['resign']."','".$data['referensi']."','".$data['kondisi']."')";
            }
            else if($data['pilihtemacv'] === 'Kualifikasi') $query = "INSERT INTO `1kualifikasi` (kualifikasi) VALUES('".$data['kualifikasi']."')"; 
            $query = mysqli_query($_GLOBALS['connection'], $query);
            if(mysqli_affected_rows($_GLOBALS['connection']) > 0) echo "<script> alert(\"Data Tersimpan!\")</script>";
            else echo "<script> alert(\"Data tidak Tersimpan!\");</script>";
        }

        public static function inputdata(Request $req){
            $input = $req->input();
            self::insertdatatodatabase($input);
            return view('cv/'.$input['pilihtemacv']);
            /*$titles = ['Pendidikan','Pengalaman','Kualifikasi'];
            $options ="";
            foreach($titles as $t){
                if($t !== $input['pilihtemacv']) $options .= "<option value=\"$t\"> $t </option>";
            }
            return view('cvsayacv',[
                'title' => $input['pilihtemacv'],
                'url' => 'cvsayacv',
                'filter' => "
                <select name=\"pilihtemacv\" id=\"pilihtemacv\" style=\"border-radius: 10px;
                box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
                font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
                text-align: left; height: 35px;\" class=\"form-select\" on>   
                    <option selected=\"selected\">".$input['pilihtemacv']."</option>".$options."
                </select>",
                'topborderheight' => 120,
                'mt' => 100,
                'table'=> include_once "cvpagetables.php?pagetitle=".$input['pilihtemacv']
            ]);*/
        }
    }
    
?>