<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employeedetail;
use App\Models\Agama;
use App\Models\Gaji;
use App\Http\Controllers\Pagecontroller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public static function getprofilform(){
        $idlogin = 644;//$_COOKIE['idlogin'];
        $emp_data = Employee::where('idLogin', $idlogin)
            ->first();
        $emp_details = Employeedetail::where('idLogin', $idlogin)
            ->first();
        $agama = Agama::where('IdAgama', $emp_details['IdAgama'])
            ->first();
        $allagama = Agama::all();
        $agamaoptions='';
        /*foreach($allagama as $a){
            if($a['agama'] !== $agama['agama']) {
                $agamaoptions .= "<option value=\"".$a['IDagama']."\">".$a['agama']."</option>";
            }
        }*/
        return 
        '<div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <!--<span>{!!@error("nama"){{$message}}@enderror!!}</span>-->
                <input type="text" value ='.$emp_data['nama'].'name="nama" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" value ='.$emp_details['ttl'].' name="ttl" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" value ='.$emp_details['tpl'].' name="tpl" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gender</label>
                <select name="jk" id="input_box" class="form-control border-top-0">
                    <option disabled selected value ='.
                    (($emp_details['jk'] !== null && !empty($emp_details['jk']))? $emp_details['jk']:null).'>'.(($emp_details['jk'] !== null)?$emp_details['jk'] :  "Pilih jenis Kelamin").'</option>
                    <option value="cowok">Cowok</option>
                    <option value="cewek">Cewek</option>
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Alamat Tinggal (Sekarang)</label>
                <input type="text" value ="'.$emp_data['alamat'].'" name="alamat" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Agama</label>
                <select name="agama" id="input_box" class="form-control border-top-0">
                    <option disabled selected value>'.((!empty($agama['agama']))? $agama['agama']:"Pilih Agama").'</option>
                    '.$agamaoptions.'
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Status Perkawinan</label>
                <select name="status_perkawinan" id="input_box" class="form-control border-top-0">
                    <option disabled selected value> Pilih Status Perkawinan </option>
                    <option value="single">Single</option>
                    <option value="menikah">Menikah</option>
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Instagram</label>
                <input type="text" name="akun_instagram" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Tik Tok</label>
                <input type="text" name="akun_tiktok" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Youtube</label>
                <input type="text" name="akun_youtube" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Facebook</label>
                <input type="text" name="akun_facebook" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Website Pribadi</label>
                <input type="text" value = "'.$emp_data['website'].'" name="website" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>';
    }

    public static function getpekerjaanform(){
        $idlogin = 644;//$_COOKIE['idlogin'];
        $emp_data = Employee::where('idLogin', $idlogin)
            ->orderBy('id_employe', 'DESC')
            ->first();
        $gaji_data = Gaji::where('idLogin',$idlogin)
            ->orderBy('idGaji','DESC')
            ->first();
        return 
        "<div class=\"col-12\">
            <div class=\"form-group\">
                <label>Posisi yang diinginkan</label>
                <input type=\"text\" value=\"".$emp_data['job']."\" name=\"job\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Mengapa mengingikan posisi ini?</label>
                <input type=\"text\" value= \"".$emp_data['inginposisi']."\" name=\"inginposisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Pernah Memimpin?</label>
                <input type=\"text\" value= \"".$emp_data['memimpin']."\" name=\"memimpin\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Ceritakan tentang dirimu</label>
                <input type=\"text\" value=\"".$emp_data['profile']."\" name=\"profile\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Apakah sekarang sedang bekerja?</label>
                <input type=\"text\" value= \"".$gaji_data['kondisi']."\" name=\"kondisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <label></label>
        </div>
        <div class=\"col-12\">
            <label style=\"font-weight:bold; font-size:20px;\">Gaji</label>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Gaji Sebelum</label>
                <input type=\"text\" value= \"".$gaji_data['Previous']."\" name=\"Previous\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Gaji Sekarang (Bila masih bekerja)</label>
                <input type=\"text\" value= \"".$gaji_data['Current']."\" name=\"Current\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Gaji yang diharapkan</label>
                <input type=\"text\" value= \"".$gaji_data['Desired']."\" name=\"Desired\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group\">
                <label>Ulasan/perbedaan gaji yang diharapkan</label>
                <input type=\"text\" value= \"".$gaji_data['Ulasan']."\" name=\"Ulasan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"/>
                <hr id=\"line\">
            </div>
        </div>";
    }

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
            'form' => $pagedata['form'],
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
        $form = null;
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
                $form = self::getprofilform();
                break;
            case 'dokumen':
                $title = 'Dokumen';
                $url = 'cvsayadokumen';
                break;
            case 'pekerjaan':
                $title = 'Pekerjaan';
                $url = 'cvsayapekerjaan';
                $form = self::getpekerjaanform();
                break;
        }
        $pagedata=[
            'title' => $title,
            'url' => $url,
            'filter'=> $filter,
            'form'=> $form,
            'topborderheight' => $topborderheight,
            'mt' => $mt
        ];
        return $pagedata;
    }
    
}

