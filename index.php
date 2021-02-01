<?php
require "/src/przekierowanie.php";
require "/src/bp.php";
check_bp();
session_bp();
if (!$bp){
	if ("$bp" !== "true"){
		require "/src/logger.php";	
	}
} else {
	require "/src/logger.php";
}
if ($_GET["redirect"]){
	redirect($_GET["redirect"]);
} else {
	echo "Error 404: Not found";
}?>
