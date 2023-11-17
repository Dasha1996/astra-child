<?php
$image = get_sub_field('image')["url"];
$test = get_sub_field('image_test')["url"];
$subtitle = get_sub_field('subtitle');
$banner_text = get_sub_field('banner_text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?><div class="banner flexbox">
    <div class="col text-col">
        <div class="text-container">
            <?if(!empty($subtitle)) {
                ?>
                <span><?php echo $subtitle;?></span>
                <?
            }?>
            <?if(!empty($banner_text)) {
                echo $banner_text;
                
                ?>
                <div class="cloud-button">
                    <a href="<?php echo $button_link;?>" class="button"><?php echo $button_text;?>></a>
                    <img class="cloud" src="<?php echo $test;?>" alt =""/>
                </div>
                <?
                if(!empty($button_text) && !empty($button_link)) {
                    ?>
                        <div class="button-container">
                            <a href="<?php echo $button_link;?>" class="button"><?php echo $button_text;?>></a>
                        </div>
                    <?
                }

            }?>
    </div>
    </div>
    <div class="col">
        <?if(!empty($image)) {
            ?>
            <img  src="<?php echo $image;?>" alt =""/>
            <?
        }?>
    </div>
    


</div>