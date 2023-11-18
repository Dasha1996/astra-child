<?php
if(have_rows('services_cards')) {
    ?><div class="container services-container"><?php
    while(have_rows('services_cards')) {

        the_row();
        $title = get_sub_field('title');
        $icon = get_sub_field('service_icon');
        $description = get_sub_field('service_description');

    }
    ?></div><?php
}
//if have rows
//while have ros
//the row