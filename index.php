<?php
require "/src/przekierowanie.php";
require "/src/logger.php";
if ($_GET["redirect"]){
	redirect($_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
