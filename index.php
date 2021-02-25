<?php
require "src/logger.php";	
if (@$_GET["redirect"]){
	header("Location: ".$_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
