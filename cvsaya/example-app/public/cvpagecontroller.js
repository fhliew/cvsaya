$(document).ready(function() {
    $("#top-border").on('change','#pilihtemacv',function(){
        alert("change");
        console.log("change");
        $('#top-border-title').empty();
        $('#top-border-title').append(this.value);
        var message=showpage(this.value);
        
        $('#content-area').empty();
        $('#content-area').append(message);

        $.ajax(
            "cvpagetables.php?pagetitle="+this.value,
            {
                success: function(data) {
                    $('#table').empty();
                    $('#table').append(data);
                },
                error: function() {
                    $('#table').empty();
                    alert("Fail to populate table");
                }
             }
        );
    })
});   

function showpage(pagetitle){
    switch(pagetitle){
        default:
            return(`
            <div class="col-12">
                <label style="font-weight:bold; font-size:20px;">Pendidikan</label>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="col-12">
                        <label>Tanggal Masuk</label>
                    </div>
                    <div class="col-12">
                        <input type="date" style="border: 0;background:transparent;" name="Tahun"/>
                    </div>
                    <hr id="line">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="col-12">
                        <label>Tanggal Selesai</label>
                    </div>
                    <div class="col-12">
                        <input type="date" style="border: 0;background:transparent;" name="sampai"/>
                    </div>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Jenjang</label>
                    <input type="text" name="pendidikan" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" name="asal" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
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
                    <input type="submit" name="simpanpendidikan" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                    font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
                </div>
            </div>
            `);  
        case 'Pengalaman':
            return(`
            <div class="col-12">
                <label style="font-weight:bold; font-size:20px;">Pengalaman</label>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" style="border: 0;background:transparent;" name="tahun"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" style="border: 0;background:transparent;" name="sampai"></input>
                    <hr id="line">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label>Jabatan/Posisi</label>
                    <input type="text" name="sebagai" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" name="perusahaan" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="text" name="gaji" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Jobdesk/Rincian pekerjaan</label>
                    <input type="text" name="jobdesk" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Alasan keluar/Resign</label>
                    <input type="text" name="resign" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Nomor Referensi/Email</label>
                    <input type="text" name="referensi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Kondisi Kerja</label>
                    <input type="text" name="kondisi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
            </div>
            <div class="col-8">
                <label></label>
            </div>
            <div class='col-4 mt-3'>
                <div class="col-4" style="width:100%;">
                    <input type="submit" name="simpanpendidikan" name="simpanpengalaman" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                    font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;/">
                </div>
            </div>
            `);
        case 'Kualifikasi':
            return(`
            <div class="col-12">
                <label style="font-weight:bold; font-size:20px;">Kualifikasi</label>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label>Kelebihan/Hobi/Keahlian</label>
                    <input type="text" name="kualifikasi" id="input_box" class="form-control border-top-0" placeholder="Isi disini"></input>
                    <hr id="line">
                </div>
            </div>
            <div class="col-12">
                <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
            </div>
            <div class="col-8">
                <label></label>
            </div>
            <div class='col-4 mt-3'>
                <div class="col-4" style="width:100%;">
                    <input type="submit" name="simpankualifikasi" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                    font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
                </div>
            </div>
            `);
    }
}