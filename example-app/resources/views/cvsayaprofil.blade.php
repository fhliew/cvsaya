@extends('partials/cvsayatopborder')

@section('content')

@if($errors->any())
    <?= "<script> alert('".$errors->first()."')</script>"?>
@endif
<form action="profil/submit" method="POST">
    @csrf
    <div class="row gy-2" id="content-area">
        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" required value ="<?= ($dataAdmin !== null)? $dataAdmin['nama_lengkap']:""?>" name="nama_lengkap" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="col-12">
                    <label>Tanggal Lahir</label>
                </div>
                <div class="col-12">
                    <input type="date" required style="border: 0;background:transparent;" value="<?= ($dataEmpDetails !== null)? $dataEmpDetails['ttl']:"" ?>" name="ttl"/>
                </div>
                <hr id="line">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" required value ="<?= ($dataEmpDetails !== null)? $dataEmpDetails['tpl']:""?>" name="tpl" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Gender</label>
                <select name="jk" required id="input_box" class="form-control border-top-0">
                    <option disabled selected hidden value ="">Pilih Jenis Kelamin</option>
                    <option value="P" <?= ($dataEmpDetails !== null && $dataEmpDetails['jk'] == 'P') ? "selected" :""?>>Cewek</option>
                    <option value="L" <?= ($dataEmpDetails !== null && $dataEmpDetails['jk'] == 'L') ? "selected" :""?>>Cowok</option>
                    <option value="M" <?= ($dataEmpDetails !== null && $dataEmpDetails['jk'] == 'M') ? "selected" :""?>>Lainnya</option>
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>NIK</label>
                <input type="text" required value ="<?= ($dataAdmin !== null)? $dataAdmin['id_ktp']:""?>" name="id_ktp" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Alamat Tinggal (Sekarang)</label>
                <input type="text" required value="<?= ($dataEmp !== null)? $dataEmp['alamat']:""?>" name="alamat" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Agama</label>
                <select name="IdAgama" required id="input_box" class="form-control border-top-0">
                    <option disabled selected hidden value ="">Pilih Agama</option>
                    <?php
                        $agamaoptions = "";
                        foreach($listAgama as $agama){
                            $agamaoptions .= 
                            "<option value=\"".$agama['IdAgama'].(($dataEmpDetails !== null && $dataEmpDetails['IdAgama'] === $agama['IdAgama']) ? "\" selected>" : "\">"). $agama['agama']."</option>";
                        }
                        echo $agamaoptions;
                    ?>
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Status Perkawinan</label>
                <select name="status_perkawinan" required id="input_box" class="form-control border-top-0">
                    <option disabled selected value> Pilih Status Perkawinan </option>
                    <option value="single">Single</option>
                    <option value="menikah">Menikah</option>
                </select>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Instagram</label>
                <input type="text" name="akun_instagram" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Tik Tok</label>
                <input type="text" name="akun_tiktok" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Youtube</label>
                <input type="text" name="akun_youtube" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Akun Facebook</label>
                <input type="text" name="akun_facebook" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Website Pribadi</label>
                <input type="text" required value ="<?= ($dataEmp !== null)? $dataEmp['website']:""?>" name="website" id="input_box" class="form-control border-top-0" placeholder="Isi disini"/>
                <hr id="line">
            </div>
        </div>
            
        <div class="col-8">
            <label></label>
        </div>
        <div class="col-4 mt-3">
            <div class="col-4" style="width:100%;">
                <input type="submit" id="submitprofil" style="width:100%; float:right;height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
            </div>
        </div> 
    </div>
</form>
@endsection
