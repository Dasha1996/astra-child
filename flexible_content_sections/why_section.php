<?php
$title_intro = get_sub_field('title_and_intro');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?><div class="why-section container">
    <?php echo $title_intro;?>
    <?
    if(have_rows('list_items')) {
        ?><div class="list-items-container"><?php
        while(have_rows('list_items')) {
            the_row();
            $icon = get_sub_field('icon');
            $text = get_sub_field('text');
            ?>
                <div class="list-item">
                    <img src="<?php echo $icon;?>" alt="">
                    <div class="text">
                        <?php echo $text;?>
                    </div>
                </div>
            <?
        }
        ?></div><?php
    }
?>
</div>