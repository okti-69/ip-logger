<?php
function redirect($url){
 if (!$url){
  $url = "https://youtube.com"; 
 }
 header("Location: $url");
}
?>
