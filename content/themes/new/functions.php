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

function new_get_posts() {
    $num = 0;
    $link = mysql_connection();
    mysqli_select_db($link,"test");
    $result = mysqli_query($link,"SELECT id FROM content WHERE type = 'post'");

    while ($row = mysqli_fetch_object($result)) {
        $ID = $row->id;
        $num=$num+1;
        if ($num % 2 != 0):
            if (has_thumbnail($ID)) {
            echo '<div class="parallax-window" data-parallax="scroll" data-bleed="50" data-speed="0.1" data-image-src="'.get_thumbnail_link($ID).'"></div>'."\n";
            }
            echo '<section id="post-'.$ID.'" class="post bright">'."\n".
                    '<article>'."\n".
                        '<h2><a href="'.get_post_link($ID).'">'.get_post_title($ID).'</a></h2>'."\n".
                        '<p>'.get_post_preview($ID).'<p>'."\n".
                    '</article>'."\n".
                '</section>'."\n";
        else:
            if (has_thumbnail($ID)) {
            echo '<div class="parallax-window" data-parallax="scroll" data-bleed="50" data-speed="0.1" data-image-src="'.get_thumbnail_link($row->id).'"></div>'."\n";
            }
            echo '<section id="post-'.$ID.'" class="post dark">'."\n".
                    '<article>'."\n".
                        '<h2><a href="'.get_post_link($ID).'">'.get_post_title($ID).'</a></h2>'."\n".
                        '<p>'.get_post_preview($ID).'<p>'."\n".
                    '</article>'."\n".
                '</section>'."\n";
        endif;
    }
}