<?php
$btn_text = get_sub_field('button_text');
$btn_url = get_sub_field('button_url');
$text = get_sub_field('text');

if(have_rows('image_portfolio')) {
    ?><div class="portfolio-section">
        <img src="/wp-content/uploads/2023/12/squiggle.svg" alt="">
        <?php echo $text;?>
        <div class="container-custom">
        <?php
    while(have_rows('image_portfolio')) {
        the_row();
        $image_arr = get_sub_field('website_image');
        ?>
            <div class="image-wrap portfolio-container" tabindex = "0">
                <img class="portfolio-image" src="<?php echo $image_arr['url'];?>" alt ="<?php echo $image_arr['alt'];?>">
            </div>
        <?php
    }
    ?></div></div><?php
}