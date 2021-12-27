<?php
    if(isset($_POST['ktp'])) 
?>
@extends('partials/cvsayatopborder')

@section('content')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif

<form action="/dokumen/submit" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-9">
            <label>Foto KTP</label>
            <div class="col-12" id="ktp">
                <?= (!empty($dataDokumen['ktp']))?
                    '<img src="'.$dataDokumen['ktp'].'" alt="logo" width="200" height="200" style="float:left; border-radius: 5px;  object-fit: scale_down;"/>':""
                ?>
            </div>
        </div>
        <div class="col-3">
            <input class="custom-file-input" name="ktp" style="outline:none;width: 50px;" onchange="readfile(this,'#ktp')" type="file" accept="image/png, .jpeg, .jpg, image/gif" />
        </div>

        <div class="col-9">
            <label>Foto Selfie Depan </label>
            <div class="col-12" id="sdepan"> 
                <?= (!empty($dataDokumen['Gambar']))?
                    '<img src="'.$dataDokumen['Gambar'].'" alt="logo" width="200" height="200" style="float:left; border-radius: 5px;  object-fit: scale_down;"/>':""
                ?>
            </div>
        </div>
        <div class="col-3">
            <input class="custom-file-input" name="Gambar" style="outline:none;width: 50px;" onchange="readfile(this,'#sdepan')" type="file" accept="image/*"/>
        </div>

        <div class="col-9">
            <label>Foto tampak kanan</label>
            <div class="col-12" id="tampakkanan"> 
                <?= (!empty($dataDokumen['kanan']))?
                    '<img src="'.$dataDokumen['kanan'].'" alt="logo" width="200" height="200" style="float:left; border-radius: 5px;  object-fit: scale_down;"/>':""
                ?>
            </div>
        </div>
        <div class="col-3">
            <input class="custom-file-input" name="kanan" style="outline:none;width: 50px;" onchange="readfile(this,'#tampakkanan')" type="file" accept="image/*"/>
        </div>

        <div class="col-9">
            <label>Foto tampak kiri</label>
            <div class="col-12" id="tampakkiri"> 
                <?= (!empty($dataDokumen['kiri']))?
                    '<img src="'.$dataDokumen['kiri'].'" alt="logo" width="200" height="200" style="float:left; border-radius: 5px;  object-fit: scale_down;"/>':""
                ?>
            </div>
        </div>
        <div class="col-3">
            <input class="custom-file-input" name="kiri" style="outline:none;width: 50px;" onchange="readfile(this,'#tampakkiri')" type="file" accept="image/*"  />
        </div>

        <div class="col-9">
            <label>Akta Nikah</label>
            <div class="col-12" id="aktanikah"> 
                <?= (!empty($dataDokumen['akta_Nikah']))?
                    '<img src="'.$dataDokumen['akta_Nikah'].'" alt="logo" width="200" height="200" style="float:left; border-radius: 5px;  object-fit: scale_down;"/>':""
                ?>
            </div>
        </div>
        <div class="col-3">
            <input class="custom-file-input" name="akta_Nikah" style="outline:none;width: 50px;" onchange="readfile(this,'#aktanikah')" type="file" accept="image/*"  />
        </div>
        <div class="col-12">
            <label></label>               
        </div>
        <div class='col-12 mt-3'>
            <input type="submit" name="edit"  style=" float:right;width:100%;height: 30px; padding-top: 4px; background: #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
        </div>
    </div>
</form>
@endsection