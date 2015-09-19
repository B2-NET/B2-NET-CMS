<?php
##############################################################################################
##############################################################################################
## Diese Datei ist Teil des Projektes B2NET-CMS, welches von Alban Bruder im Rahmen seiner	##
## Komplexen Leistung im Fach Informatik am Gymnasium Burgstädt erstellt wurde.				##
##############################################################################################
## Autor: Alban Bruder																		##
## Tutor: Frau Wetzig																		##
## Betreuender Fachlehrer: Herr Schneider													##
##############################################################################################
## Dateiinformation																			##
## Name:	index.php																		##
## Ort:		/																				##
## Inhalt:	laden der einzelnen Dateien / Aufbauen der Grundstruktur						##
##############################################################################################
##############################################################################################	
	
//Konstanten\\
define('VERSION', '0.1');

//GET variablen auslesen
function register_get($var) {
if (isset($_GET[$var])) {
$GLOBALS[$var] = $_GET[$var];
}
}
register_get('type');
register_get('id');
//Klassen laden\\
require_once ('core/lang.php');
require_once('core/error_handler.php');
require_once('core/mysql.php');
require_once('core/theme.php');

//Theme laden
$theme = mysql_single('value','config','name','theme');
require_once('content/themes/' . $theme . '/index.php');
?>