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
## Name:	class.CONFIG.php																##
## Ort:		/core/cl/																		##
## Inhalt:	Klasse zum Laden der Config aus der MySQL-Datenbank								##
##############################################################################################
##############################################################################################
	
	function config($id, $echo) {
		$result = mysql_single('value','config','name',$id);
		if ($echo === TRUE) {
			echo $result;
		} elseif ($echo === FALSE) {
			return $result;
		}
	}
?>