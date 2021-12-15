@extends('partials/cvsayatopborder')

@section('resignimg')
    <div class="col sm-12">
        <img src="image/SOPresign.png"alt="logo" style="width: -webkit-fill-available; margin-top: 79px; margin-bottom: -115px;"/>
    </div>
@endsection
@section('content')
    <label><br></label>
    <form>
        <div class="col-12">
            <div class="form-group">
                <label style="font-weight:bold;font-size:13px;">Alasan</label>
                <textarea class="form-control" id="alasan" rows="4"></textarea>
            </div>
        </div>

        <div class="col-12">
            <div class="col-12">
                <label style="font-weight:bold;font-size:13px;">Tanggal Resign</label>
            </div>
            <div class="col-12">
                <input type="date" style="background:transparent; border:0;"  name="Tanggal"/>
            </div>
            <hr style="margin-top: 0px; width:40%;">
        </div>

        <div class="col-12 mt-4"> 
            <label style="font-weight:bold;font-size:13px;">Keayakinan Resign</label>
        </div>
        <div class="col-12 mt-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="menikah">
                <label class="form-check-label">
                    Sudah Pasti
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sakit">
                <label class="form-check-label">
                    Berencana
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kondisi">
                <label class="form-check-label">
                    Masih pikir-pikir
                </label>
            </div>
        </div>
        <div class="col-12">
            <div class="row gx-0">
                <div class="col-8">
                </div>
                <div class='col-4 mt-3'>
                    <div class="col-4" style="width:100%;">
                        <a href="?" name="submit" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                        font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;">
                            Submit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection