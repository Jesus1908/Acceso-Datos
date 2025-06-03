<?php

require_once '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
  ob_start();
  include_once '../../public/css/estilo-reporte.html';
  include_once '../contents/content_reporte2.php';
  $content = ob_get_clean();

  $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(15 ,5 ,15, 5));
  $html2pdf->pdf->SetDisplayMode('fullpage');
  $html2pdf->writeHTML($content);
  $html2pdf->output('Jesus.pdf');

} catch (Html2PdfException $e) {
  $html2pdf ->clean();
  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}
