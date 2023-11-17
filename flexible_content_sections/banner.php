<?php
$image = get_sub_field('image')["url"];
$subtitle = get_sub_field('subtitle');
$banner_text = get_sub_field('banner_text');
?><div class="banner flexbox">
    <div class="col">
        <div class="text-container">
            <?if(!empty($subtitle)) {
                ?>
                <span><?php echo $subtitle;?></span>
                <?
            }?>
            <?if(!empty($banner_text)) {
                echo $banner_text;
            }?>
    </div>
    </div>
    <div class="col">
        <?if(!empty($image)) {
            ?>
            <img src="<?php echo $image;?>" alt =""/>
            <?
        }?>
    </div>
    


</div>