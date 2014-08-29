<?php
get_header();
$post=get_post();
?>

        <div class="row" style="height:100% !important">
          <div class="col-md-1">&nbsp;</div>
          <div class="col-md-10" style="height:100% !important">
            <div class="row" style="height:100% !important">
                <div class="col-md-3" style="height:100% !important">
                    <div class="panel-left" >
                    <?php  get_sidebar();?>
                    </div>
                </div>
                
                <div class="col-md-9 " style="height:100% !important">
                <div class="panel-right" >
                    <h2><?php  echo $post->post_title;?></h2>
                    <p>
                    <?php  echo apply_filters('the_content', $post->post_content); ?>
                    </p>
                </div>
                </div>
            </div>
          </div>
          <div class="col-md-1">&nbsp;</div>
        </div>


<?php

get_footer();
?>