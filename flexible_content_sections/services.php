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
            <!--<img src="/wp-content/uploads/2023/11/dots.png" alt="">-->
                <img class="cross" src="/wp-content/uploads/2023/11/thin_cross_black.png" alt="">
                <img src="/wp-content/uploads/2023/11/tabs_black.png" alt=""> 
                <div class="line"></div>
            </div>
            <div class="card-items">
                <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
                <div class="text-container">
                    <h3><?php echo $title;?></h3>
                    <p><?php echo $description;?></p>
                </div>
            </div>
        </div>

        <?php

        }
    ?></div><?php
}
//if have rows
//while have ros
//the row