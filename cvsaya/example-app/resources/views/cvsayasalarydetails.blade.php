@extends('partials/cvsayatopborder')

@section('content')
    <?php
    $message="<div class=\"col-6\"><label>Nama</label></div><div class=\"col-6\"><input type=\"text\" name=\"nama\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input></div>
    <div class=\"col-6\">
        <label>Jam Masuk</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"jam_masuk\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Hari Kerja</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"hari_kerja\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Divisi</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"divisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Periode</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"periode\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Bank</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"bank\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>No. Rekening</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"norekening\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-12\">
        <hr style =\"opacity:1!important;\">
    </div>
    <div class=\"col-12\">
        <label style=\"font-weight: bold;font-size: 15px;\">Rincian Gaji</label>
    </div>
    <div class=\"col-6\">
        <label>Gaji Pokok</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"gaji_pokok\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Total Masuk</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"total_masuk\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Bonus THR</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"bonus_thr\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Lembur</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"lembur\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Sanksi Telat</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"sanksi_telat\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>BPJS</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"bpjs\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Inventaris</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"inventaris\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-12\">
        <hr style =\"opacity:1!important;\">
    </div>
    <div class=\"col-6\">
        <label>Tanggal Penggajian</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"tanggal_penggajian\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-6\">
        <label>Total diterima</label>
    </div>
    <div class=\"col-6\">
        <input type=\"text\" name=\"total_diterima\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>
    </div>
    <div class=\"col-12\">
        <hr style =\"opacity:1!important;\">
    </div>
    <div class=\"col-12\">
        <label>Catatan Tambahan :</label>
        <input type=\"text\" name=\"catatan_tambahan\" id=\"input_box\"  class=\"form-control border-top-0\" placeholder=\"Isi disini\"></input>

    </div>
    <div class=\"col-12\">
        <label></label>
    </div>";
    
    echo "$message";
    echo"<div class=\"col-12\">
        <div class=\"col-4\" style=\"width:100%;\">
            <a href=\"salarydetails?genpdf=1\" name=\"submit\" style=\" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;\">
                Simpan Sebagai PDF
            </a>
        </div>
    </div>";
?>
@endsection
<?php
  /*  require '../vendor/autoload.php';
    use Dompdf\Dompdf;
    if(isset($_GET['genpdf'])){
        if($_GET['genpdf']==='1'){
            $dompdf = new Dompdf();
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->loadHtml($message);
            $dompdf->render();
            $dompdf->stream();
        }
    }*/
    include_once "Saveaspdf.php";

?>