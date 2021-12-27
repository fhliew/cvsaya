@extends('partials/cvsayatopborder')

@section('content')
    <div class="col-6">
        <div class="col-12">
        <label style="font-weight:bold;font-size:13px;">Pilih Tanggal</label>
        </div>
        <div class="col-12">
            <input type="date" style="background:transparent; border:0;"  name="Tanggal"/>
        </div>
        <hr style="margin-top: 0px;">
    </div>
    <div class="col-6">
        <div class="col-12">
            <label style="font-weight:bold;font-size:13px;"> Filter</label>
            <select name="pilih_bulan" id="pilih_bulan" style="
            box-shadow: none !important; padding-left: 0px; 
            line-height: 9px; background: transparent; border:0;
            font-size: 10px; width: 100%; font-style: normal; font-weight: normal; 
            text-align: left; height: 16px;" class="form-control"> 
                <option disabled selected value> Pilih Jenis Filter</option>                   
                <option value> Absensi </option>
                <option value> Jadwal Kerja </option>
                <option value> Istirahat </option>
                <option value> Denda </option>

            </select>
            <hr style="margin-top: 0px;">
        </div>
    </div>
    <div class="col-12 mt-3">
        <table class="table">
            <thead id="attendancetopbottransparent">
                <tr> 
                    <th id="attendancetopbottransparent" style ="border-bottom: 1px solid black;">Tanggal</th>
                    <th id= "attendancetableleftbot">Masuk</th>
                    <th id= "attendancetableleftbot">Keluar</th>
                    <th id= "attendancetableleftbot">Status</th>
                </tr>
            </thead>
            <tbody id="mytablecontent" style="border:0 !important;  
            outline: 0px !important;
            box-shadow: none !important;
            border-top: 0px solid transparent !important;
            border-bottom: 0px solid transparent !important;">
                <tr>
                    <td style="border-top: 1px solid black; border-bottom:transparent;padding-left: 0px;text-align: center;">$useracco</td>
                    <td id="attendancetableleft">$userssss</td>
                    <td id="attendancetableleft">$useracco</td>
                    <td id="attendancetableleft">$useracco</td>
                </tr>
                <tr>
                    <td id="attendancetopbottransparent">$useracco</td>
                    <td id="attendancetableleft">$useraccs</td>
                    <td id="attendancetableleft">$useracss</td>
                    <td id="attendancetableleft">$useracco</td>
                </tr>
                <tr>
                    <td id="attendancetopbottransparent">$useracco</td>
                    <td id="attendancetableleft">$useracc]</td>
                    <td id="attendancetableleft">$useracco</td>
                    <td id="attendancetableleft">$useracco</td>
                </tr>
                <tr>
                    <td id="attendancetopbottransparent">$useracco</td>
                    <td id="attendancetableleft">$useracc]</td>
                    <td id="attendancetableleft">$useracco</td>
                    <td id="attendancetableleft">$useracso</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection