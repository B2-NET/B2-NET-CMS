<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,400italic,100,300,700italic,500,900' rel='stylesheet' type='text/css'>    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/css/style.css" rel="stylesheet" type="text/css"/>
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>        
        <script src="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/js/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/js/jquery.matchHeight-min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                $('.submit').keydown(function(event) {
                    if (event.keyCode == 13) {
                        this.form.submit();
                        return false;
                     }
                });
            });
            
            $(function() {
                st=$(window).scrollTop();
                if (st >= 190) {
                            $(".mbd-layout-header-title-container").toggleClass("mbd-layout-header-title-container-toggled");
                            $(".mbd-layout-header").toggleClass("mbd-layout-header-toggled");
                            $(".mbd-layout-main-container").toggleClass("mbd-layout-main-container-toggled");
                          }
                $('nav').waypoint(
                  function() {
                        $(".mbd-layout-header-title-container").toggleClass("mbd-layout-header-title-container-toggled");
                        $(".mbd-layout-header").toggleClass("mbd-layout-header-toggled");
                        $(".mbd-layout-main-container").toggleClass("mbd-layout-main-container-toggled");                     
                  }
                );
            });
            
            jQuery(function($){
                $('.matchheight').matchHeight();
            });
        </script>
    </head>
    <body>
        <header class="mbd-layout-header">
            <div class="mbd-layout-header-title-container">
                <h1>Material-Layout</h1>
            </div>
            <div class="mbd-layout-header-navigation-container">
                <nav>
                    
                    <ul>
                        <a href="#" class="navigation-link"><li class="menu-item menu-item-active">Home</li></a>
                        <a href="#" class="navigation-link"><li class="menu-item">About</li></a>
                        <a href="#" class="navigation-link"><li class="menu-item">Impressum</li></a>
                    </ul>
                </nav>
                <form>
                    <input class="submit" type="search" name="q">
                </form>
            </div>
        </header>
        <main class="mbd-layout-main-container">