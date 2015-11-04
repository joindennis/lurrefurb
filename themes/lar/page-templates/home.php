        <!--Home-->
        <div id="dry-home" class="home section relative">   			        
		<div class="block content-960 center-relative text">
            
		<!-- Home text slider -->
			
		<img id="slider_text" src="<?php bloginfo('template_directory'); ?>/images/slider/texts/slide1_text.min.png" /> 
         
			 	
            </div>
			
			<!--Background Slider Navigation-->			
			<a class="next_slide" id="nextslide" style="display: block; opacity: 0.9;"></a> 
			<a class="prev_slide" id="prevslide" style="display: block; opacity: 0.9;"></a> 
				<a class="bottom_slide" id="bottomslide" style="display: block; opacity: 0.9;"></a> 
			<ul id="slide-list">
				
				
			</ul>
			<!-- Background Slider Holder -->
			<ul id="supersized"></ul>
        </div>
		
		<div class="block  center-relative stretchMe"  data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_aboutus.min.png">
			<div id="dry-home" class="wearelar section relative">
				
					<h1 class="section-title montserrat-font">WE ARE LAR</h2>	
		<div class="divider" style="width: 650px;"></div> 
		
		<div class="content-960 center-relative">
			
			
	<?

$page_id = 451;
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
echo $content;  // Output Content

?>
			
			</div>
				
			</div>
				</div>
			
			<div class="wearelar_photo stretchMe"  data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/whoweare_photo.min.jpg">
				
				</div>