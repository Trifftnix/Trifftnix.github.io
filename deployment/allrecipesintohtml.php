<?php


$allrecipes= file_get_contents("deployment/allrecipes");



$neuesRezept = $argv[1];
$neueVariablen = file_get_contents($neuesRezept);
$neueVariablen= json_decode ($neueVariablen);
var_dump($neueVariablen);
//Variablen
$Rezeptname = $neueVariablen->Rezeptname;
$BildnameohneEndung 	= $neueVariablen->BildnameohneEndung;


$neueRezeptzeile = "<div class='col-lg-4 col-md-6 col-sm-12 wow fadeIn'>
          <div class='recipe-item text-center'>
            <a href='recipe".$BildnameohneEndung.".html'>
              <img src='images/".$BildnameohneEndung.".jpg' alt='".$Rezeptname."' />
            </a>
            <br />
            <h3>".$Rezeptname."</h3>
          </div>
        </div>";


$allrecipes= $allrecipes.$neueRezeptzeile;


file_put_contents ("deployment/allrecipes", $allrecipes);

	
?>