<?php
$image = get_sub_field('image')["url"];
echo $image;
echo "test image";

?><div class="banner">
    <div class="col">
        <img src="<?php echo $image;?>" alt =""/>
    </div>
    <div class="col">
    </div>


</div>