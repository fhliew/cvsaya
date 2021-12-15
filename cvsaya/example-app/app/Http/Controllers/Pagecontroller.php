<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pagecontroller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public static function gotopage($page=null){
        $pagedata = Pagecontroller::getpage($page);
        return view($pagedata['url'],[
            'title' => $pagedata['title'],
            'filter' => $pagedata['filter'],
            'topborderheight' => $pagedata['topborderheight'],
            'mt' => $pagedata['mt']
        ]);
    }

    public static function getpage($page){
        $pagedata = [];
        $title = 'CVsaya';
        $url = 'cvsayahome';
        $filter= null;
        $topborderheight = 79;
        $mt = 67;
        switch($page){
            case 'attendance':
                $title = 'Attendance';
                $url = 'cvsayaattendance';
                break;
            case 'permission':
                $title = 'Permission';
                $url = 'cvsayapermission';
                break;
            case 'resignation':
                $title = 'Resignation';
                $url = 'cvsayaresignation';
                break;
            case 'salary':
                $title = 'Salary';
                $url = 'cvsayasalary';
                break;
            case 'salarydetails':
                $title = 'Salary Detail';
                $url = 'cvsayasalarydetails';
                break;
            case 'profil':
                $title = 'Profil';
                $url = 'cvsayaprofil';
                break;
            case 'dokumen':
                $title = 'Dokumen';
                $url = 'cvsayadokumen';
                break;
            case 'cv':
                $title = 'Pendidikan';
                $url = 'cvsayacv';
                $filter = 
                "<select name=\"pilihtemacv\" id=\"pilihtemacv\" style=\"border-radius: 10px;
                    box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
                    font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
                    text-align: left; height: 35px;\" class=\"form-select\" on>                    
                        <option value=\"Pendidikan\"> Pendidikan </option>
                        <option value=\"Pengalaman\"> Pengalaman </option>
                        <option value=\"Kualifikasi\"> Kualifikasi </option>
                </select>";
                $topborderheight = 120;
                $mt = 100;
                break;
            case 'pekerjaan':
                $title = 'Pekerjaan';
                $url = 'cvsayapekerjaan';
                break;
        }
        $pagedata=[
            'title' => $title,
            'url' => $url,
            'filter'=> $filter,
            'topborderheight' => $topborderheight,
            'mt' => $mt
        ];
        return $pagedata;
    }
    
}
?>
