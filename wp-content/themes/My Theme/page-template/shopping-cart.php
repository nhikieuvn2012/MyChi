<?php
/**
 * Template Name: Shopping cart
 *
 */
get_header();
?>
   <div class="row area-header fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div class="row content-shopcart">


                    <h1>Shopping Cart</h1>
                    
                    <table>
                        <tr>
                            <th style="width: 40%;">item</th>
                            <th>size</th>
                            <th>colour</th>
                            <th>quantity</th>
                             <th>remove item</th>
                             <th>price</th>
                        </tr>
                        
                    <?php
                    $wp_query = new WP_Query();
                    
                    $properties = array(
                            'post_type' =>  'shopping_cart',
                     );

                   $query = $wp_query->query($properties);
                    
                    foreach ($query as $perres){
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
                        $price=get_post_meta($perres->ID,'price',true);
                        $quangtity=get_post_meta($perres->ID,'quangtity',true);
                        ?>
                        <tr>
                            <td>
                                <img style="float: left;margin: 3px;" src="<?php echo $feat_image;?>" width="60" />
                                <strong><?php echo $perres->post_title;?></strong><br />
                                <p>
                                    <?php 
                                        echo $perres->post_content;
                                    ?>
                                </p>
                            
                            </td>
                            <td>35(xs)</td>
                            <td>Cocoa</td>
                            <td><?php echo $quangtity;?></td>
                            <td><i class="step fi-x size-60"></i> Remove</td>
                            <td>$<?php echo $price;?></td>
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </table>


            </div>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    
   <div class="row area-header fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <br />
            &nbsp;
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    

<?php
    get_footer();
?>