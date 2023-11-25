<?php
?><div class="container services-section"><?php
$subtitle = get_sub_field('subtitle');
$section_heading_intro = get_sub_field('section_heading_and_text');
?><div class="heading-arrow">  
    <?php echo '<span class="center">' . $subtitle . '</span>';
    echo $section_heading_intro;?>
    <img src="/wp-content/uploads/2023/11/arrow.png" class="arrow" alt="black dotted arrow pointing towards services"/> 
</div>
<img src="/wp-content/uploads/2023/11/cube.png" class="cube" alt="rotating cube with purple and pink sides"/>
<?php
if(have_rows('services_cards')) {
    ?><div class="services-container flexbox"><?php
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
?>
<img class="cells" src="/wp-content/uploads/2023/11/cells.png" alt=""/>
</div><?
//if have rows
//while have ros
//the row