<?php 
    function gettable($pagetitle){
        $table="";
        $idlogin = 454;//$_COOKIE['idlogin'];
        $connection = new mysqli("151.106.99.2","u583537897_cvsaya","1q@J4EcZO","u583537897_beta");
        $GLOBALS['connection'] = $connection;
        switch($pagetitle){
            default:
                $pendidikan = mysqli_query($GLOBALS['connection'],"SELECT * FROM `1pendidikan` where idlogin=$idlogin and del='0' ORDER BY Tahun ASC"); 
                $table="
                <div class=\"col-12 mt-5\">
                    <table class=\"table\">
                        <thead style=\" border:0 !important;  
                        outline: 0px !important;
                        -webkit-appearance: none; 
                        box-shadow: none !important;
                        border-top: transparent !important;
                        border-bottom: transparent !important;
                        padding-left: 0px;
                        \">
                            <tr> 
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Mulai</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Selesai</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Jenjang</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Instansi</th>
                                <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                        outline: 0px !important;
                        box-shadow: none !important;
                        border-top: 0px solid transparent !important;
                        border-bottom: 0px solid transparent !important;\">";

                while ($r=mysqli_fetch_array($pendidikan)){
                    $table .="
                    <tr>
                        <td style =\"text-align:center;\">".date('d/m/Y', strtotime($r['Tahun']))."</td>
                        <td style =\"text-align:center;\">".date('d/m/Y', strtotime($r['sampai']))."</td>
                        <td style =\"text-align:center;\">".$r['pendidikan']."</td> 
                        <td style =\"text-align:center;\">".$r['asal']."</td> 
                        <td style =\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['idpendidikan']."'>Edit</a></td>
                    </tr>";
                } 
                break;
            case 'Pengalaman':
                $pengalaman = mysqli_query($GLOBALS['connection'],"SELECT * FROM `1pengalaman` where idlogin=$idlogin and del='0' ORDER BY tahun ASC"); 
                $table="<div class=\"col-12 mt-5\">
                <table class=\"table\">
                    <thead style=\" border:0 !important;  
                    outline: 0px !important;
                    -webkit-appearance: none; 
                    box-shadow: none !important;
                    border-top: transparent !important;
                    border-bottom: transparent !important;
                    padding-left: 0px;
                    \">
                        <tr> 
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Mulai</th>
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Selesai</th>
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Instansi</th>
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                        outline: 0px !important;
                        box-shadow: none !important;
                        border-top: 0px solid transparent !important;
                        border-bottom: 0px solid transparent !important;\">";
                while ($r=mysqli_fetch_array($pengalaman)){
                    $table .="
                    <tr>
                        <td style=\"text-align:center;\">".date('d/m/Y', strtotime($r['tahun']))."</td>
                        <td style=\"text-align:center;\">".date('d/m/Y', strtotime($r['sampai']))."</td>
                        <td style=\"text-align:center;\">".$r['perusahaan']."</td> 
                        <td style=\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['idpengalaman']."'>Edit</a></td>
                    </tr>";
                } 
                break;
            case 'Kualifikasi':
                $idlogin = 644;
                $kualifikasi = mysqli_query($GLOBALS['connection'],"SELECT * FROM `1kualifikasi` where idlogin=$idlogin and del='0' ORDER BY TglPost ASC"); 
                $table="<div class=\"col-12 mt-5\">
                <table class=\"table\">
                    <thead style=\" border:0 !important;  
                    outline: 0px !important;
                    -webkit-appearance: none; 
                    box-shadow: none !important;
                    border-top: transparent !important;
                    border-bottom: transparent !important;
                    padding-left: 0px;
                    \">
                        <tr> 
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Kualifikasi</th>
                            <th style =\"border-bottom: 1px solid black; text-align:center;\">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id=\"mytablecontent\" style=\"border:0 !important;  
                        outline: 0px !important;
                        box-shadow: none !important;
                        border-top: 0px solid transparent !important;
                        border-bottom: 0px solid transparent !important;\">";
                    while ($r=mysqli_fetch_array($kualifikasi)){
                        $table .="
                        <tr>
                            <td style=\"text-align:center;\">".$r['kualifikasi']."</td> 
                            <td style=\"text-align:center;\"><a href='form.php?act=pendidikan&id=".$r['IDkualifikasi']."'>Edit</a></td>
                        </tr>";
                    } 
                break;
            }
            return "".$table."</tbody></table></div>";
    }
?>