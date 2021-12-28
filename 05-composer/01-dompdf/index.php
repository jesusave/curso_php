<?php 

    require 'vendor/autoload.php';
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $html = "Nuevo archivo PDF con DomPDF";

    $dompdf->loadHtml($html);
    $dompdf->render();

    $dompdf->stream("ejemplo.pdf", ["Attachment" => 0]);