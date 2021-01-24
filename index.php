<?php
require "txt.php";
if ($_GET["redirect"]){
	header("Location: ".$_GET["redirect"]);
}
header("Location: https://youtube.com");
?>
