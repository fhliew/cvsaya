@extends('partials/cvsayatopborder')
@section('content')
    <div class="col-12">
        <label style="font-weight:bold; font-size:20px;">Pendidikan</label>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" style="border: 0;background:transparent;" name="Tanggal Masuk"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" style="border: 0;background:transparent;" name="Tanggal Masuk"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Jenjang</label>
            <input type="text" name="jenjang" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>Instansi</label>
            <input type="text" name="instansi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
            <hr id="line">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
        </div>
    </div>
    <div class="col-8">
        <label></label>
    </div>
    <div class='col-4 mt-3'>
        <div class="col-4" style="width:100%;">
            <a href="?" name="simpanpendidikan" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
            font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;">
                Simpan
            </a>
        </div>
    </div>
    <div class="col-12 mt-3">
        <table class="table">
            <thead style=" border:0 !important;  
            outline: 0px !important;
            -webkit-appearance: none; 
            box-shadow: none !important;
            border-top: transparent !important;
            border-bottom: transparent !important;
            padding-left: 0px;
            ">
                <tr> 
                    <th style ="border-bottom: 1px solid black; text-align:center;">Mulai</th>
                    <th style ="border-bottom: 1px solid black; text-align:center;">Selesai</th>
                    <th style ="border-bottom: 1px solid black; text-align:center;">Jenjang</th>
                    <th style ="border-bottom: 1px solid black; text-align:center;">Instansi</th>
                    <th style ="border-bottom: 1px solid black; text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="mytablecontent" style="border:0 !important;  
            outline: 0px !important;
            box-shadow: none !important;
            border-top: 0px solid transparent !important;
            border-bottom: 0px solid transparent !important;">
                <tr>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">Edit</td>
                </tr>
                <tr>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">Edit</td>
                </tr>
                <tr>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">Edit</td>
                </tr>
                <tr>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">useracco</td>
                    <td class="cvtabletopbottransparent">Edit</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

