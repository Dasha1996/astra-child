<?php
if(have_rows('services_cards')) {
    ?><div class="container services-container flexbox"><?php
    while(have_rows('services_cards')) {

        the_row();
        $title = get_sub_field('title');
        $icon = get_sub_field('service_icon');
        $description = get_sub_field('service_description');
        ?>
        <div class="service-card card-tab">
            <div class="tab">
                
            </div>
            <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
            <div class="text-container">
                <h3><?php echo $title;?></h3>
                <p><?php echo $description;?></p>
            </div>
        </div>

        <?php

        }
    ?></div><?php
}
//if have rows
//while have ros
//the row