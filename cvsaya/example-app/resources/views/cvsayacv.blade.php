@extends('partials/cvsayatopborder')

@section('content')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif
<form action="input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <label style="font-weight:bold; font-size:20px;"><?= $title ?></label>
            <input type="hidden" name="title" value="<?=$title?>">
        </div>
        <?php
            $form='';
            if($title === 'Kualifikasi'){
                $form="
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Kelebihan/Hobi/Keahlian</label>
                            <input type=\"text\" name=\"kualifikasi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataKualifikasi[0]['kualifikasi']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                    </div>";
            }
            else if($title === 'Pengalaman'){
                $form="
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label>Tanggal Masuk</label>
                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"tahun\" value=".$dataPengalaman[0]['tahun']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <label>Tanggal Selesai</label>
                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\" value=".$dataPengalaman[0]['sampai']."/>
                            <hr id=\"line\">
                        </div>
                    </div>

                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Jabatan/Posisi</label>
                            <input type=\"text\" name=\"sebagai\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['sebagai']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Instansi</label>
                            <input type=\"text\" name=\"perusahaan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['perusahaan']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Gaji Pokok</label>
                            <input type=\"text\" name=\"gaji\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['gaji']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Jobdesk/Rincian pekerjaan</label>
                            <input type=\"text\" name=\"jobdesk\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['jobdesk']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Alasan keluar/Resign</label>
                            <input type=\"text\" name=\"resign\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['resign']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Nomor Referensi/Email</label>
                            <input type=\"text\" name=\"referensi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['referensi']."//>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Kondisi Kerja</label>
                            <input type=\"text\" name=\"kondisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPengalaman[0]['kondisi']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                    </div>";
            }
            else{
                $form ="
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <div class=\"col-12\">
                                <label>Tanggal Masuk</label>
                            </div>
                            <div class=\"col-12\">
                                <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"Tahun\" value=".$dataPendidikan[0]['Tahun']."/>
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
                                <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\" value=".$dataPendidikan[0]['sampai']."/>
                            </div>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Jenjang</label>
                            <input type=\"text\" name=\"pendidikan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPendidikan[0]['pendidikan']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>Instansi</label>
                            <input type=\"text\" name=\"asal\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=".$dataPendidikan[0]['asal']."/>
                            <hr id=\"line\">
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                        </div>
                    </div>";
            }
            echo $form;
        ?>
        <div class="col-8">
            <label></label>               
        </div>;
        <div class='col-4 mt-3'>
            <input type="submit" name="simpan" style=" float:right;width:80%;height: 30px; padding-top: 4px; background: #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
        </div>
    </div>
</form>
@endsection
@section('table')
<div class="row gy-2" id="table">
<?php
    $table ="";
    switch($title){
        default:
            $table.="
                <div class=\"col-12 mt-5\">
                    <table class=\"table\">
                        <thead style=\" border:0 !important;  
                        outline: 0px !important;
                        -webkit-appearance: none; 
                        box-shadow: none !important;
                        border-top: transparent !important;
                        border-bottom: transparent !important;
                        padding-left: 0px;
                        \">
                            <tr> 
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Mulai</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Selesai</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Jenjang</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Instansi</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                        outline: 0px !important;
                        box-shadow: none !important;
                        border-top: 0px solid transparent !important;
                        border-bottom: 0px solid transparent !important;\">";

            foreach ($dataPendidikan as $r){
                $table .="
                <tr>
                    <td style =\"text-align:center;\">".date('d/m/Y', strtotime($r['Tahun']))."</td>
                    <td style =\"text-align:center;\">".date('d/m/Y', strtotime($r['sampai']))."</td>
                    <td style =\"text-align:center;\">".$r['pendidikan']."</td> 
                    <td style =\"text-align:center;\">".$r['asal']."</td> 
                    <td style =\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['idpendidikan']."'>Edit</a></td>
                </tr>";
            } 
            break;
        case 'Pengalaman':
            $table="<div class=\"col-12 mt-5\">
            <table class=\"table\">
                <thead style=\" border:0 !important;  
                outline: 0px !important;
                -webkit-appearance: none; 
                box-shadow: none !important;
                border-top: transparent !important;
                border-bottom: transparent !important;
                padding-left: 0px;
                \">
                    <tr> 
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Mulai</th>
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Selesai</th>
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Instansi</th>
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                    </tr>
                </thead>
                <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                    outline: 0px !important;
                    box-shadow: none !important;
                    border-top: 0px solid transparent !important;
                    border-bottom: 0px solid transparent !important;\">";
            foreach($dataPengalaman as $r){
                $table .="
                <tr>
                    <td style=\"text-align:center;\">".date('d/m/Y', strtotime($r['tahun']))."</td>
                    <td style=\"text-align:center;\">".date('d/m/Y', strtotime($r['sampai']))."</td>
                    <td style=\"text-align:center;\">".$r['perusahaan']."</td> 
                    <td style=\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['idpengalaman']."'>Edit</a></td>
                </tr>";
        } 
        break;
        case 'Kualifikasi':
            $table="
            <div class=\"col-12 mt-5\">
                <table class=\"table\">
                <thead style=\" border:0 !important;  
                outline: 0px !important;
                -webkit-appearance: none; 
                box-shadow: none !important;
                border-top: transparent !important;
                border-bottom: transparent !important;
                padding-left: 0px;
                \">
                    <tr> 
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Kualifikasi</th>
                        <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                    </tr>
                </thead>
                <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                    outline: 0px !important;
                    box-shadow: none !important;
                    border-top: 0px solid transparent !important;
                    border-bottom: 0px solid transparent !important;\">";

            foreach($dataKualifikasi as $r){
                $table .="
                <tr>
                    <td style=\"text-align:center;\">".$r['kualifikasi']."</td> 
                    <td style=\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['IDkualifikasi']."'>Edit</a></td>
                </tr>";
            } 
            break;
    }
    echo $table;
?>
        </tbody>
    </table>
</div>
</div>
@endsection

