   <div class="row space-top fullWidth"  id="area-footer">
        <div class="columns small-1">&nbsp;</div>
        <div class="columns small-10">
            <div class="row">
                <div class="columns small-6">
                    <form>
                        <div class="row">
                            <div class="columns small-12">
                            <h3>Get in touch with us.</h3>
                            </div>
                        </div>
	                    
	                     <div class="row">
					        <div class="small-3 columns">
                            
					          <label for="right-label" class="right">Name</label>
					        </div>
					        <div class="small-9 columns">
					          <input type="text" id="right-label" placeholder="Name">
					        </div>
					      </div>
					      
					       <div class="row">
						        <div class="small-3 columns">
						          <label for="right-label" class="right">Email</label>
						        </div>
						        <div class="small-9 columns">
						          <input type="text" id="right-label" placeholder="Email">
						        </div>
					      </div>
					      <div class="row">
						        <div class="small-3 columns">
						          <label for="right-label" class="right">Phone</label>
						        </div>
						        <div class="small-9 columns">
						          <input type="text" id="right-label" placeholder="">
						        </div>
					      </div>
					      
					      <div class="row">
						        <div class="small-3 columns">
						          <label for="right-label" class="right">Inguiry</label>
						        </div>
						        <div class="small-9 columns">
						          <textarea>Message Here</textarea>
						        </div>
					      </div>
					      
					       <div class="row">
						        <div class="small-3 columns">
						          &nbsp;</div>
						        <div class="small-5 columns">
						          <a href="#" class="button postfix">Submit</a>
						        </div>
						        <div class="small-4">&nbsp;</div>
							</div>
                    </form>
                    
                    
                </div><!--end columns -6-->
                
                <div class="columns small-6">
                    <h3>Find us here.</h3>
                    <p>
                    <div id="googleMap" style="width:400px;height:350px;"></div>
                    <!--<img src="img/map.png" width="487" height="392" />-->
                    <div class="row copy">
                    	<div class="columns small-6">
		                    <div class="copyright">
		                        <i class="step fi-marker size-48"></i> 361 West 7th Ave. Vancouver, BC
		                    </div>
                    	</div>
                    	<div class="columns small-6">
		                    <div>
		                        <i class="step fi-telephone size-48"></i> 778.320.0067
		                    </div>
                    	</div>
                    
                    </div><!--end row-->
                    </p>
                    
                </div>
            </div>
            
            <div class="row">
                <div class="columns small-6">
        	
                	<div class="info">Copyright @ 2009-2014 Chi Uniforms All Rights Reserved</div>&nbsp;&nbsp;
        		
                    <ul class="breadcrumbs tem"> 
                        <li class="unavailable"><a href="#">Tems & Conditions</a></li> 
                        <li class="unavailable"><a href="#">Privacy Pollcy</a></li> 
                    </ul>
	                   
                </div>
                <div class="columns small-6">
                    <ul class="breadcrumbs"> 
                        <li class="unavailable"><a href="#">Abount Chi</a></li> 
                        <li class="unavailable"><a href="#">Shop</a></li> 
                        <li class="unavailable"><a href="#">Sales</a></li> 
                        <li class="unavailable"><a href="#">Gift Cards</a></li> 
                        <li class="unavailable"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="columns small-1">&nbsp;</div>
    </div><!--end area-footer-->
  
  
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/foundation.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/foundation/foundation.js"></script> 
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/foundation/foundation.orbit.js"></script>
    <script>
        $(document).foundation({
          orbit: {
            animation: 'slide',
            timer_speed: 1000,
            pause_on_hover: true,
            animation_speed: 500,
            navigation_arrows: true,
            bullets: false
          }

        });
        
        
        
        $(document).ready(function(){
            $('.img-show').hover(function(){
                var txtId=this.id;
                $('#'+txtId+"-add").show();
            });
            
            $('.img-show').mouseout(function(){
                var txtId=this.id;
                $('#'+txtId+"-add").hide();
            });
            
            $('.add').hover(function(){
                var txtId=this.id;
                $('#'+txtId).show();
            });
            
            $('.add').mouseout(function(){
                var txtId=this.id;
                $('#'+txtId).hide();
            });
            
            $('.add').click(function(){
                var txtID=this.title;
                $.ajax({
                            url: "<?php echo get_home_url();?>/addcart.php?pid="+txtID,
                            type: "get",
                            dataType: "html",
                            success: function(data){
                                $('#msg-cart').fadeIn(300);
                                $('#linkcart').focus();
                            }
                });             
            });
            
            $('#linkcart').blur(function(){
                $('#msg-cart').fadeOut(200); 
            });
            
            var pointS =0;
            $('.img-show').click(function(){
                $('#bg-detail').show();
                $('#bg-detail-bk').show();
                pointS= $(window).scrollTop();
                $("html, body").animate({ scrollTop: 0 }, 600);
                
                return false;
            });
            
            $('#bnt-close').click(function(){
                $('#bg-detail').hide();
                $('#bg-detail-bk').hide();
                $("html, body").animate({ scrollTop: pointS}, 600);
            });
            
        });
    </script>
    <script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<?php wp_footer();?>
<script>
function initialize()
{
var mapOpt = {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapOpt);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
  </body>
</html>
