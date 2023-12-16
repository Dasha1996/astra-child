<?php
$text = get_sub_field('text');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
?>
<div class="get-in-touch section">
    <div class="container">
        <?=$text;?>
    </div>
    <img src="/wp-content/uploads/2023/12/cloud_transparent.png" class="absolute cloud">
    <a class="button" href="<?=$button_link;?>"><?=$button_text;?></a>
</div>
