<?php


$allrecipes = file_get_contents("allrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";


$allrecipes = file_get_contents("snacksrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";
	

$allrecipes = file_get_contents("backenrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("fleischrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("fischrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("spicyrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents("vegetarischrecipes.html");
ob_start();
include 'indextemplate.php';
$content = ob_get_contents();
$template=  "indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

?>