@extends('partials/cvsayatopborder')
@section('content')
    <div class="col-12">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" id="input_box" class="form-control border-top-0">
                <option disabled selected value> Pilih jenis Kelamin </option>
                <option value="cowok">Cowok</option>
                <option value="cewek">Cewek</option>
            </select>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Alamat Tinggal (Sekarang)</label>
            <input type="text" name="alamat_tinggal" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Agama</label>
            <select name="agama" id="input_box" class="form-control border-top-0">
                <option disabled selected value> Pilih Agama </option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="buddha">Buddha</option>
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
            <input type="text" name="akun_instagram" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Akun Tik Tok</label>
            <input type="text" name="akun_tiktok" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Akun Youtube</label>
            <input type="text" name="akun_youtube" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Akun Facebook</label>
            <input type="text" name="akun_facebook" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Website Pribadi</label>
            <input type="text" name="website_pribadi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
            <hr id="line">
        </div>
    </div>
@endsection