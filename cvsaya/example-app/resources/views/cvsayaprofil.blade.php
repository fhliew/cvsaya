@extends('partials/cvsayatopborder')
@section('content')
<form action="input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
    <?=$form?>
    <div class="col-8">
        <label></label>
    </div>
    <div class="col-4 mt-3">
        <div class="col-4" style="width:100%;">
            <input type="submit" name="submitprofil" style="width:100%; float:right;height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
            font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
        </div>
    </div> 
</form>
@endsection