@extends('partials/cvsayatopborder')

@section('content')
    <div class="col-9">
        <label>Foto KTP</label>
    <div class="col-12" id="ktp"> </div>
    </div>
    <div class="col-3">
        <input  class="custom-file-input" style="outline:none;width: 50px;" onchange="readfile(this,'#ktp')" type="file" accept="image/png, .jpeg, .jpg, image/gif"></input>
    </div>

    <div class="col-9">
        <label>Foto Selfie Depan </label>
        <div class="col-12" id="sdepan"> </div>
    </div>
    <div class="col-3">
        <input class="custom-file-input" style="outline:none;width: 50px;" onchange="readfile(this,'#sdepan')" type="file" accept="image/*">
    </div>

    <div class="col-9">
        <label>Foto tampak kanan</label>
        <div class="col-12" id="tampakkanan"> </div>
    </div>
    <div class="col-3">
        <input class="custom-file-input" style="outline:none;width: 50px;" onchange="readfile(this,'#tampakkanan')" type="file" accept="image/*">
    </div>

    <div class="col-9">
        <label>Foto tampak kiri</label>
        <div class="col-12" id="tampakkiri"> </div>
    </div>
    <div class="col-3">
        <input class="custom-file-input" style="outline:none;width: 50px;" onchange="readfile(this,'#tampakkiri')" type="file" accept="image/*">
    </div>


    <div class="col-9">
        <label>Akta Nikah</label>
        <div class="col-12" id="aktanikah"> </div>
    </div>
    <div class="col-3">
        <input class="custom-file-input" style="outline:none;width: 50px;" onchange="readfile(this,'#aktanikah')" type="file" accept="image/*">
    </div>
@endsection