<?php
get_header();
?>
    
    
    <div class="row area-header fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div class="row">
                    <div class="columns small-12">
                    <div class="orbit-container"> 
                    <ul id="#featured1" data-orbit data-options="animation:slide;  pause_on_hover:true; animation_speed:500;navigation_arrows:true;bullets:false;"> 
                        <li>
                            
                            <div class="slide-msg">
                                <h2>Beautifully designed uniforms for the <i>discerning</i> professional.</h2>
                                
                                <p>
                                    In feng shui, as in Chinese medicine,Chi is the term for the universal energy, or the energy
                                </p>
                                
                                <p>
                                    <button>browse our collection</button>
                                </p>
                            </div>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/slide.png" alt="slide 1" style="z-index: 2000;" /> 
                            <div class="orbit-caption" >
                                <div class="row">
                                    <div class="columns small-12">
                                    <div style="float: left;"><div class="txt-desc">Sign up for new designs, special events and sales updates:</div></div>
                                    <input type="email" class="inp-email" value="youremail@url.com" style="color: white;width: 350px;background-color: transparent;border: none;display: normal;float: left;" />
                                    <input type="submit" value="submit" class="bnt-submit" style="width: 60px;background-color: transparent;border: none;display: normal;float: left;margin-top: 2px;"/><div class="step fi-arrow-right size-60" style="margin-top: 8px;"></div>
                                    </div>
                                </div>
                             </div> 
                        </li> 
                        <li>
                            
                            <div class="slide-msg">
                                <h2>Beautifully designed uniforms for the <i>discerning</i> professional 2</h2>
                                
                                <p>
                                    In feng shui, as in Chinese medicine,Chi is the term for the universal energy, or the energy
                                </p>
                                
                                <p>
                                    <button>browse our collection</button>
                                </p>
                            </div>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/slide.png" alt="slide 1" style="z-index: 2000;" /> 
                            <div class="orbit-caption" >
                                <div class="row">
                                    <div class="columns small-12">
                                    <div style="float: left;"><div class="txt-desc">Sign up for new designs, special events and sales updates:</div></div>
                                    <input type="email" class="inp-email" value="youremail@url.com" style="color: white;width: 350px;background-color: transparent;border: none;display: normal;float: left;" />
                                    <input type="submit" value="submit" class="bnt-submit" style="width: 60px;background-color: transparent;border: none;display: normal;float: left;margin-top: 2px;"/><div class="step fi-arrow-right size-60" style="margin-top: 8px;"></div>
                                    </div>
                                </div>
                             </div> 
                        </li> 
                    </ul> <!-- Navigation Arrows --> 
    


                        
                        <div class="orbit-timer"> 
                            <span></span>
                            <div class="orbit-progress"></div> 
                        </div> 
                        
                    </div> 
                    </div>
            </div>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    
    
    <div class="row area-header fullWidth">
        <div class="columns small-12">&nbsp;</div>
    </div>
    
    <div class="row area-header space-top fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-7">
            <h3>Shop</h3>
        </div>
        <div class="columns small-3">
        <label>Sort by:</label> 
            <select>
                <option>Price (Highest to Lowest)</option>
            </select>
        </div>
        <div class="columns small-1">&nbsp;</div>
    </div>
    
    <div class="row area-header fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <ul class="small-block-grid-3 " id="shop"> 
            <?php
                    $wp_query = new WP_Query();
                    
                    $properties = array(
                            'post_type' =>  'product',
                     );

                   $query = $wp_query->query($properties);
                    
                    foreach ($query as $perres){
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($perres->ID) );
                        $price=get_post_meta($perres->ID,'price',true);
                        ?>
                            <li>
                                <button class="add" id="img<?php echo $perres->ID;?>-add" title="<?php echo $perres->ID;?>">Add to cart</button><img src="<?php echo $feat_image;?>" class="img-show" id="img<?php echo $perres->ID;?>" /><div class="name"><?php echo $perres->post_title;?></div><div class="price">$<?php echo $price ?></div>
                            </li> 
                        <?php
                    }
            ?>


            </ul>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    
    
    <div class="row area-color space-top fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div class="row">
            <div class="columns small-12"><h2>Colour Swatches</h2></div>
            </div>
            
            <div class="row">
                <div class="columns small-12">
                    <ul class="small-block-grid-4  large-block-grid-8" id="colors"> 
                        <li><div class="color"  style="background-color: #B9B498;"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #473830"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #FFFFFF"></div><div class="name">Name</div></li>
                        <li><div class="color"  style="background-color: #2B231F"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #474340"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #B9A996"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #563430"></div><div class="name">Name</div></li>
                        <li><div class="color" style="background-color: #797170"></div><div class="name">Name</div></li>
                    </ul>
                </div>
            </div>
            
            
            <div class="row">
            <div class="columns small-12"><h2>Szing Chart</h2></div>
            </div>
            
            <div class="row">
            <div class="columns small-12">
                <table style="width: 100%;">
                    <tr>
                        <th>3XS</th>
                        <th>2XS</th>
                        <th>XS</th>
                        <th>S</th>
                        <th>M</th>
                        <th>L</th>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>33 <samp>1/2</samp></td>
                        <td>35</td>
                        <td>37</td>
                        <td>40</td>
                        <td>44</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>25 <samp>1/2</samp></td>
                        <td>27</td>
                        <td>29</td>
                        <td>32</td>
                        <td>36</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>36</td>
                        <td>37 <samp>1/2</samp></td>
                        <td>39 <samp>1/2</samp></td>
                        <td>42 <samp>1/2</samp></td>
                        <td>46 <samp>1/2</samp></td>
                    </tr>
                </table>
            </div>
            </div>
            
        </div>
        <div class="columns small-1">&nbsp;</div>
    </div>


   <div class="row area-header space-top fullWidth">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div>
                <div class="columns small-7">
                    <h1>About Chi Uniforms</h1>
                    <p>Chi Couture Uniforms Inc. Was founded in September 2006 in Vancouver,BC Canada.</p>
                    <p>A former employee of the mediacal field, Agnes Dalisay, founder and president of Chi Couture Uniforms Inc. experienced first hand
                    the frustration of not being able to find uniforms that fit or flatter the frmale figure. Being small in stature, finding
                    her size was even a bigger challenge. Even after major alterations, she found conventional
                    uniforms unfalttering, uncomfortable and inconvenient. She also felt that they did not represent the status of the female professionals that
                    wore them nor did they enhance the image of the establishments they represented. Determined to solve these challenges Agnes's initial response
                    was to create uniforms for herself that were fashionable, functional, comfortable and professional at the same time.
                    What has evolved is a designer uniform line that delives, chi.</p>
                    
                    <p>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/single.png" width="210" height="75" /> (Founder, Chi Uniforms)
                    </p>
                </div>
                <div class="columns small-5">
                    <p style="margin-top: 10px;">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/video.png"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </p>
                    
                    <p>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/giftcard.png"/> 
                    </p>
                </div>
            </div>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    
   <div class="row space-top fullWidth"  id="area-about">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div>
                <div class="columns small-5">
                    <p style="margin-top: 20px; margin-bottom:10px;">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/video.png"/>
                        <p class="about-lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </p>
                    
                    <h4 style="color:#fff;">We've been featured here:</h4>
                    <p class="bk-feature">
                        <a href="#">Feature One Link</a><br /> 
                        <a href="#">Feature Two Link</a><br /> 
                        <a href="#">Feature Three Link</a><br /> 
                    </p>
                </div>
                
                <div class="columns small-7">
                    <h1>Why chi?</h1>
                    <p>
                        Chi Couture Uniforms inc. Was founded in September 2006 in vancouver, BC Canada.
                    </p>
                    
                    <p>
                        A former employee of the medical field, Agenes Dalisay, founder and president ò Chi Couture Uniforms Inc. experienced first hand the frustration of
                        not being able to find uniforms that fit or flatter the female figure. Beging small in stature, finding hẻ size was even a bigger challenge. Even after major
                        alterations, she found conventional uniforms unflattering, uncomfortable and inconvenient. She alse felt that they did not represent the status of the female
                        professionals that wore them nor did they enhance the image of these challenges Agnes's initial response was tp create uniforms for herself that were fashionable,
                        functional, comfortable and professional at the same time. what has evalved is a designer uniform line that delivers, chi.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div>
    
    

    
    <?php get_sidebar();?>

<?php
    get_footer();
?>
