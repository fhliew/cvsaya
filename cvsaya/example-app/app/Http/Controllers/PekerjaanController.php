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
            'dataGaji'=> KeinginanGaji::where('idLogin', $idlogin)
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
            if(self::update($input)) return back()->withErrors(['msg' => "Record terupdate!!"]);
            else{
                $employee = Employee::create([
                    'idlogin'=> $idlogin,
                    'job'=> $input['job'],
                    'ketposisi' => "whatever",
                    'inginposisi'=>$input['inginposisi'],
                    'memimpin'=>$input['memimpin'],
                    'website'=>"Omg@omg.omg",
                    'gambar'=>"sdfsdfsfsdfs",
                    'alamat'=>"nowhere",
                    'TglPost' => date("Y-m-d h:i:s"),
                    'profile'=> $input['profile'],
                    'IDprovinces'=> 0                
                ]);
                $keinginanGaji = KeinginanGaji::create([
                    'idlogin'=> $idlogin,
                    'Previous'=> $input['Previous'],
                    'Current'=>$input['Current'],
                    'Desired'=>$input['Desired'],
                    'Ulasan'=> $input['Ulasan'],
                    'kondisi'=> $input['kondisi']
                ]);
                if($employee->wasRecentlyCreated && $keinginanGaji->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
            }
        }
        return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);       
    }

    public static function update($input){
        $idlogin = 644;
        if(Employee::where('idlogin',$idlogin)->count() > 0){
                $employee = Employee::where(
                    'idlogin', $idlogin
                )->update([
                    'job'=> $input['job'],
                    'inginposisi'=>$input['inginposisi'],
                    'memimpin'=>$input['memimpin'],
                    'profile'=> $input['profile']
                ]);
                $keinginanGaji = KeinginanGaji::where(
                    'idlogin', $idlogin
                )->update([
                    'Previous'=> $input['Previous'],
                    'Current'=>$input['Current'],
                    'Desired'=>$input['Desired'],
                    'Ulasan'=> $input['Ulasan'],
                    'kondisi'=> $input['kondisi']
                ]);
                return true;
            }
        return false;    
    }
}
