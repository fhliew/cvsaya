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

<!------

------->

@section('form')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif

<form action="input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <!-- pagecont-->
        <?=$form?>
        <div class="col-8">
            <label></label>
        </div>
        <div class='col-4 mt-3'>
            <div class="col-4" style="width:100%;">
                <input type="submit" name="submitgaji" style="width:100%; float:right;height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
            </div>
        </div>
    </div>
</form>
@endsection