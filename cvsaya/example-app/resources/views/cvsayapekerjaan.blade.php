@extends('partials/cvsayatopborder')

@section('content')
    <div class="col-12">
        <div class="form-group">
            <label>Posisi yang diinginkan</label>
            <input type="text" name="posisidiinginkan" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Mengapa mengingikan posisi ini?</label>
            <input type="text" name="mengapaposisiini" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Pernah Memimpin?</label>
            <input type="text" name="pernahmemimpin" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Ceritakan tentang dirimu</label>
            <select name="ceritakandiri" id="input_box" class="form-control border-top-0">
                <option disabled selected value> Pilih jenis Kelamin </option>
                <option value="cowok">Cowok</option>
                <option value="cewek">Cewek</option>
            </select>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Apakah sekarang sedang bekerja?</label>
            <input type="text" name="sedangbekerja" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-8">
        <label></label>
    </div>
    <div class='col-4 mt-3'>
        <div class="col-4" style="width:100%;">
            <a href="?" name="submitpenjelasan" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
            font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;">
                Submit
            </a>
        </div>
    </div>
    <div class="col-12">
        <label style="font-weight:bold; font-size:20px;">Gaji</label>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gaji Sebelum</label>
            <input type="text" name="gajisebelum" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gaji Sekarang (Bila masih bekerja)</label>
            <input type="text" name="gajisekarang" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gaji yang diharapkan</label>
            <input type="text" name="gajidiharap" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Ulasan/perbedaan gaji yang diharapkan</label>
            <input type="text" name="ulasangaji" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-8">
        <label></label>
    </div>
    <div class='col-4 mt-3'>
        <div class="col-4" style="width:100%;">
            <a href="?" name="submitgaji" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
            font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;">
                Submit
            </a>
        </div>
    </div>
@endsection