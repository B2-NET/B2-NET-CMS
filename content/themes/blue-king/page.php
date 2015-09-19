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
<?php load_header(); ?>
<article id="single">
    <h4><a href="<?php get_url(); ?>"><?php get_title(); ?></a></h4>
    <p><?php get_content(); ?></p>
</article>
<?php load_footer(); ?>