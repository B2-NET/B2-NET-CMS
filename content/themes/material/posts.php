<?php
$num = 0;
$link = mysql_connection();
mysqli_select_db($link,"test");
$result = mysqli_query($link,"SELECT id FROM content WHERE type = 'post'");

while ($row = mysqli_fetch_object($result)) {
    $ID = $row->id;
    ////////////////////////////////////////////////////////////////////////////
    $O1 = '<div class="mbd-layout-col mbd-layout-col-8-8 mbd-layout-post matchheight">'."\n";
    if (has_thumbnail($ID)) {
        $O1 .= '<div class="mbd-layout-post-image-title" style="background-image: url('.get_thumbnail_link($ID).');">'."\n";
        $O1 .= '<h2>Lorem ipsum</h2>'."\n";
        $O1 .= '</div>'."\n";
    } else {
        $O1 .= '<div class="mbd-layout-post-title">'."\n";
        $O1 .= '<h2>Lorem ipsum</h2>'."\n";
        $O1 .= '</div>'."\n";
    }
    $O1 .= '<div class="mbd-layout-post-content">'."\n";
    $O1 .= 'CONTENT'."\n";
    $O1 .= '</div>'."\n";
    $O1 .= '<div class="mbd-layout-post-meta">'."\n";
    $O1 .= '<img src="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/img/meta-image.jpg" class="mbd-layout-post-meta-image"/>'."\n";
    $O1 .= '<p class="mbd-layout-post-meta-autor">The Meta</p>'."\n";
    $O1 .= '<p class="mbd-layout-post-meta-date">2 days ago</p>'."\n";
    $O1 .= '</div>'."\n";
    $O1 .= '</div>'."\n";
    ////////////////////////////////////////////////////////////////////////////
    $O2 = '<div class="mbd-layout-col mbd-layout-col-3-8 mbd-layout-post matchheight">'."\n";
    if (has_thumbnail($ID)) {
        $O2 .= '<div class="mbd-layout-post-image-title" style="background-image: url('.get_thumbnail_link($ID).');">'."\n";
        $O2 .= '<h2>Lorem ipsum</h2>'."\n";
        $O2 .= '</div>'."\n";
    } else {
        $O2 .= '<div class="mbd-layout-post-title">'."\n";
        $O2 .= '<h2>Lorem ipsum</h2>'."\n";
        $O2 .= '</div>'."\n";
    }
    $O2 .= '<div class="mbd-layout-post-content">'."\n";
    $O2 .= 'CONTENT'."\n";
    $O2 .= '</div>'."\n";
    $O2 .= '<div class="mbd-layout-post-meta">'."\n";
    $O2 .= '<img src="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/img/meta-image.jpg" class="mbd-layout-post-meta-image"/>'."\n";
    $O2 .= '<p class="mbd-layout-post-meta-autor">The Meta</p>'."\n";
    $O2 .= '<p class="mbd-layout-post-meta-date">2 days ago</p>'."\n";
    $O2 .= '</div>'."\n";
    $O2 .= '</div>'."\n";
    ////////////////////////////////////////////////////////////////////////////
    $O3 = '<div class="mbd-layout-col mbd-layout-col-5-8 mbd-layout-post matchheight">'."\n";
    if (has_thumbnail($ID)) {
        $O3 .= '<div class="mbd-layout-post-image-title" style="background-image: url('.get_thumbnail_link($ID).');">'."\n";
        $O3 .= '<h2>Lorem ipsum</h2>'."\n";
        $O3 .= '</div>'."\n";
    } else {
        $O3 .= '<div class="mbd-layout-post-title">'."\n";
        $O3 .= '<h2>Lorem ipsum</h2>'."\n";
        $O3 .= '</div>'."\n";
    }
    $O3 .= '<div class="mbd-layout-post-content">'."\n";
    $O3 .= 'CONTENT'."\n";
    $O3 .= '</div>'."\n";
    $O3 .= '<div class="mbd-layout-post-meta">'."\n";
    $O3 .= '<img src="http://localhost/b2-net-cms-alpha/B2-NET-CMS/content/themes/material/img/meta-image.jpg" class="mbd-layout-post-meta-image"/>'."\n";
    $O3 .= '<p class="mbd-layout-post-meta-autor">The Meta</p>'."\n";
    $O3 .= '<p class="mbd-layout-post-meta-date">2 days ago</p>'."\n";
    $O3 .= '</div>'."\n";
    $O3 .= '</div>'."\n";
    ////////////////////////////////////////////////////////////////////////////
    $count=$count+1;
    if($count == 1):
        echo '<section class="mbd-layout-col-group">'."\n";
        echo $O1;
        echo '</section>'."\n";
        $last_num = 1;
        $closed = true;
    else:
        $r = rand(2, 3);
        if ($count % 6 == 0) {
            echo '<section class="mbd-layout-col-group">'."\n";
            echo $O1;
            echo '</section>'."\n";
            $last_num = 1;
            $closed = true;
            $count = 1;
        } else {
            if($r == 2 && $closed == true) {
                echo '<section class="mbd-layout-col-group">'."\n";
                echo $O2;
                $last_num = 2;
                $closed = false;
            } elseif($last_num == 2 && $closed == false) {
                echo $O3;
                echo '</section>'."\n";
                $last_num = 3;
                $closed = true;
            } elseif ($r == 3 && $closed == true) {
                echo '<section class="mbd-layout-col-group">'."\n";
                echo $O3;
                $last_num = 3;
                $closed = false;
            } elseif($last_num == 3 && $closed == false) {
                echo $O2;
                echo '</section>'."\n";
                $last_num = 2;
                $closed = true;
            }
        }
    endif;
}
?>