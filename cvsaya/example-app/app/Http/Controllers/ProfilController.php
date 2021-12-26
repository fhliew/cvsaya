<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;
use App\Models\KeinginanGaji;
use App\Models\Agama;
use App\Models\Administrator;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public static function show(){
        $idlogin = 644;
        $dataEmpDet = EmployeeDetail::where('idlogin', $idlogin)->first();
        return view('CvsayaProfil',[
            'title' => 'Profil',
            'topBorderHeight' => 79,
            'dataEmp'=> Employee::where('idlogin', $idlogin)->first(),
            'dataEmpDetails'=> $dataEmpDet,
            'dataGaji'=> KeinginanGaji::where('idlogin', $idlogin)->first(),
            'dataAdmin'=> Administrator::where('idlogin', $idlogin)->first(),
            'listAgama'=> Agama::all(),
            'mt' => 67
        ]);
    }
    public static function checkInput($input){
        $validate = Validator::make($input,[
            'nama_lengkap'=> 'required',
            'id_ktp'=> 'required',
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
        if(self::checkInput($input)) {
            $updateOrCreate = self::updateOrCreateEmployee($input) + self::updateOrCreateEmployeeDetail($input) + self::updateAdmin($input); 
            if($updateOrCreate === 0) return back()->withErrors(['msg' => "Record tersimpan!!"]);       
            else if($updateOrCreate > 0) return back()->withErrors(['msg' => "Record terupdate!!"]);       
            else return back()->withErrors(['msg' => "Error!!"]);  
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }
    
    public static function updateAdmin($input){
        $idlogin = 644;
        try{
            $admin = Administrator::find($idlogin);
            $adminUpdate = $admin->update([
                'nama_lengkap'=> $input['nama_lengkap'], 
                'id_ktp'=>$input['id_ktp']
            ]);
        }
        catch(Exception $e){
            return -3;
        }
        return 0;
    }

    public static function updateOrCreateEmployee($input){
        $idlogin = 644;
        if(Employee::where('idlogin',$idlogin)->count() > 0){
            try{
                $employeeUpdate = Employee::where(
                    'idlogin', $idlogin
                )->update([
                    'alamat'=> $input['alamat'],
                    'website'=> $input['website']
                ]);
                return 1;
            }
            catch(Exception $e){
                return -3;
            }
        }
        else{
            $employeeCreate = Employee::create([
                'idlogin'=> $idlogin,
                'website'=> $input['website'], 
                'alamat'=>$input['alamat'], 
                'TglPost' => date("Y-m-d h:i:s"),
            ]);
            if(!$employeeCreate->wasRecentlyCreated) return -3;
        }
        return 0;
    }

    public static function updateOrCreateEmployeeDetail($input){
        $idlogin = 644;
        if(EmployeeDetail::where('idlogin',$idlogin)->count() > 0){
            try{
                EmployeeDetail::where(
                    'idlogin', $idlogin
                )->update([
                    'ttl'=> $input['ttl'],
                    'tpl'=>$input['tpl'],
                    'jk'=>$input['jk'],
                    'IdAgama'=> $input['IdAgama']
                ]);
                return 1;
            }
            catch(Exception $e){
                return -3;
            }
        }
        else{
            $employeeDetailCreate = EmployeeDetail::create([
                'idlogin'=> $idlogin,
                'ttl'=> $input['ttl'],
                'tpl'=>$input['tpl'],
                'jk'=>$input['jk'],
                'IdAgama'=> $input['IdAgama']
            ]);
            if(!$employeeDetailCreate->wasRecentlyCreated) return -3;
        }    
        return 0;
    }
}
