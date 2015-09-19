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

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php get_pagetitle(); ?></title>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
        <link href="<?php siteurl(); ?>content/themes/new/css/reset.css" type="text/css" rel="stylesheet">
        <link href="<?php siteurl(); ?>content/themes/new/css/style.css" type="text/css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php siteurl(); ?>content/themes/new/js/parallax.min.js"></script>
    </head>
    <body>
        <header>
            <a href="#"><img id="logo" src="<?php siteurl(); ?>content/themes/new/img/logo.png" height="70px" alt="AMS - An Alien Content Management System"></a>
            <h1>AMS</h1>
            <nav>
                <ul>
                    <?php menu(array("position" => "primary")); ?>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <main>