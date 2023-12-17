<?php
$image_array =  get_sub_field('image');
$image_url = $image_array['url'];
$image_alt = $image_array['alt'];
$text = get_sub_field('text');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');
?>
<div class="about section">
    <div class="container-full">
        <div class="flex">
            <div class="image-container col">
                <img src="<?php echo $image_url;?>" alt = "<?php echo $image_alt;?>">
            </div>
            <div class="text-container col">
                <div class="text-container-padding">
                    <?php echo $text;?>
                </div>
                <div class="button-container">
                    <a href="<?php echo $button_url;?>"><?php echo $button_text;?></a>
                </div>

            </div>
        </div>
    </div>
</div>