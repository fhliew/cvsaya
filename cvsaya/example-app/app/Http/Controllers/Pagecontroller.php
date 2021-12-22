<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employeedetail;
use App\Models\Agama;
use App\Models\KeinginanGaji;
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
        '';
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

    public static function gotopage($page=null){
        $pagedata = Pagecontroller::getpage($page);
        if($pagedata['title'] === 'Pekerjaan') var_dump($pagedata['data']);//['job']);
        else{
        return view($pagedata['view'],[
            'title' => $pagedata['title'],
            'topborderheight' => $pagedata['topborderheight'],
            'mt' => $pagedata['mt'],
            'data'=>$pagedata['data']
        ]);}
    }

    public static function getpage($page){
        $idlogin = 644;
        $pagedata = [];
        $title = 'CVsaya';
        $view = 'CvsayaHome';
        $topborderheight = 79;
        $mt = 67;
        $data =[];
        switch($page){
            case 'profil':
                $emp_data = "";//Employee::keinginangaji();
                $title = 'Profil';
                $view = 'CvsayaProfil';
                var_dump($emp_data);
                $data = array_merge($emp_data,$gaji_data);//array_push($emp_data,$gaji_data);
                break;
            case 'dokumen':
                $title = 'Dokumen';
                $view = 'CvsayaDokumen';
                break;
            case 'pekerjaan':
                $dataEmp = Employee::where('idLogin', $idlogin)
                ->get()[0];    
                $dataGaji = KeinginanGaji::where('idLogin', $idlogin)
                ->get()[0];            
                $data = array_merge([$dataEmp],[$dataGaji]);
                $title = 'Pekerjaan';
                $view = 'CvsayaPekerjaan';
                break;
            case 'pengalaman':
                $topborderheight = 120;
                $mt = 100;
                $data = Pengalaman::where('idLogin', $idlogin)
                    ->orderBy('id_employe', 'DESC')
                    ->first();
                $title = 'Pengalaman';
                $view = 'CvsayaCv';
                break;
            case 'pendidikan':
                $topborderheight = 120;
                $mt = 100;
                $data = Pendidikan::where('idLogin', $idlogin)
                    ->orderBy('id_employe', 'DESC')
                    ->first();
                $title = 'Pendidikan';
                $view = 'CvsayaCv';
                break;
            case 'kualifikasi':
                $topborderheight = 120;
                $mt = 100;
                $data = Kualifikasi::where('idLogin', $idlogin)
                    ->orderBy('id_employe', 'DESC')
                    ->first();
                $title = 'Kualifikasi';
                $view = 'CvsayaCv';
                break;
        }
        $pagedata=[
            'title' => $title,
            'view' => $view,
            'topborderheight' => $topborderheight,
            'data'=> $data,
            'mt' => $mt
        ];
        return $pagedata;
    }
    
}

