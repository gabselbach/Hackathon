<?php
session_start();
 if (empty($_SESSION["idPrefeitura"])||empty($_SESSION["emailPrefeitura"]) ||empty($_SESSION['cidade']))
  header("location: login.php");
 else
 {
  if (empty($_COOKIE["tempo"]))
  {
   session_destroy();
   header("location: login.php");
  }
 }
 setcookie("tempo","existe",time()+10*60);
?>
