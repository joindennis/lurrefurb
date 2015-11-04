<div id="whatwedo" class="clear section block stretchMe"  data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_aboutus.min.png">
	<div class="block content-960 center-relative">

<h1 class="section-title">WHAT WE DO</h2>	
		<div class="divider" style="width: 560px;"></div> 

 
<?

$page_id = 454;
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
echo $content;  // Output Content

?>


</div>
</div>

 		<div style="display: block; height: 490px; background-color: #555;"  class="clear aboutus  block stretchMe" data-stretch="http://www.mykarrots.ca/lar/wp-content/themes/lar/images/boxes/our_team_banner.jpg"></div>
<div id="our_team" class="clear aboutus section block stretchMe" data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_aboutus.min.png">
 

   
	<div class="our_team clear  block"> 

		<div class="block content-960 center-relative">

				<h1 class="section-title">OUR TEAM</h2>	
		<div class="divider" style="width: 560px;"></div> 

			<?

$page_id = 456;
 
$page_data = get_page( $page_id );  //gets all page data
 
$content = apply_filters('the_content', $page_data->post_content);  //filters just the post content
 
echo $content;  // Output Content

?>


		</div>
		<div id="open_container"></div>
		<div class="cards">
			
			
<?
			global $wp_query;
$pages = get_pages( array('child_of' => 46, 'parent' => 46, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );
for ($x = 0; $x < count($pages); $x++) {

//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&pageId=$get_pageId'>" . $pages[$x]->post_title . "</a></p>";

  if(($x+1) % 4 == 0)
 {
 	echo '<div class="card card_margin_right_botton openModal2" style="margin-right:0px;" data-id="'.$pages[$x]->ID.'">';	


	
}
 
else {
	echo '<div class="card card_margin_right_botton openModal2" data-id="'.$pages[$x]->ID.'">';	 
}




		$postid = $pages[$x]->ID;
		
		$team_position = get_post_meta($postid, 'team_position', true);
		$team_phone = get_post_meta($postid, 'team_phone', true);
		
		$team_email = get_post_meta($postid, 'team_email', true);
		$team_linkedin = get_post_meta($postid, 'team_linkedin', true);
		 
$name  = $pages[$x]->post_title;
$pieces = explode(" ", $name);

		 
		 
?>	

		 
<a href="javascript:void(0)" class="openModal2"  data-id="<? echo $pages[$x]->ID; ?>"><? echo $pieces[0].'<br>'; echo $pieces[1]; ?></a>
<div id="modalContent_<? echo $pages[$x]->ID; ?>"style="display: none;">
    <strong class="team_title"><? echo $pages[$x]->post_title; ?></strong>
    <span class="team_position" ><? echo $team_position;  ?></span>
    <span class="team_phone" ><b>P:</b> <? echo $team_phone;  ?></span>
      <span class="team_email" ><a style="color:#FFFFFF;" href="mailto:<? echo $team_email;  ?>"><? echo $team_email;  ?></a></span>
    
</div>


		 
</div>


<?
	
}
		

?>
			
			
			
	
			
		<br class="clear">			
					
	
	
</div>
		
		
	</div>

</div>














 	
		</div> 	
	
		<div class="sliding_div_0">
			<div id='cssmenu'>

</div>
		</div>