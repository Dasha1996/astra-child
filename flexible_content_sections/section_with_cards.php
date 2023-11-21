<?php 
//card styles
$card_styles = get_sub_field('card_styles');
$icon_bg = $card_styles['icon_background'];
$card_font = $card_styles['font_colour'];
$card_bg = $card_styles['background_colour'];
$display_border = $card_styles['display_dotted_border'];
$border_colour = $card_styles['border_colour'];
$text_size = $card_styles['font_size'];

//slider styles 
$slider_styles = get_sub_field('slider_settings_new');
if($slider_styles && !empty($slider_styles)) {
	$arrow_bg = $slider_styles['arrow_background'];
	$arrow_active_dots = $slider_styles['arrow_and_active_dots_colour'];
	$arrow_colour = str_replace("#", "", $arrow_active_dots);
	$dots_colour = $slider_styles['dots_colour'];
	$arrow_img_left = $slider_styles['arrow_image_left'];
	$arrow_img_right = $slider_styles['arrow_image_right'];
}

//multi row slider variables 
$counter_new = 0;//to count each slide e.g. slide 1, slide 2
$row_count_new = 0; //total number of cards to count
$number_of_cards = 7; //number of cards to display per slide

//class with randim numbers so button styles don't overlap
$random_number = mt_rand();


if(have_rows('card') && $display_border) {
    ?>
    <style>
        .dotted {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='6' ry='6' stroke='<?php echo $border_colour;?>' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='<?php echo $border_colour;?>' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        }
    </style>
    
    <?php
}

if(have_rows('card') ) {
    /*-----CUSTOM STYLES ------*/
        ?><style type="text/css">
           .rand-<?php echo $random_number;?> .carousel-indicators button {
               background-color: <?php echo $dots_colour;?> !important;
           }
           .rand-<?php echo $random_number;?> .carousel-indicators .active {
               background-color: <?php echo $arrow_active_dots ;?> !important;
           }
   <?php if (!empty($arrow_img_left)) {
            ?>
           .rand-<?php echo $random_number;?> .carousel-control-prev-icon {
               background-image: url('<?php echo $arrow_img_left['url'];?>');
           } <?php
        }
            else {
                ?>
               .rand-<?php echo $random_number;?> .carousel-control-prev-icon {
                   background-image: url("data:image/svg+xml,%3Csvg id='Layer_2' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 28.92 19.16'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23<?php echo $arrow_colour;?>;stroke-width:0px;%7D%3C/style%3E%3C/defs%3E%3Cg id='text'%3E%3Cpath class='cls-1' d='m26.92,7.48H9.94l6.92-3.72c.97-.52,1.34-1.74.81-2.71-.52-.97-1.74-1.34-2.71-.81L1.05,7.72C.41,8.07,0,8.74,0,9.47c0,.73.39,1.4,1.02,1.76l13.68,7.67c.31.17.64.26.98.26.7,0,1.38-.37,1.75-1.02.54-.96.2-2.18-.77-2.72l-7-3.93h17.26c1.1,0,2-.9,2-2s-.9-2-2-2Z'/%3E%3C/g%3E%3C/svg%3E");
                               } 
                <?php
            }
        if(!empty($arrow_img_right)) {
            ?>
           .rand-<?php echo $random_number;?> .carousel-control-next-icon {
               background-image: url('<?php echo $arrow_img_right['url'];?>');
           } <?php
        }
            else {
                ?>
               .rand-<?php echo $random_number;?> .carousel-control-next-icon {
                           background-image: url("data:image/svg+xml,%3Csvg id='Layer_2' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 28.92 19.16'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23<?php echo $arrow_colour;?>;stroke-width:0px;%7D%3C/style%3E%3C/defs%3E%3Cg id='text'%3E%3Cpath class='cls-1' d='m2,7.48h16.98l-6.92-3.72c-.97-.52-1.34-1.74-.81-2.71.52-.97,1.74-1.34,2.71-.81l13.91,7.48c.64.35,1.05,1.01,1.05,1.74,0,.73-.39,1.4-1.02,1.76l-13.68,7.67c-.31.17-.64.26-.98.26-.7,0-1.38-.37-1.75-1.02-.54-.96-.2-2.18.77-2.72l7-3.93H2c-1.1,0-2-.9-2-2s.9-2,2-2Z'/%3E%3C/g%3E%3C/svg%3E") !important;
           }
   <?php
            }
        ?>

       .rand-<?php echo $random_number;?> .carousel-control-next-icon, 
   .rand-<?php echo $random_number;?> .carousel-control-prev-icon {
       background-color: <?php echo $arrow_bg;?>
   }

           </style>

<?php
    $btn_counter = 0;
   ?>
<div class="container content-container">
<div class="row">
   <div class="row mx-auto my-auto justify-content-center" >
<div id="myCarousel<?php echo $random_number;?>" class="carousel carousel-one slide"  data-bs-interval="false" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php
    $row_count = 0; 

       while (have_rows('card')) {
           the_row();

           $row_count++; 
       }
    $counter = 0;
   while (have_rows('card')) {
       the_row();
       $icon = get_sub_field('icon');
       $content = get_sub_field('content');
       $icon_title = get_sub_field('title');
       $extra_margin = "";
       if(empty($icon_title)) {
           $extra_margin="style='margin-top: 20px;'";
       }
           ?><div class="carousel-item <?php if($counter===0) {echo 'active';}?>" >
               <div class="col-md-4 col-sm">
                   <div class="card position-relative <?if(empty($icon)) {echo 'no-icon';};?>" style="background-color:<?php echo $card_bg;?>">
                       <span class="visually-hidden">
                       <?php echo "slide " . ($counter+1) . " out of " . $row_count;?>
                       </span>

                               <?php 
                               if(!empty($icon)) {
                                   ?>
                                   <div class="icon-container" style="background-color:<?php echo $icon_bg;?>" >
                                       <img class="icon" src="<?php echo $icon['url'];?>" class="card-img-top" alt="<?php echo $icon['alt'];?>">
                                   </div>
                                   <?
                               }
                               ?>
                                   <div class="card-body">
                                       <?php 
                                       if(!empty($icon_title)) {
                                           ?><h3 class="thin"><?php echo $icon_title;?></h3><?
                                       }
                                       ?>
                                       <div <?php if(empty($icon_title) & !empty($icon)) {echo $extra_margin;};?> class="card-text"><?php echo preg_replace("/<p[^>]*>(?:\s|&nbsp;)*<\/p>/", '', $content);?></div>
                                   </div>
                                   <div class="dotted"></div>
                       </div>
               </div>
</div><!--carousel-item div-->
           <?
       $counter++;//used for buttons and slide number
   }
?></div>
<!--- Button dots and arrows--->
<div class="nav-controls position-relative rand-<?php echo $random_number;?>">
   
<a class="carousel-control-prev  arrow-left" href="#myCarousel<?php echo $random_number;?>" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next arrow-right" href="#myCarousel<?php echo $random_number;?>" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</a>
<div class="carousel-indicators">
                   <? while(have_rows('card')) {
           the_row();
                       ?>
                   <button type="button" data-bs-target="#myCarousel<?php echo $random_number;?>" data-bs-slide-to="<?php echo $btn_counter;?>" class="<?if ($btn_counter ===0) {echo 'active';};?>" <?php if ($btn_counter ===0) {echo 'aria-current="true"';};?> aria-label="<?php if(!empty($icon_title)) {echo $con_title; }else {echo 'Go to slide ' . ($btn_counter+1);} ;?>"></button>
       <?$btn_counter++;
               }?>
 </div>
   </div>
</div>
   </div></div></div>
<div id="visible" class="d-none d-md-block"></div> <?
} 


