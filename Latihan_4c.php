<?php

$ASEAN = [
    'Indonesia' => 'D.K.I. Jakarta',
    'Singapura'  =>  'Singapura',
    'Malaysia' => 'Kuala Lumpur',
    'Brunei' => 'Bandar Seri Begawan',
    'Thailand' => 'Bangkok',
    'Laos' => 'Vientiane',
    'Filipina' => 'Manila',
    'Myanmar' => 'Naypyidaw'
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar negara ASEAN dan Ibukota </title>
</head>

<body>
    <h1><font size="4"><strong>Daftar Negara ASEAN dan Ibukota :</Strong></font></h1>
<ul>
     <?php
    foreach ($ASEAN as $a => $b) {
        echo  "<li> $a  :   $b </li>";
       
    }
    ?></ul>
</body>

</html>