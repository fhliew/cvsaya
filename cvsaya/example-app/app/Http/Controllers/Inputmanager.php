<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\PageController;
    use App\Models\Employee;
    use App\Models\EmployeeDetail;
    use Illuminate\Support\Facades\Validator;


    class InputManager extends Controller{

        public static function inputPendidikan (Request $req){
            $idlogin = 644;
            $input = $req->input();

            $validate = Validator::make($input,[
                'Tahun' => 'required',
                'sampai' => 'required',
                'pendidikan' => 'required',
                'asal' => 'required'
            ]);
            
            if(!$validate->fails()){
                $employee = Employee::updateOrCreate([
                    'idlogin' => $idlogin
                ], [
                    'Tahun' => $input->Tahun,
                    'sampai' => $input->sampai,
                    'pendidikan' => $input->pendidikan,
                    'asal' => $input->asal
                ]);
                return "Data tersimpan!!";
            }
            return $req->input;    
        }

        public static function inputPengalaman (Request $req){
            $idlogin = 644;
            $input = $req->input();

            $validate = Validator::make($input,[
                'tahun' => 'required',
                'sampai' => 'required',
                'sebagai' => 'required',
                'perusahaan' => 'required',
                'gaji' => 'required',
                'jobdesk' => 'required',
                'resign' => 'required',
                'referensi' => 'required',
                'kondisi' => 'required'
            ]);
            
            if(!$validate->fails()){
                $employee = Employee::updateOrCreate([
                    'idlogin' => $idlogin
                ], [
                    'tahun' => $input->tahun,
                    'sampai' => $input->sampai,
                    'sebagai' => $input->sebagai,
                    'perusahaan' => $input->perusahaan,
                    'gaji' => $input->gaji,
                    'jobdesk' => $input->jobdesk,
                    'resign' => $input->resign,
                    'referensi' => $input->refrensi,
                    'kondisi' => $input->kondisi
                ]);
                return "Data tersimpan!!";
            }
            return $req->input;    
        }

        public static function inputKualifikasi(Request $req){
            $idlogin = 644;
            $input = $req->input();

            $validate = Validator::make($input,[
                'kualifikasi' => 'required'
            ]);
            if(!$validate->fails()){
                $employee = Kualifikasi::updateOrCreate([
                    'idlogin' => $idlogin
                ], [
                    'kualifikasi' => $input->kualifikasi
                ]);
            }
            return $req->input;    
        }

        public static function inputPekerjaan(Request $req){
            $idlogin = 644;
            $input = $req->input();

            $validate = Validator::make($input,[
                'nama' => 'required',
                'alamat' => 'required',
                'website' => 'required',
                'ttl' => 'required',
                'tpl' => 'required',
                'jk' => 'required',
                'agama' => 'required'
            ]);
            
            if($rowfound && !$validate->fails()){

                $employee = Employee::updateOrCreate([
                    'idlogin' => $idlogin
                ], [
                    'job' => $input->job,
                    'inginposisi' => $input->inginposisi,
                    'memimpin'=> $input->memimpin,
                    'profile'=>$input->profile
                ]);

                $gaji = Gaji::updateOrCreate([
                    'idlogin' => $idlogin
                ], [
                    'Previous'=>$input->previous,
                    'Current'=>$input->Current,
                    'Desired'=>$input->Desired,
                    'Ulasan'=>$input->Ulasan,
                    'kondisi'=>$input->kondisi
                ]);
                
                return back()->withErrors(['msg' => "Data tersimpan!!"]);
            }
            return $req->input;    
        }

        public static function inputProfil(Request $req){
            $idlogin = 644;
            $input = $req->input();
            $validate = Validator::make($input,[
                'nama' => 'required',
                'alamat' => 'required',
                'website' => 'required',
                'ttl' => 'required',
                'tpl' => 'required',
                'jk' => 'required',
                'agama' => 'required'
            ]);
            if(!$validate->fails()){
                Employee::updateOrCreate([
                    'idlogin' => $idlogin
                    ],[
                   'nama' => $input->nama,
                   'alamat' => $input->alamat,
                   'website'=> $input->website
                ]);
                EmployeeDetail::updateOrCreate([
                    'idlogin' => $idlogin
                    ],[
                    'ttl' => $input->ttl,
                    'tpl' => $input->tpl,
                    'jk' => $input->jk,
                    'agama' => $input->agama
                ]);

                return back()->withErrors(['msg' => "Data tersimpan!!"]);
            }
            return $req->input;      
        }
    }
    
?>