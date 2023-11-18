<?php
if(have_rows('services_cards')) {
    while(have_rows('services_cards')) {

        the_row();
        $title = get_sub_field('title');
        echo $title;
    }
}
//if have rows
//while have ros
//the row