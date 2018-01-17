<?php
//Sprache des Users wird ermittelt
function get_user_language($user) {
  //Funktion läd sich den Sprach Kürzel aus der Datenbank
  echo "de";
}
//definiere die Version der Stylesheets
function get_style_version() {echo "1.125";}
//Erkennt Mobiles Endgerät
function find_mobile_browser() {
    if(preg_match('/(iphone|ipad|ipod)/i', $_SERVER['HTTP_USER_AGENT'])) {
        return true;
    } else {
        return false;
    }
}

?>
