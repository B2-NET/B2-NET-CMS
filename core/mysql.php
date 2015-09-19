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
## Name:	mysql.php																		##
## Ort:		/core/																			##
## Inhalt:	Funktionen um auf die MYSQL-Datenbank zuzugreifen								##
##############################################################################################
##############################################################################################
function mysql_connection() {
    //MYSQL-Verbindungsarray erstellen
    $mysql_config = (array) parse_ini_file('admin/MySQL_config.ini', true);
    //Verbindung aufbauen
    $link = mysqli_connect($mysql_config['mysqlhost'],
            $mysql_config['mysqluser'],$mysql_config['mysqlpasswd']) or
            die(trigger_error(mysql_error(), E_USER_ERROR));
    //Datenbank auswählen
    $db = mysqli_select_db($link, $mysql_config['mysqldb']);
    return $link;
}
		
//Einzelnen Wert auslesen\\
function mysql_single($value, $table, $name, $is) {
    $link = mysql_connection();
    $query = mysqli_query($link, "SELECT " . $value . " FROM " . $table . " WHERE " . $name . " = '" . $is . "';");
    while ($row = mysqli_fetch_assoc($query)) {
            $result = $row[$value];
    }
    return $result;
    mysqli_close($link);
    // echo mysql_single('value','config','name','theme');
}
		
//MySQL-Array\\
function mysql_array($table, $name, $is) {
    $link = mysql_connection();
    $query = mysqli_query($link, "SELECT * FROM " . $table . " WHERE " . $name . " = '" . $is . "';");
    while ($row = mysqli_fetch_assoc($query)) {
            $result = (array) $row;
    }
    return $result;
    mysql_close($link);
    // $m = (array) mysql_array('config','name','theme');
    // echo $m['value']
}

//MySQL-Array-Insert\\
function mysql_insert($insert, $into) {
    $link = mysql_connection();

    $columns = implode(", ", array_keys($insert));
    $escaped_values = array_map(function($n) {$n = "'" . $n . "'"; return $n;},array_values($insert));
    $values  = implode(", ", $escaped_values);
    $query = mysqli_query($link, "INSERT INTO `$into`($columns) VALUES ($values);");
    mysql_close($link);
    //$array = [

    // 'name' => 'test',
    // 'value' => 'testvalue',
    // 'description' => 'Testbeschreibung'
    // ];

    // $insert = mysql_insert($array, 'config');
}
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

function config($id, $echo) {
    $result = mysql_single('value','config','name',$id);
    if ($echo === TRUE) {
            echo $result;
    } elseif ($echo === FALSE) {
            return $result;
    }
}
?>