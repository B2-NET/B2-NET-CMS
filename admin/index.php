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
## Ort:		/admin/																			##
## Inhalt:	laden der einzelnen Dateien im Admininterface									##
##############################################################################################
##############################################################################################
if ($_GET['type']==='admin') {
    if(file_exists('admin/'.$_GET['id'].'.php')) {
        include('admin/'.$_GET['id'].'.php');
    } else {
        include('content/themes/blue-king/404.php');
    }
    
}
?>