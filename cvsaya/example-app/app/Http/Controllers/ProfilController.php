<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;
use App\Models\KeinginanGaji;
use App\Models\Agama;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public static function show(){
        $idlogin = 644;
        $dataEmpdet = EmployeeDetail::where('idlogin', $idlogin)->first();
        return view('CvsayaProfil',[
            'title' => 'Profil',
            'topborderheight' => 79,
            'dataEmp'=> Employee::where('idlogin', $idlogin)->first(),
            'dataEmpdetails'=> $dataEmpdet,
            'dataGaji'=> KeinginanGaji::where('idlogin', $idlogin)->first(),
            'dataAgama'=> Agama::all(),
            'mt' => 67
        ]);
    }
    public static function checkInput($input){
        $validate = Validator::make($input,[
            'nama'=> 'required',
            'ttl'=>'required',
            'tpl'=>'required',
            'jk'=> 'required',
            'alamat'=> 'required',
            'IdAgama'=> 'required',
            'website'=> 'required'
        ]);
        return !$validate->fails();
    }
    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();
        var_dump($input);
        if(self::checkInput($input)) {
            var_dump("valid input");
            if(self::update($input)) return back()->withErrors(['msg' => "Record terupdate!!"]);
            else{
                $employee = Employee::create([
                    'idlogin'=> $idlogin,
                    'job'=> "create job?",
                    'ketposisi' => "whatever",
                    'inginposisi'=>"ingin pos?",
                    'memimpin'=>"memimpin?",
                    'website'=>"Omg@omg.omg",
                    'gambar'=>"sdfsdfsfsdfs",
                    'alamat'=>$input['alamat'],
                    'TglPost' => date("Y-m-d h:i:s"),
                    'profile'=> "profile?",
                    'IDprovinces'=> 0                
                ]);
                $employeedet = EmployeeDetail::create([
                    'idlogin'=> $idlogin,
                    'ttl'=> $input['ttl'],
                    'tpl'=>$input['tpl'],
                    'jk'=>$input['jk'],
                    'IdAgama'=> $input['IdAgama'],
                    'alternatifNo'=>"nomor?",
                    'kategori'=>1,
                    'referensi'=> "referensi?",
                    'karirkerja'=> "1",
                ]);

                if($employee->wasRecentlyCreated && $employeedet->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
            }
        }
        return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);       
    }

    public static function update($input){
        $idlogin = 644;
        if(EmployeeDetail::where('idlogin',$idlogin)->count() > 0){
                $employee = Employee::where(
                    'idlogin', $idlogin
                )->update([
                    'alamat'=> $input['alamat'],
                    'website'=> $input['website']
                ]);

                $employeedet = EmployeeDetail::where(
                    'idlogin', $idlogin
                )->update([
                    'ttl'=> $input['ttl'],
                    'tpl'=>$input['tpl'],
                    'jk'=>$input['jk'],
                    'IdAgama'=> $input['IdAgama']
                ]);
                return true;
            }
        return false;    
    }
}
