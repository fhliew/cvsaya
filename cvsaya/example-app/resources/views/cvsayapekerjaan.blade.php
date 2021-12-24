@extends('partials/cvsayatopborder')
@section('content')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif

<form action="/pekerjaan/submit" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <div class="form-group">
                <label>Posisi yang diinginkan</label>
                <input required type="text" value="<?=($dataEmp !== null)? $dataEmp['job'] :"" ?>" name="job" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Mengapa mengingikan posisi ini?</label>
                <input required type="text" value= "<?=($dataEmp !== null)? $dataEmp['inginposisi']:"" ?>" name="inginposisi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Pernah Memimpin?</label>
                <input required type="text" value= "<?=($dataEmp !== null)? $dataEmp['memimpin']:"" ?>" name="memimpin" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Ceritakan tentang dirimu</label>
                <input required type="text" value="<?=($dataEmp !== null)? $dataEmp['profile'] :"" ?>" name="profile" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Apakah sekarang sedang bekerja?</label>
                <input required type="text" value= "<?=($dataGaji !== null)? $dataGaji['kondisi']:""?>" name="kondisi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <label></label>
        </div>
        <div class="col-12">
            <label style="font-weight:bold; font-size:20px;">Gaji</label>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gaji Sebelum</label>
                <input required type="text" value= "<?=($dataGaji !== null)? $dataGaji['Previous']:""?>" name="Previous" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gaji Sekarang (Bila masih bekerja)</label>
                <input required type="text" value= "<?=($dataGaji !== null)? $dataGaji['Current']:""?>" name="Current" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gaji yang diharapkan</label>
                <input required type="text" value= "<?=($dataGaji !== null)? $dataGaji['Desired']:""?>" name="Desired" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Ulasan/perbedaan gaji yang diharapkan</label>
                <input required type="text" value= "<?=($dataGaji !== null)? $dataGaji['Ulasan']:""?>" name="Ulasan" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-8">
            <label></label>
        </div>
        <div class='col-4 mt-3'>
            <div class="col-4" style="width:100%;">
                <input required type="submit" name="submitpekerjaan" style="width:100%; float:right;height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
            </div>
        </div>
    </div>
</form>
@endsection