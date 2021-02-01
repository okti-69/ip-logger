<?php
require "/src/stronaHtml.html";
require "/src/przekierowanie.php";
if ($_GET["redirect"]){
	redirect($_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
