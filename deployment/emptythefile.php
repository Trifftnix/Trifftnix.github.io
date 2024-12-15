<?php

$content = "";



$allrecipes=  "allrecipes.html";
file_put_contents ($allrecipes, $content);

file_put_contents ("backenrecipes.html", "");
file_put_contents ("fleischrecipes.html", "");
file_put_contents ("fischrecipes.html", "");
file_put_contents ("snacksrecipes.html", "");
file_put_contents ("spicyrecipes.html", "");
file_put_contents ("vegetarischrecipes.html", "");

/*									// Funktion wieder einführen!					
$neuesRezept = file_get_contents ("Rezepte/neuesRezept.json");
if (file_exists("Rezepte/neuesRezept.json") == FALSE) {
	file_put_contents ("Rezepte/neuesRezept.json", $neuesRezept);
}*/
?>