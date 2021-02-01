<?php
$znaki = ["1","2","3","4","5","6","7","8","9","0"];
function check_bp(){
  if ($_GET["haslo"]){
    if ($_GET["haslo"] === $znaki[0] + $znaki[1] + $znaki[2]){
      session_start();
      $_SESSION["bp"] = "true";
    }
  }
}
function session_bp(){
  session_start();
  if ($_SESSION["bp"]){
    if ($_SESSION["bp"] === "true"){
      $bp = "true";
    }
  }
}
?>
