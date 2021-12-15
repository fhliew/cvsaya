<?php
use PDF;

class Generatepdf extends Controller{
    function saveaspdf($html){
        $pdf = PDF::loadView('pdf.document',$html);
        //$pdf.WriteHTML($html);
        return $pdf->stream('document.pdf');
    }
}
?>