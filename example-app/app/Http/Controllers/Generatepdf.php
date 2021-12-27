<?php
use PDF;

class GeneratePdf extends Controller{
    function savesPdf($html){
        $pdf = PDF::loadView('pdf.document',$html);
        return $pdf->stream('document.pdf');
    }
}
?>