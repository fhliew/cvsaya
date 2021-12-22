@extends('partials/cvsayatopborder')

@section('form')
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
        <?= $form ?>
        <div class='col-4 mt-3'>
            <input type="submit" name="simpan" style=" float:right;width:80%;height: 30px; padding-top: 4px; background: #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
        </div>
    </div>
</form>
@endsection
@section('table')
<div class="row gy-2" id="table">
<?php
    switch($pagetitle){
        $table_data = $data;
        $table ="";
        default:
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

            foreach ($table_data as $r){
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
            foreach($table_data as $r){
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

            foreach($table_data as $r){
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

