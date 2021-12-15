@extends('partials/cvsayatopborder')

@section('content')
        <form>
            <div class="col-12">
                <div class="row gx-5">
                    <div class="col-6">
                        <div class="col-12">
                        <label style="font-weight:bold;font-size:13px;">Tanggal Mulai</label>
                        </div>
                        <div class="col-12">
                            <input type="date" style="background:transparent; border:0;"  name="tanggalmulai"/>
                        </div>
                        <hr style="margin-top: 0px;">
                    </div>
                    <div class="col-6">
                        <div class="col-12">
                        <label style="font-weight:bold;font-size:13px;">Tanggal Selesai</label>
                        </div>
                        <div class="col-12">
                            <input type="date" style="background:transparent; border:0;"  name="tanggalselesai"/>
                        </div>
                        <hr style="margin-top: 0px;">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Alasan</label>
                    <textarea class="form-control" id="alasan" rows="4"></textarea>
                </div>
            </div>
            <div class="col-12 mt-0">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="menikah">
                    <label class="form-check-label">
                        Menikah/Pesta
                    </label>
                </div>
                <div class="form-check form-check-inline rb_attmargin">
                    <input class="form-check-input" type="radio" name="sakit">
                    <label class="form-check-label">
                        Sakit
                    </label>
                </div>
                <div class="form-check form-check-inline rb_attmargin">
                    <input class="form-check-input" type="radio" name="kondisi">
                    <label class="form-check-label">
                        Kondisi
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="saudarameninggal">
                    <label class="form-check-label">
                        Saudara Meninggal
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kuliah">
                    <label class="form-check-label">
                        Kuliah
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="row gx-0">
                    <div class="col-8"> </div>
                    <div class='col-4 mt-4'>
                        <div class="col-4" style="width:100%;">
                            <a href="/" name="submit" class="submit-button"> Submit </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-12 mt-4">
            <hr style="opacity:1;">
            <label style="font-weight:bold; font-size:13px;"> Riwayat Izin/Cuti</label>
        </div>

        <div class="col-12 mt-3">
            <table class="table">
                <thead id="attendancetopbottransparent">
                    <tr> 
                        <th id="attendancetopbottransparent" style ="border-bottom: 1px solid black;">Mulai</th>
                        <th id= "attendancetableleftbot">Sampai</th>
                        <th id= "attendancetableleftbot">Durasi</th>
                        <th id= "attendancetableleftbot">Status</th>
                    </tr>
                </thead>
                <tbody id="mytablecontent" class="table-body">
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
