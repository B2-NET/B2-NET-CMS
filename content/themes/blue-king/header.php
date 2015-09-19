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
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php get_pagetitle(); ?></title>

<link rel="stylesheet" href="<?php siteurl(); ?>content/themes/blue-king/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php siteurl(); ?>content/themes/blue-king/css/style.css" type="text/css" media="screen" />
<link href="<?php siteurl(); ?>content/themes/blue-king/css/lightbox.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


<script src="<?php siteurl(); ?>content/themes/blue-king/js/modernizr.js"></script>
<script src="<?php siteurl(); ?>content/themes/blue-king/js/respond.js"></script>
<!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="js\/1.7.2.jquery.min"><\/script>');</script>
<script src="<?php siteurl(); ?>content/themes/blue-king/js/lightbox.js"></script>
<script src="<?php siteurl(); ?>content/themes/blue-king/js/prefixfree.js"></script>
<script src="<?php siteurl(); ?>content/themes/blue-king/js/jquery.slides.min.js"></script>

<script>
$(function() {
  $('#slides').slidesjs({	
	height: 235,
	navigation: false,
	pagination: false,
	effect: {
	  fade: {
		speed: 400
	  }
	},
	callback: {
		start: function(number)
		{			
			$("#slider_content1,#slider_content2,#slider_content3").fadeOut(200);
		},
		complete: function(number)
		{			
			$("#slider_content" + number).delay(500).fadeIn(1000);
		}		
	},
	play: {
		active: false,
		auto: true,
		interval: 10000,
		pauseOnHover: false
	}
  });
});
</script>
<script>
    function fixDiv() {
        var $cache = $('header');
           //"200" <- Position ab wann es ge"fixed" wird
        if ($(window).scrollTop() > 300)
            //top: 0px <-- position wo es gefixed werden soll
          $cache.css({'margin-top': '-107px'});
        else
          $cache.css({'margin-top': '0'});
      }
      $(window).scroll(fixDiv);
      fixDiv();
      
    function fixDiv2() {
        var $cache = $('body');
           //"200" <- Position ab wann es ge"fixed" wird
        if ($(window).scrollTop() > 300)
            //top: 0px <-- position wo es gefixed werden soll
          $cache.css({'margin-top': '-107px'});
        else
          $cache.css({'margin-top': '0'});
      }
      $(window).scroll(fixDiv2);
      fixDiv2();
</script>
</head>

<body>
    <header>
        <div id="logo_title">
            <div id="logo"><a href="<?php siteurl(); ?>"><img src="<?php siteurl(); ?>content/themes/blue-king/img/logo.png" width="87px" height="87px"></a></div>
            <h1><a href="<?php siteurl(); ?>"><?php get_pagetitle(); ?></a></h1>
        <p><?php get_pagesubtitle(); ?></p>
        </div>
        <nav>
            <ul>
                <?php menu(array('position'=>'primary')); ?>
            </ul>
        </nav>
    </header>
    <div id="content">
    