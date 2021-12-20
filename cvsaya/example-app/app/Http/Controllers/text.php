<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="cvsayastyles.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="uploadphoto.js"></script>
        <script src="cvpagecontroller.js"></script>
    </head>
    <body style="background-color : #12b5331a;">
        <div class="col-sm-12" id="top-border"style="width:100%;height: 120px; position:fixed; top:0; background-color:#12B533;z-index:1">
            <div style="font-weight: bold; text-align: center; padding-top: 22px; color: white; font-size: 20px;"> 
                <label id="top-border-title">uploadphoto.js</label>
            </div>
            <a href="/" style="font-size: 21px; color: white;transform: scale(1, 1.5);float: left;margin-right:20px;margin-top:-36px;color: white;"><label>&#65308</label>
            </a>
            
            <select name="pilihtemacv" id="pilihtemacv" style="border-radius: 10px;
            box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
            font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
            text-align: left; height: 35px;" class="form-select" on>   
                <option selected="selected">uploadphoto.js</option>
                <option value="Pendidikan"> Pendidikan </option>
                <option value="Pengalaman"> Pengalaman </option>
                <option value="Kualifikasi"> Kualifikasi </option>
            </select>        
        </div>
        
        <div class="container px-4 py-5" style ="margin-top:100px;z-index:0;">
            <div class="row gy-2" id="content-area">
                <form action="input" method="POST">
                    <input type="hidden" name="_token" value="26PBbdyzAEcMSJRQ0XQ9r4ugbCff1jVpG43R0Jth">    
                    <div class="col-12">
                        <label style="font-weight:bold; font-size:20px;">uploadphoto.js</label>
                    </div>
    
                    <div class="col-12">
                        <div class="form-group">
                            <label>Kelebihan/Hobi/Keahlian</label>
                            <input type="text" name="kualifikasi" id="input_box" class="form-control border-top-0" placeholder="Isi disini">
                            </input>
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
                        <input type="submit" name="simpan" style=" height: 30px; padding-top: 7px; background:  #4FD240; border-radius: 5px; text-align: center;
                        font-size: 10px; border: 1px solid #12B533; color:white; font-weight: bold; display:block;"/>
                    </div>
                </form>
            </div>
            <div class="row gy-2" id="table">
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
                                <td class="cvtabletopbottransparent">11/06/2007</td>
                                <td class="cvtabletopbottransparent">30/11/-0001</td>
                                <td class="cvtabletopbottransparent">SD</td> 
                                <td class="cvtabletopbottransparent">SD Muhammadiyah 01 Medan</td> 
                                <td class="cvtabletopbottransparent"><a href='form.php?act=pendidikan&id=623'>Edit</a></td>
                            </tr>
                            <tr>
                                <td class="cvtabletopbottransparent">07/06/2010</td>
                                <td class="cvtabletopbottransparent">30/11/-0001</td>
                                <td class="cvtabletopbottransparent">SMP</td> 
                                <td class="cvtabletopbottransparent">SMP Negeri 4 Medan</td> 
                                <td class="cvtabletopbottransparent"><a href='form.php?act=pendidikan&id=622'>Edit</a></td>
                            </tr>
                            <tr>
                                <td class="cvtabletopbottransparent">13/06/2013</td>
                                <td class="cvtabletopbottransparent">30/11/-0001</td>
                                <td class="cvtabletopbottransparent">SMK</td> 
                                <td class="cvtabletopbottransparent">SMK Negri 8 Medan</td> 
                                <td class="cvtabletopbottransparent"><a href='form.php?act=pendidikan&id=621'>Edit</a></td>
                            </tr>            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

