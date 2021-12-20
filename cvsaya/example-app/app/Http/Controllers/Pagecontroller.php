<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pagecontroller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public static function gettable($pagetitle){
        include_once "cvpagetables.php";
        return gettable($pagetitle);
    }
    public static function getcvform($title){
        $form='';
        if($title === 'Pendidikan'){
            $form ="
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <div class=\"col-12\">
                            <label>Tanggal Masuk</label>
                        </div>
                        <div class=\"col-12\">
                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"Tahun\"/>
                        </div>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <div class=\"col-12\">
                            <label>Tanggal Selesai</label>
                        </div>
                        <div class=\"col-12\">
                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\"/>
                        </div>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Jenjang</label>
                        <input type=\"text\" name=\"pendidikan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Instansi</label>
                        <input type=\"text\" name=\"asal\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                    </div>
                </div>
                <div class=\"col-8\">
                    <label></label>               
                </div>";
        }
        else if($title === 'Pengalaman'){
            $form="
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Tanggal Masuk</label>
                        <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"tahun\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label>Tanggal Selesai</label>
                        <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\"></input>
                        <hr id=\"line\">
                    </div>
                </div>

                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Jabatan/Posisi</label>
                        <input type=\"text\" name=\"sebagai\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Instansi</label>
                        <input type=\"text\" name=\"perusahaan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Gaji Pokok</label>
                        <input type=\"text\" name=\"gaji\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Jobdesk/Rincian pekerjaan</label>
                        <input type=\"text\" name=\"jobdesk\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Alasan keluar/Resign</label>
                        <input type=\"text\" name=\"resign\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Nomor Referensi/Email</label>
                        <input type=\"text\" name=\"referensi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Kondisi Kerja</label>
                        <input type=\"text\" name=\"kondisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                </div>
                <div class=\"col-8\">
                    <label></label>
                </div>";
        }
        else{
            $form="
                <div class=\"col-12\">
                    <div class=\"form-group\">
                        <label>Kelebihan/Hobi/Keahlian</label>
                        <input type=\"text\" name=\"kualifikasi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
                        <hr id=\"line\">
                    </div>
                </div>
                <div class=\"col-12\">
                    <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                </div>
                <div class=\"col-8\">
                    <label></label>
                </div>";
        }
        return $form;
    }
    public static function gotocvpage($title){
        $titles = ['Pendidikan','Pengalaman','Kualifikasi'];
        $options ="";
        foreach($titles as $t){
            if($t !== $title) $options .= "<option value=\"$t\"> $t </option>";
        }
        return view('cvsayacv', [
            'title' => $title,
            'url' => 'cvsayacv',
            'form'=> self::getcvform($title),
            'filter' => "
                <select name=\"pilihtemacv\" id=\"pilihtemacv\" style=\"border-radius: 10px;
                box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
                font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
                text-align: left; height: 35px;\" class=\"form-select\" on>   
                    <option selected=\"selected\">".$title."</option>".$options."
                </select>",
            'table' => self::gettable($title),
            'topborderheight' =>120,
            'mt' => 100
        ]);
    }

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
