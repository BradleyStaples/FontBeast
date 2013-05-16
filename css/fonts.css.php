<?php header("Content-type: text/css"); ?> 
<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require("../inc/class.php");
$fb = new fontBeast();
$fb->writeCssDeclarations();
?>