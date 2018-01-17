<?php
// Hier werden die Coockies definiert
if (isset  ($_COOKIE["language"])){} else {
  setcookie("language",'en',time()+(3600*24*200), "/");
  header("Refresh:0");
  
}
?>
