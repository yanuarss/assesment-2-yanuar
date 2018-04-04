<?php
get_header(); // load header
get_sidebar(); // load index

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
    }
}

get_footer(); // load footer
?>
