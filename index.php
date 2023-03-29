<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

function moneyList($money, $typeList = 'ul')
{
    $list = '';
    foreach ($money as $currency) {
        $list .= "<li>$currency</li>";
    }
    return ("<$typeList>  $list  </$typeList>");
}

$money = ['dollar', 'euro', 'hrivna'];
$typeList = 'ol';
echo moneyList($money, 'ol');
?>
</html>
