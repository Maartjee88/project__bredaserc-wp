<?php

if ( have_rows('blocks') ) :
    while ( have_rows('blocks') ) : the_row();
        echo get_row_layout();
        require_once(get_template_directory() . '/blocks/' . get_row_layout() . '.php');
    endwhile;
endif;