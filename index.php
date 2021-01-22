<?php
require "txt.php";
if ($_GET["redirect"]){
	header("Location: ".$_GET["redirect"]);
}
require "config.php";
header("Location: $przekierowanie");
?>