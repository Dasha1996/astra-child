<?php
if(have_rows('services')) {
    while(have_rows('services')) {

        the_row();
        $subtitle = get_sub_field('subtitle');
        echo $subtitle;
    }
}
//if have rows
//while have ros
//the row