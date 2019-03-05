<?php
require 'C:\Users\jonre\Dropbox\Dev\CVPower\vendor\autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$name = 'Jon';
$html = $res[0][0]->color;


$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();