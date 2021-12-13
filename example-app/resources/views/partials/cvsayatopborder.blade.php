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
    </head>
    <body style="background-color : #12b5331a;">

        <div class="col-sm-12" style="width:100%;height: <?php if(true) echo 120; else echo 70;?>px; position:fixed; top:0; background-color:#12B533;z-index:1">
            <div style="font-weight: bold; text-align: center; padding-top: 22px; color: white; font-size: 20px;"> Profil</div>
            <a href="/" style="font-size: 21px; color: white;
            transform: scale(1, 1.5);float: left;margin-right:20px;margin-top:-29px;color: white;"><label>&#65308</label>
            </a>
            <div class="col-12 mt-4">
                <select name="pilihtemacv" id="pilihtemacv" style="border-radius: 10px;
                box-shadow: none !important; padding-left: 10px; padding-bottom:5px;
                font-size: 15px; width: 100%; font-style: normal; font-weight: normal; 
                text-align: left; height: 35px;" class="form-control">                    
                    <option value=""> Pendidikan </option>
                    <option value=""> Pengalaman </option>
                    <option value=""> Kualifikasi </option>
                </select>
            </div>
        </div>
        
        @yield('resignimg')
        <div class="container px-4 py-5" style ="margin-top:110px; z-index:0;">
            <div class="row gy-2">
                @yield('content')
            </div>
        </div>
    </body>
</html>
