@extends('partials/cvsayatopborder')
@section('content')
@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif

<form action="input" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <div class="form-group">
                <label>Posisi yang diinginkan</label>
                <input type="text" value=<?=$dataEmp['job']?> name="job" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
    </div>
</form>
@endsection