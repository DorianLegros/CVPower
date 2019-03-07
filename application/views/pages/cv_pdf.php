<?php
require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if ($res[0]['pro'][0]['driving_licence'] == 1) {
    $permis = "Oui";
} else {
    $permis = "Non";
}

if ($res[0]['lan'][0]['lan_write'] == 1) {
    $write = "Oui";
} else {
    $write = "Non";
}
if ($res[0]['lan'][0]['lan_read'] == 1) {
    $read = "Oui";
} else {
    $read = "Non";
}
if ($res[0]['lan'][0]['lan_speak'] == 1) {
    $speak = "Oui";
} else {
    $speak = "Non";
}

//var_dump($res);


$html = "

<style>

.page {
    background-color : #DFF2FF;
height: 101%;
}
h1 { text-align: center;  }
#civil p {
        margin: 0.3em 0px; /* 5px/16px 0px; */
        display: inline-block;
        margin-right: 20px;
    }
#section {
padding-bottom: -5px;
}
#section h2, #civil h2, h3, h1 {
        font-size: 2em; /* 32 px */
        font-weight: bold;
        color: #DFF2FF;
        background-color: #318CE7;
    }
#section table th{
        text-align: left;
        font-size: 1.2em;
    }
    #section table td{
        padding-right: 60px;
        font-size: 1.2em;
    }
#formation table tr:nth-child(2n) td {

        padding-bottom: 1em; /* 16px */
    }


</style>
<body>

<div class='page'>
<h1>" . $res[0]['pro'][0]['name'] ." ". $res[0]['pro'][0]['lastname'] ."</h1>
<div id='civil'>
    <h2>". $res[0][0]->name ."</h2>
    <p>&nbsp; &nbsp; ". $res[0][0]->description ."</p>
    <p> &nbsp; &nbsp;
    " ."0". $res[0]['pro'][0]['phone_number'] ." &nbsp; &nbsp;
    ". $res[0]['pro'][0]['mail'] ." &nbsp; &nbsp;
    Permis ". $permis ."</p>
</div>
<div id='section'>
        <h2>EXPERIENCES PROFESSIONNELLES</h2>
        <table>";

foreach($res[0]['exp'] as $exps){
    //$html .= print_r($exps, true);
    $html .=   "<tr>
                <td> &nbsp; &nbsp; ". date('d M Y', strtotime($exps['beginning'])) . " - " . date('d M Y', strtotime($exps['ending'])) ."</td>
                <th>".$exps['name_job'] . "</th>
            </tr>
            <tr>
                <td></td>
                <td> &nbsp; &nbsp; ".$exps['compagny'] . "</td>
            </tr>" ;
}

$html .="
        </table>
    </div>
    <div id='section'>
        <h2>FORMATIONS</h2>
        <table>
        ";

foreach($res[0]['edu'] as $edus){
    $html .=   "<tr>
                <td> &nbsp; &nbsp; ". date('d M Y', strtotime($edus['beginning'])) . " - " . date('d M Y', strtotime($edus['ending'])) ."</td>
                <th> &nbsp; &nbsp; ".$edus['diploma'] ."</th>
            </tr>
            <tr>
                <td></td>
                <td>&nbsp; &nbsp; ".$edus['school'] . "</td>
            </tr>" ;
}

$html .="
         
        </table>
    </div>

    <div id='section'>
            	<h2>Compétences</h2>
        ";

foreach($res[0]['skp'] as $skps){
    $html .=   " <p> &nbsp; &nbsp; ".$skps['name'] ."&nbsp; &nbsp;<u>Principales</u></p>";
}
foreach($res[0]['sks'] as $skss){
    $html .=   " <p> &nbsp; &nbsp; ".$skss['name'] ."&nbsp; &nbsp;<u>Secondaires</u></p>";
}
foreach($res[0]['sko'] as $skso){
    $html .=   " <p> &nbsp; &nbsp; ".$skso['name'] ."&nbsp; &nbsp;<u>Organisationelles</u></p>";
}

$html .="

   </div>

   <div id='section'>
        <h2>Langues</h2>
     <table>   
       ";

foreach($res[0]['lan'] as $lans){
    //$html .= print_r($exps, true);
    $html .=   "<tr>
            <td> &nbsp; &nbsp; ".$lans['name'] . "</td>              
                <th>Lu</th>
                <th>écrit</th>
                <th>parlé</th>           
            </tr>
            <tr>        
                <th>&nbsp; &nbsp;</th>    
                <td>". $write . "</td>
                <td>". $read . "</td>
                <td>". $speak . "</td>
            </tr>" ;
}

$html .=" 
        
        
   </table>

    </div>

   <div id='section'>
            	<h2>Hobby</h2>
 	                  
         ";

foreach($res[0]['hob'] as $hobs){
    $html .=   " <p> &nbsp; &nbsp; ".$hobs['name'] ."</p>";
}


$html .="


   </div>
   
     <div id='section'>
            	<h2>Récompences</h2>
 	                  
         ";


foreach($res[0]['awa'] as $awas){
    $html .=   " <p> &nbsp; &nbsp; ".$awas['name'] ."&nbsp; &nbsp; ".date('d M Y', strtotime($awas['year'])) ."</p>";
    $html .=   " <p> &nbsp; &nbsp; ".$awas['description'] ."</p>";

}

$html .="


   </div>
    </div>
</body>


";
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();
