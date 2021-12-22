@extends('partials/cvsayatopborder')

@section('content')

@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif
<form action="profil/input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" required value =<?= $dataEmp['nama']?> name="nama" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <span> @error("nama"){{"Tolong nama diisi!"}} @enderror </span>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" value =<?= $dataEmpdetails['ttl']?> name="ttl" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" required value =<?= $dataEmpdetails['tpl']?> name="tpl" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gender</label>
                <select name="jk" id="input_box" class="form-control border-top-0">
                    <option disabled selected hidden value ="">Pilih Jenis Kelamin</option>
                    
                    <option value="P" <?= ($dataEmpdetails['jk'] == 'P' ? "selected" : "")?>>Cewek</option>
                    <option value="L" <?= ($dataEmpdetails['jk'] == 'L' ? "selected" : "")?>>Cowok</option>
                    <option value="M" <?= ($dataEmpdetails['jk'] == 'M' ? "selected" : "")?>>Lainnya</option>
                    <?= var_dump($dataEmpdetails['jk'])?>
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
                <input type="text" value =<?= $dataEmp['alamat']?> name="alamat" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Agama</label>
                <select name="agama" id="input_box" class="form-control border-top-0">
                    <option disabled selected value> <?=((!empty($agama['agama']))? $agama['agama']:"Pilih Agama")?></option>
                    '.$agamaoptions?>
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
                <input type="text" value = <?= $dataEmp['website']?> name="website" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
            
        <div class="col-8">
            <label></label>
        </div>
        <div class="col-4 mt-3">
            <div class="col-4" style="width:100%;">
                <input type="submit" id="submitprofil" style="width:100%; float:right;height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
            </div>
        </div> 
    </div>
</form>
@endsection
