<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo bloginfo('title');?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/foundation-icons.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css" />
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/vendor/modernizr.js"></script>
    
    <?php wp_head();?>
  </head>
  <body>
    

    
    <div class="row area-header fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
        
            <div class="row" >
                    <div class="columns small-12">
                        <div class="row">
                        <div class="columns small-2">
                            <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" /></a>
                        </div>
                        <div class="columns small-5">
                            <dl class="menu-top" class="sub-nav"> 
                                <dd><a href="#">shop</a></dd> 
                                <dd><a href="#">read our story</a></dd> 
                                <dd><a href="#">why chi?</a></dd> 
                                <dd><a href="#">sales</a></dd> 
                            </dl>
                        </div>
                        <div class="columns small-5">
                            <dl class="menu-top" class="sub-nav"> 
                                <dd><a href="#"><i class="step fi-price-tag size-60"></i> gift card</a></dd> 
                                <dd><a href="<?php echo get_home_url();?>/?page_id=4"><i class="step fi-shopping-cart size-60"></i>  shopping cart</a></dd> 
                                <dd><a href="#"><i class="step fi-comment size-60"></i>  contact us</a></dd> 
                            </dl>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="columns small-1">&nbsp;</div>
    </div>
    