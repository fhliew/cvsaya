<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontrollercontroller extends Controller
{
    public static function gotopage($page,$id){
        return view($page,[
            "title" => gettitle($id)
        ]);
    }

    public static function gettitle($id){
        switch($id){
            default: 
                return 'CVsaya';
            case 1:
                return 'Attendance';
            case 2:
                return 'Permission';
            case 3:
                return 'Resignation';
            case 4:
                return 'Salary';
        }
    }
}
