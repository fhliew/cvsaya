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

$emp_data=mysqli_query($GLOBALS['connection'],"select job,inginposisi,memimpin,profile from `1employee` where idlogin = $idlogin limit 1");

$gaji_data=mysqli_query($GLOBALS['connection'],"SELECT Previous,Current,Desired,Ulasan,kondisi FROM `1keinginangaji` where idlogin = $idlogin order by idGaji DESC");

$emp_data = mysqli_fetch_array($emp_data,MYSQLI_ASSOC); 
$gaji_data = mysqli_fetch_array($gaji_data,MYSQLI_ASSOC); 


 ?>

------->
    <div class="col-12">
        <div class="form-group">
            <label>Posisi yang diinginkan</label>
            <input type="text" value= "<?=$emp_data['job']?>" name="job" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Mengapa mengingikan posisi ini?</label>
            <input type="text" value= "<?=$emp_data['inginposisi']?>" name="inginposisi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Pernah Memimpin?</label>
            <input type="text" value= "<?=$emp_data['memimpin']?>" name="memimpin" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Ceritakan tentang dirimu</label>
            <input type="text" value= "<?=$emp_data['profile']?>" name="profile" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Apakah sekarang sedang bekerja?</label>
            <input type="text" value= "<?=$gaji_data['kondisi']?>" name="kondisi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
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
            <input type="text" value= "<?=$gaji_data['Previous']?>" name="Previous" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gaji Sekarang (Bila masih bekerja)</label>
            <input type="text" value= "<?=$gaji_data['Current']?>" name="Current" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Gaji yang diharapkan</label>
            <input type="text" value= "<?=$gaji_data['Desired']?>" name="Desired" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Ulasan/perbedaan gaji yang diharapkan</label>
            <input type="text" value= "<?=$gaji_data['Ulasan']?>" name="Ulasan" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
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