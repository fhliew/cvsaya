<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('cvsayastyles.css')}}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body style="background-color : #12b5331a;">

        <div class="col-sm-12" id="top-border"style="width:100%;height: <?= $topborderheight?>px; position:fixed; top:0; background-color:#12B533;z-index:1">
            <div style="font-weight: bold; text-align: center; padding-top: 22px; color: white; font-size: 20px;"> <label id="top-border-title"><?= $title?></label></div>
            <a href="/cv/<?=strtolower($title)?>" style="font-size: 21px; color: white;transform: scale(1, 1.5);float: left;margin-right:20px;margin-top:-36px;color: white;"><label>&#65308</label>
            </a>
            <?php
                $titles = ['Pendidikan','Pengalaman','Kualifikasi'];
                $options ="";
                foreach($titles as $t){
                    if($t !== $title) $options .= "<option value=\"$t\"> $t </option>";
                }
                echo "<select name=\"pilihtemacv\" id=\"pilihtemacv\" style=\"border-radius: 10px;
                    box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
                    font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
                    text-align: left; height: 35px;\" class=\"form-select\" on>   
                        <option selected=\"selected\">".$title."</option>".$options."
                    </select>";
            ?>
        </div>
        <div class="container px-4 py-5" style ="margin-top:<?= "".$mt?>px;z-index:0;">
            <div class="row gy-2" id="content-area">
                @if($errors->any())
                    <?= "<script> alert('".$errors->first()."')</script>"?>
                @endif
                <form action="/cv/<?=strtolower($title)?>/edit/submit" method="POST">
                    @csrf
                    <div class="row gy-2" id="content-area">
                        <div class="col-12">
                            <label style="font-weight:bold; font-size:20px;"><?= $title ?></label>
                            <input type="hidden" name="title" value="<?=$title?>">
                            <input type="hidden" name="variables" value="<?=$variables?>">
                        </div>
                        <?php
                            $form='';
                            if($title === 'Kualifikasi'){
                                $form="
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Kelebihan/Hobi/Keahlian</label>
                                            <input type=\"text\" name=\"kualifikasi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataKualifikasi[0]['kualifikasi']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                                    </div>";
                            }
                            else if($title === 'Pengalaman'){
                                $form="
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label>Tanggal Masuk</label>
                                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"tahun\" value=\"".$dataPengalaman[0]['tahun']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label>Tanggal Selesai</label>
                                            <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\" value=\"".$dataPengalaman[0]['sampai']."\" />
                                            <hr id=\"line\">
                                        </div>
                                    </div>

                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Jabatan/Posisi</label>
                                            <input type=\"text\" name=\"sebagai\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['sebagai']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Instansi</label>
                                            <input type=\"text\" name=\"perusahaan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['perusahaan']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Gaji Pokok</label>
                                            <input type=\"text\" name=\"gaji\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['gaji']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Jobdesk/Rincian pekerjaan</label>
                                            <input type=\"text\" name=\"jobdesk\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['jobdesk']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Alasan keluar/Resign</label>
                                            <input type=\"text\" name=\"resign\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['resign']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Nomor Referensi/Email</label>
                                            <input type=\"text\" name=\"referensi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['referensi']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Kondisi Kerja</label>
                                            <input type=\"text\" name=\"kondisi\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPengalaman[0]['kondisi']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                                    </div>";
                            } else {
                                $form ="
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <div class=\"col-12\">
                                                <label>Tanggal Masuk</label>
                                            </div>
                                            <div class=\"col-12\">
                                                <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"Tahun\" value=\"".$dataPendidikan[0]['Tahun']."\" />
                                            </div>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <div class=\"col-12\">
                                                <label>Tanggal Selesai</label>
                                            </div>
                                            <div class=\"col-12\">
                                                <input type=\"date\" style=\"border: 0;background:transparent;\" name=\"sampai\" value=\"".$dataPendidikan[0]['sampai']."\" />
                                            </div>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Jenjang</label>
                                            <input type=\"text\" name=\"pendidikan\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPendidikan[0]['pendidikan']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>Instansi</label>
                                            <input type=\"text\" name=\"asal\" id=\"input_box\" class=\"form-control border-top-0\" placeholder=\"Isi disini\" value=\"".$dataPendidikan[0]['asal']."\"/>
                                            <hr id=\"line\">
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <label>*Isi selengkapnya untuk meningkatkan tingkat kepercayaan perekrut</label>
                                        </div>
                                    </div>";
                            }
                            echo $form;
                        ?>
                        <div class="col-8">
                            <label></label>               
                        </div>
                        <div class='col-4 mt-3'>
                            <input type="submit" name="edit"  style=" float:right;width:80%;height: 30px; padding-top: 4px; background: #4FD240; border-radius: 5px; text-align: center; font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>