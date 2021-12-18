<?php
$connection = new mysqli("151.106.99.2","u583537897_cvsaya","1q@J4EcZO","u583537897_beta");
// Check connection
/*if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}*/
$GLOBALS['connection'] = $connection;
?>

@extends('partials/cvsayatopborder')
@section('content')

<!------

<?php
$idlogin = 13;//$_COOKIE['idlogin'];

$emp_data=mysqli_query($GLOBALS['connection'],"SELECT job,ttl,tpl,jk,alamat,IdAgama,website FROM `1employee` as e INNER JOIN `1employeedetail` as ed on e.idlogin = ed.idlogin where e.idlogin = $idlogin limit 1");
$emp_data = mysqli_fetch_array($emp_data,MYSQLI_ASSOC); 

$agama = mysqli_query($GLOBALS['connection'],"SELECT * FROM `agama`  WHERE IdAgama =".$emp_data['IdAgama']." limit 1");
$agama = mysqli_fetch_array($agama,MYSQLI_ASSOC); 

 ?>

------->

    <div class="col-12">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" value ="<?='Unknown'//$emp_data['"nama']?>" name="nama" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" value ="<?=$emp_data['ttl']?>" nam"e="tanggal_lahir" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" value ="<?=$emp_data['tpl']?>" nam"e="tempat_lahir" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" id="input_box" class="form-control border-top-0">
                <option disabled selected value> <?=$emp_data['jk']?> Pilih jenis Kelamin </option>
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
            <input type="text" value ="<?=$emp_data['alamat']?>" name="alamat_tinggal" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Agama</label>
            <select name="agama" id="input_box" class="form-control border-top-0">
                <option disabled selected value> <?=(!empty($agama['agama']))? $agama['agama']:"Pilih Agama" ?> </option>
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
            <input type="text" value = "<?=$emp_data['website']?>" name="website_pribadi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    
@endsection