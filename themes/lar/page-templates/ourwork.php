<div id="ourwork" class="clear section block stretchMe" data-stretch="http://www.mykarrots.ca/lar/wp-content/themes/lar/images/boxes/bg_our_work.min.jpg">
	
	
	<div class="block content-960 center-relative">


 




</div> 
</div> 

	<div id="ourwork_description" class="block  center-relative clear section block stretchMe"  data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_aboutus.min.png">
	 	
			
			<div id="sub_title"><h1 class="section-title">OUR WORK</h1></div>
			<div style="width: 740px;" class="divider"></div>
		<div class="content-960 center-relative">
				<?

$page_id = 460;
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
echo $content;  // Output Content

?>
			
			
		</div>	
			

	
	
</div>


<div class="gallery">

	
	
	<?
		global $wp_query;
	$pages = get_pages( array('child_of' => 44, 'parent' => 44, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );
for ($x = 0; $x < count($pages); $x++) {


$postid = $pages[$x]->ID;
		
		$city = get_post_meta($postid, 'city', true);
		$src = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full', false, ''); 
		
		

//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&pageId=$get_pageId'>" . $pages[$x]->post_title . "</a></p>";
?>
		<div class="preview stretchMe fadeGallery" data-stretch="<? echo $src[0]; ?>">
		<div class="block content-960 center-relative">
		<div class="header"><? echo $pages[$x]->post_title; ?></div>
		<div class="description"><? echo $city; ?></div>
		<div class="link">
			 
	  <ul>
	
		
		<?
					$gallery = get_post_gallery( $pages[$x]->ID, false );
		$ids = explode( ",", $gallery['ids'] );
		$counter_images = 0;
		foreach( $ids as $id ) {
			$counter_images = $counter_images +1;
			$link   = wp_get_attachment_url( $id );
		//	$image  = wp_get_attachment_image( $id, "thumbnail");
			
			if ($counter_images == 1){
				echo '<li><a class="start_gallery" href="'.$link.'" data-imagelightbox="aa_'.$pages[$x]->ID.'">VIEW PHOTOS</a></li>';	
			}
			
			else {
			
			echo '<li style="display: none;"><a href="'.$link.'" data-imagelightbox="aa_'.$pages[$x]->ID.'"><img src="'.$link.'" alt="Image gallery" /></a></li>';
			}
			
		
		} 
		
		
		
		
		
		
		
		?>
		

		<!-- <li style="display: none;"><a href="http://osvaldas.info/examples/image-lightbox-responsive-touch-friendly/full/2.jpg" data-imagelightbox="a"><img src="http://osvaldas.info/examples/image-lightbox-responsive-touch-friendly/thumb/2.jpg" alt="Frozen river Dane" /></a></li>
		<li style="display: none;"><a href="http://osvaldas.info/examples/image-lightbox-responsive-touch-friendly/full/3.jpg" data-imagelightbox="a"><img src="http://osvaldas.info/examples/image-lightbox-responsive-touch-friendly/thumb/3.jpg" alt="Snowy road Klaipeda-Vilnius" /></a></li> -->
	</ul>
       
    
			
		 
		</div> 
			
		</div>	
	</div>
<?

}	
	
	
?>
	

</div>