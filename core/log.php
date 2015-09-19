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
## Name:	log.php																			##
## Ort:		/core/																			##
## Inhalt:	Funktionen um Fehler zu loggen													##
##############################################################################################
##############################################################################################
	
	//Ausführlichen Errorlog aktivieren\\
	error_reporting(E_ALL | E_STRICT);
	ini_set("display_errors", 1);
	ini_set("log_errors", 1);
	ini_set("error_log", "admin/" . config('logfile', FALSE));
	
	//Log-warning\\
	function log_warn($log) {
		$timestamp = time();
		$logfile = fopen('admin/' . config('logfile', FALSE), 'a');
		fputs($logfile, "[warn]" . date("d.m.Y - H:i:s",$timestamp) . " " . $log . "[/warn] \r\n");
		fclose($logfile);
	}
	
	//Log-success\\
	function log_succ($log) {
		$timestamp = time();
		$logfile = fopen('admin/' . config('logfile', FALSE), 'a');
		fputs($logfile, "[succ]" . date("d.m.Y - H:i:s") . " " . $log . "[/succ] \r\n");
		fclose($logfile);
	}
	
	//Load-Log\\
	function loadlog() {
		$logfilecontent = file_get_contents('admin/' . config('logfile', FALSE));
		return $logfilecontent;
	}
?>