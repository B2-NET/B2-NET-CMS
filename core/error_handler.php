<?php

/* 
 * Diese Datei ist Teil des Projektes B2NET-CMS, welches von Alban Bruder im Rahmen 
 * seinerKomplexen Leistung im Fach Informatik am Gymnasium Burgstädt erstellt wurde.
 * 
 * Autor: Alban Bruder
 * Tutor: Frau Wetzig	
 * Betreuender Fachlehrer: Herr Schneider
 * 
 * Dateiinformation
 * Name:	
 * Ort:	
 * Funktion:
 */
error_reporting(E_ALL | E_STRICT);
define("FATAL", E_ERROR);
define("WARNING", E_WARNING);
define("PARSE", E_PARSE);
define("NOTICE", E_NOTICE);
$GLOBALS['errors'] = "";

// eigenen Handler definieren
set_error_handler("error_handler");
// Code für den eigenen Handler
function error_handler($errno, $errstr, $errorFile, $errline) {
    if ($errno === 1) {
        $type = "E_ERROR";
    } elseif ($errno === 2) {
        $type = "E_WARNING";
    } elseif ($errno === 4) {
        $type = "E_PARSE";
    } elseif ($errno === 8) {
        $type = "E_NOTICE";
    } elseif ($errno === 16) {
        $type = "E_CORE_ERROR";
    } elseif ($errno === 32) {
        $type = "E_CORE_WARNING";
    } elseif ($errno === 64) {
        $type = "E_COMPILE_ERROR";
    } elseif ($errno === 128) {
        $type = "E_COMPILE_WARNING";
    } elseif ($errno === 256) {
        $type = "E_USER_ERROR";
    } elseif ($errno === 512) {
        $type = "E_USER_WARNING";
    } elseif ($errno === 1024) {
        $type = "E_USER_NOTICE";
    } elseif ($errno === 2048) {
        $type = "E_STRICT";
    } elseif ($errno === 4096) {
        $type = "E_RECOVERABLE_ERROR";
    } elseif ($errno === 16384) {
        $type = "E_DEPRECATED";
    } elseif ($errno === 32767) {
        $type = "E_ALL";
    } else {
        $type = "E_UNKNOWN";
    }
    $GLOBALS['errors'] .= '<div class="'.$type.'">'.$type.': '.$errstr.' in '.$errorFile.' (L'.$errline.')</div>'."\n";
    
    $date = date("d M Y h:i:s", time());
//MYSQL-Verbindungsarray erstellen
    $mysql_config = (array) parse_ini_file('admin/MySQL_config.ini', true);
    //Verbindung aufbauen
    $link = new mysqli($mysql_config['mysqlhost'],$mysql_config['mysqluser'],$mysql_config['mysqlpasswd'],$mysql_config['mysqldb']);
    $sql = "INSERT INTO log (type, date, code, file, line, msg) VALUES ('$type', '$date', '$errno', '$errorFile', '$errline', '$errstr');";
    $link->query($sql);
    $link->close();

    // Ausführung des Scripts abbrechen
    //die();
}
function print_errors() {
    if ($GLOBALS['errors'] != "") {
        print '<div id="error_container" onclick=javascript:document.getElementById("error_container").style.visibility="hidden";document.getElementById("error_container").style.opacity="0">';
        print $GLOBALS['errors'];
        print '</div>';
    }
}
// Warnung erzeugen
//echo is_float();
?>
