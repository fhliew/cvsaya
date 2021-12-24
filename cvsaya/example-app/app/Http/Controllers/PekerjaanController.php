<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\KeinginanGaji;
use Illuminate\Support\Facades\Validator;

class PekerjaanController extends Controller
{
    public static function show(){
        $idlogin = 644;
        return view('CvsayaPekerjaan',[
            'title' => 'Pekerjaan',
            'topborderheight' => 79,
            'dataEmp'=>  Employee::where('idLogin', $idlogin)
            ->first(),
            'dataGaji'=> KeinginanGaji::where('idlogin', $idlogin)
            ->first(),
            'mt' => 67
        ]);
    }

    public static function checkInput($input){
        $validate = Validator::make($input,[
            'job'=> 'required',
            'inginposisi'=>'required',
            'memimpin'=>'required',
            'profile'=> 'required',
            'kondisi'=> 'required',
            'Previous'=> 'required',
            'Current'=> 'required',
            'Desired'=> 'required',
            'Ulasan'=> 'required'
        ]);
        return !$validate->fails();
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();
        if(self::checkInput($input)) {
            $updateOrCreate = self::updateOrCreateEmployee($input) + self::updateOrCreateKeinginanGaji($input); 
            if($updateOrCreate === 0) return back()->withErrors(['msg' => "Record tersimpan!!"]);       
            else if($updateOrCreate > 0) return back()->withErrors(['msg' => "Record terupdate!!"]);
            else return back()->withErrors(['msg' => "Error!!"]);       
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }
   
    public static function updateOrCreateEmployee($input){
        $idlogin = 644;
        if(Employee::where('idlogin',$idlogin)->count() > 0){
            try {                  
                Employee::where(
                'idlogin', $idlogin
                )->update([
                    'job'=> $input['job'],
                    'inginposisi'=>$input['inginposisi'],
                    'memimpin'=>$input['memimpin'],
                    'profile'=> $input['profile']
                ]);
                return 1;
            } catch(Exception $e){
                return -2;
            }
        }
        else{
            date_default_timezone_set("Asia/Jakarta");
            $employeeCreate = Employee::create([
                'idlogin'=> $idlogin,
                'job'=> $input['job'],
                'inginposisi'=>$input['inginposisi'],
                'memimpin'=>$input['memimpin'],
                'TglPost' => date("Y-m-d h:i:s"),
                'profile'=> $input['profile']
            ]);
            if(!$employeeCreate->wasRecentlyCreated) return -2;
        }
        return 0;
    }

    public static function updateOrCreateKeinginanGaji($input){
        $idlogin = 644;
        if(KeinginanGaji::where('idlogin',$idlogin)->count() > 0){
            try{
                KeinginanGaji::where(
                    'idlogin', $idlogin
                )->update([
                    'Previous'=> $input['Previous'],
                    'Current'=>$input['Current'],
                    'Desired'=>$input['Desired'],
                    'Ulasan'=> $input['Ulasan'],
                    'kondisi'=> $input['kondisi']
                ]);
                return 1;
            }
            catch(Exception $e){
                return -2;
            }
        }
        else{
            $keinginanGajiCreate = KeinginanGaji::create([
                'idlogin'=> $idlogin,
                'Previous'=> $input['Previous'],
                'Current'=>$input['Current'],
                'Desired'=>$input['Desired'],
                'Ulasan'=> $input['Ulasan'],
                'kondisi'=> $input['kondisi']
            ]);
            if(!$keinginanGajiCreate->wasRecentlyCreated) return -2;
        }    
        return 0;
    }
}
