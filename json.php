<?php
ob_start('ob_gzhandler');
require "inc/class.php";
error_reporting(E_ALL);
ini_set("display_errors",1);
$fb = new fontBeast();

$cssLink = $fb -> getCssLink();
$cssOutput = $cssLink . "\n<style>\n" . $fb -> getCSSOutput() . "</style>";
$jsOutput = "";
$htmlOutput = "";

$arry = $fb -> createArray($cssLink,$cssOutput,$jsOutput,$htmlOutput);
echo json_encode($arry);
ob_end_flush();
?>