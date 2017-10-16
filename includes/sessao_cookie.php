<?php
session_start();
 if (empty($_SESSION["idUsuario"])||empty($_SESSION["emailUsuario"]) ||empty($_SESSION["usuario"]))
  header("location: index.php");
 else
 {
  if (empty($_COOKIE["tempo"]))
  {
   session_destroy();
   header("location: index.php");
  }
 }
 setcookie("tempo","existe",time()+10*60);
?>
