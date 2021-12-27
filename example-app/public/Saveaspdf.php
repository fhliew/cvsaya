<?php
    require '../vendor/autoload.php';
    use Dompdf\Dompdf;
    if(isset($_GET['genpdf'])){
        if($_GET['genpdf']==='1'){
            $dompdf = new Dompdf();
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->loadHtml($message);
            $dompdf->render();
            $dompdf->stream();
        }
    }
?>