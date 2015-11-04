<div id="sustainability" class="clear section block stretchMe" data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_sustainability.min.jpg">
	
	
	<div class="block content-960 center-relative">

<h1 class="section-title white">SUSTAINABILITY</h2>	
		<div class="divider" style="width: 940px;"></div> 

<?

$page_id = 462;
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
echo $content;  // Output Content

?>
</div> 
</div> 
<div id="google_map" style="position: relative;">
	<div id="google_map_opacity"></div>
	<div id="google_map_logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo/google_map_logo.png" height="360"/></div>
	
		 <?
		 // get data
		 
		global $wp_query;
		$postid = 12;
		
		echo get_post_meta($postid, 'iframe', true);

		 ?>
	
</div>


		<div class="block content-960 center-relative">
			<div id="sub_title"><h1 class="section-title">SERVICE AREAS</h2></div>	
		<div class="divider" style="width: 740px;"></div> 	
			
			<p>
<span class="city">Toronto</span>
<span class="city">Markham</span>
<span class="city">Stoufville</span>
<span class="city">Uxbridge</span>
<span class="city">Mississauga</span>
<span class="city">Brampton</span>
<span class="city">Oakville</span>
<span class="city">Burlington</span>
<span class="city">Hamilton</span>
<span class="city">Milton</span>
<span class="city">Georgetown</span>
<span class="city">St. CatharineS</span>
<span class="city">Guelph</span>
<span class="city">Kitchener-Waterloo</span>
<span class="city">Cambridge</span>
<span class="city">Barrie</span>
<span class="city">Collingwood</span>
<span class="city">Pickering</span>
<span class="city">Ajax</span>
<span class="city">Oshawa</span>
<span class="city">Whitby</span>
<span class="city">London</span>
</p>
			</div>




</div>



<div class="featured_work_image_slider_holder list_carousel slider_holder">
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/1.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/1.jpg" class="full_width" alt="20 Scrivener ~ Lobby"/></a>	 
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/2.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/2.jpg" class="full_width" alt="50 Old Mill Road ~ Library"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/3.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/3.jpg" class="full_width" alt="1 Ripley Avenue ~ Corridor"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/4.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/4.jpg" class="full_width" alt="10 Delisle Avenue ~ Lobby"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/5.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/5.jpg" class="full_width" alt="20 Scrivener Square ~ Corridor‎"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/6.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/6.jpg" class="full_width" alt="20 Scrivener Square ~ Corridor"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/7.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/7.jpg" class="full_width" alt="1 Ripley Avenue ~ Corridor"/></a>	
<a href="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/8.jpg" data-imagelightbox="d"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_gallery/8.jpg" class="full_width" alt="8 Park Road ~ Elevators"/></a>	

	
	
	

</div>