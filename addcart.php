<?php
    include_once("wp-load.php");
    $pid=intval($_GET['pid']);
    $post=get_post($pid);
    
    $p_name=$post->post_title;
    $p_txt=$post->post_content;
    
    $price=get_post_meta($pid,'price',true);
    $size=get_post_meta($pid,'size',true);
    $imgId=get_post_thumbnail_id($pid);
    
    
    $my_post = array(
      'post_title'    => $p_name,
      'post_content'  => $p_txt,
      'post_status'   => 'publish',
      'post_type'     => 'shopping_cart',
      'post_author'   => 1,
    );
    
    // Insert the post into the database
    $new_post=wp_insert_post( $my_post );
    
    add_post_meta($new_post,'price',$price,true);
    add_post_meta($new_post,'size',$size,true);
    add_post_meta($new_post,'quangtity','1',true);
    set_post_thumbnail($new_post,$imgId);
    
?>