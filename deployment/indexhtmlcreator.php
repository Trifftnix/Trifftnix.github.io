<?php

$deploymentprefix2 = "";
$prefixDeploymentFolder = "deployment/";


$allrecipes = file_get_contents($deploymentprefix2."allrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."index.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix2."snacksrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexsnacks.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";
	

$allrecipes = file_get_contents($deploymentprefix2."backenrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexbacken.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix2."fleischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfleisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix2."fischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexfisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix2."spicyrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexspicy.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";
$allrecipes ="";


$allrecipes = file_get_contents($deploymentprefix2."vegetarischrecipes.html");
ob_start();
include $prefixDeploymentFolder.'indextemplate.php';
$content = ob_get_contents();
$template=  $deploymentprefix2."indexvegetarisch.html";
file_put_contents ($template, $content);
ob_end_clean();	
$content = "";	
$allrecipes ="";

?>