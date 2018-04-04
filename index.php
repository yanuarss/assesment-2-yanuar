<?php
get_header();
get_sidebar();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title();
    }
}
get_footer();
?>
