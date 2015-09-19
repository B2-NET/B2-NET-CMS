<?php
##############################################################################################
##############################################################################################
## Diese Datei ist Teil des Projektes B2NET-CMS, welches von Alban Bruder im Rahmen seiner  ##
## Komplexen Leistung im Fach Informatik am Gymnasium Burgstädt erstellt wurde.             ##
##############################################################################################
## Autor: Alban Bruder                                                                      ##
## Tutor: Frau Wetzig                                                                       ##
## Betreuender Fachlehrer: Herr Schneider                                                   ##
##############################################################################################
## Dateiinformation                                                                         ##
## Name:	theme.php                                                                   ##
## Ort:		/core/                                                                      ##
## Inhalt:	Funktionen zum Aufbauen der Website.                                        ##
##############################################################################################
##############################################################################################

////////////////////////////////////////////////////////////////////////////////
//Constructor///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
define('THEME', mysql_single('value','config','name','theme'));
////////////////////////////////////////////////////////////////////////////////
function error404() {
    include('content/themes/' . THEME . '/404.php');
}
function get_pagetitle() {
    echo mysql_single('value','config','name','pagetitle');
}
function get_pagesubtitle() {
    echo mysql_single('value','config','name','pagesubtitle');
}
function get_url() {
    echo mysql_single('value','config','name','siteurl') . 
            mysql_single('type','content','id',$_GET['id']) . '/' . 
            mysql_single('id','content','id',$_GET['id']);
}
function get_title() {
    echo mysql_single('title','content','id',$_GET['id']);
}
function get_content() {
    echo mysql_single('content','content','id',$_GET['id']);
}
function siteurl() {
    echo mysql_single('value','config','name','siteurl');
}

//POST FUNKTIONEN
function has_thumbnail($var) {
    if (mysql_single('thumbnail','content','id',$var) != "") {
        return TRUE;
    } else {
        return FALSE;
    }
}
function get_thumbnail_link($var) {
    return 'content/media/thumbnails/' . 
            mysql_single('thumbnail','content','id',$var);
}
function get_post_link($var) {
    return 'post/' . $var;
}
function get_post_title($var) {
    return mysql_single('title','content','id',$var);
}
function get_post_preview($var) {
    return mysql_single('preview','content','id',$var);
}
function get_post_content($var) {
    return mysql_single('content','content','id',$var);
}
//get_posts() - POST-LOOP
function get_posts() {
    $link = mysqli_connect("localhost", "root", "") or
    die("Keine Verbindung möglich: " . mysql_error());
    mysqli_select_db($link,"test");
    $result = mysqli_query($link,"SELECT id FROM content WHERE type = 'post'");

    while ($row = mysqli_fetch_object($result)) {
        $ID = $row->id;
        echo '<article class="post">' . "\n" . 
                '<h4><a href="' . get_post_link($ID) . '">' . 
                get_post_title($ID) . '</a></h4>' . "\n" . 
                '<p>' . get_post_preview($ID) . '</p>' . "\n" .
                '<a class="more" href="' . get_post_link($ID) . 
                '">Mehr lesen</a>' .
                '</article>' . "\n";
    }
}
//MENU FUNKTIONEN
function get_menu_url($var) {
    return 'page/'.mysql_single('url','menus','id',$var);
}
function get_menu_value($var) {
    return mysql_single('value','menus','id',$var);
}
//menu() - MENU-LOOP
function menu($data) {
    $link = mysql_connection();
    $result = mysqli_query($link,"SELECT id FROM menus WHERE theme = '" . 
            THEME . "' AND position = '" . $data['position'] . "'");
    while ($row = mysqli_fetch_object($result)) {
        $ID = $row->id;
        echo '<li><a href="' . get_menu_url($ID) . '">' . get_menu_value($ID) . 
                '</a></li>'."\n";
    }
}

function load_header() {
    include('content/themes/' . THEME . '/header.php');
}

function load_footer() {
    include('content/themes/' . THEME . '/footer.php');
}
function init_content() {
    if (isset($GLOBALS['type']) && isset($GLOBALS['id'])) {
        if ($GLOBALS['type']=='post') {
            include('content/themes/' . THEME . '/post.php');
        } elseif ($GLOBALS['type']=='page') {
            include('content/themes/' . THEME . '/page.php');
        } 
    } else {
        include('content/themes/' . THEME . '/posts.php');
    }
}

//Adminthemefunctions
function load_admin_header() {
    include('admin/admin_header.php');
}
function load_admin_footer() {
    include('admin/admin_footer.php');
}
?>