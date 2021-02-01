<?php
function redirect($url){
 if (!$url){
  $url = "https://discord.com"; 
 }
 header("Location: $url");
}
?>
