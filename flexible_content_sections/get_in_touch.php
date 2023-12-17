<?php
$text = get_sub_field('text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>
<div class="get-in-touch section">
    <img src="/wp-content/uploads/2023/12/cloud_transparent.png" class="absolute cloud cloud-left cloud-top">
    <img src="/wp-content/uploads/2023/12/cloud-3-cropped.png" class="absolute cloud cloud-left cloud-bottom">
    <div class="container">
        <?=$text;?>
        <a class="button" href="<?=$button_link;?>"><?=$button_text;?></a>
    </div>
    <img src="/wp-content/uploads/2023/12/cloud-3-cropped.png" class="absolute cloud cloud-right cloud-top">
    <img src="/wp-content/uploads/2023/12/cloud-2-cropped.png" class="absolute cloud cloud-right cloud-bottom">
</div>
