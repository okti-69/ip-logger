<?php
require "/src/stronaHtml.html";
require "/src/przekierowanie.php";
require "/src/logger.php";
if ($_GET["redirect"]){
	redirect($_GET["redirect"]);
} else {
	redirect("https://youtube.com");
}?>
