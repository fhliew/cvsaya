<?php
    $connection = new mysqli("151.106.99.2","u583537897_cvsaya","1q@J4EcZO","u583537897_beta");
    $_GLOBALS['connection'] = $connection;
    if(isset($_GET['simpanpendidikan']) && $_GET['simpanpendidikan'] != null){
        $_GET['simpanpendidikan']=null;
        $query = "INSERT INTO `1pendidikan` (Tahun,sampai,pendidikan,asal) VALUES (".$_GET['Tahun'].','. $_GET['sampai'].','. $_GET['pendidikan'].','. $_GET['asal'].")";
        $query = mysqli_query($_GLOBALS['connection'], $query);
        if(mysqli_affected_rows($_GLOBALS['connection']) > 0){
            echo "<script> alert(\"Insert was Successful!!\")</script>";
        }else {
            echo "<script> alert(\"Insert was not Successful!!\");</script>";
        }
    }
    else if(isset($_GET['simpanpengalaman'])){

    }
    else if(isset($_GET['simpankualifikasi'])){

    } 
?>