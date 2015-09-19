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
        <section class="container">
            <h2 class="hidden">Lorem Ipsum</h2>
            <article id="slider_content1">
                <h3>Lorem ipsum dolor?</h3>
                <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte. Abgeschieden wohnen Sie in Buchstabhausen an der Küste des Semantik.</p>
                <a class="button" href="some_page.html">Mehr lesen</a>
            </article>
            <article id="slider_content2">
                <h3>Nulla consequat</h3>
                <p>Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien. Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen.</p>
                <a class="button" href="some_page.html">Mehr lesen</a>
            </article>
            <article id="slider_content3">
                <h3>Lorem ipsum</h3>
                <p>Nicht einmal von der allmächtigen Interpunktion werden die Blindtexte beherrscht – ein geradezu unorthographisches Leben.</p>
                <a class="button" href="some_page.html">Mehr lesen</a>
            </article>
            <div id="slides">
            <img src="content/themes/blue-king/img/slide1.jpg" alt="Some alt text">
            <img src="content/themes/blue-king/img/slide2.jpg" alt="Some alt text">
            <img src="content/themes/blue-king/img/slide3.jpg" alt="Some alt text"></div>
        </section>
        
        <section id="spacer">
            <h2 class="hidden">Dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
            <div class="search">
            <form action="#">
                <input type="text" name="sitesearch"/>
                <input type="submit" name="start_search" class="button" value="Search"/></form>
            </div>
        </section>
        <section id="posts">
            <?php get_posts(array('num'=>'5')); ?>
        </section>
<?php load_footer(); ?>