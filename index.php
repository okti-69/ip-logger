<?php
require "/src/logger.php";	
require "/src/przekierowanie.php";
bp();
if ($_GET["redirect"]){
	redirect($_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
