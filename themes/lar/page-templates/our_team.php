<!--About Us-->

				<div class="anystretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;"><img style="position: absolute; margin: 0px; padding: 0px; border: medium none; z-index: -999999; width: 1920px; height: 1278.5px; left: 0px; top: -394.251px;" src="http://www.mykarrots.ca/lar/wp-content/themes/lar/images/boxes/whoweare_photo.min.jpg"></div></div>

<div id="our_team" class="clear aboutus  block stretchMe" data-stretch="<?php bloginfo('template_directory'); ?>/images/boxes/bg_aboutus.min.png">
 

  
	<div class="our_team clear  block"> 

		<div class="block content-960 center-relative">

				<h1 class="section-title">OUR TEAM</h2>	
		<div class="divider" style="width: 560px;"></div> 

			<p>
				We believe that the core of every successful business is its people. We have created an culture where we emphasize creativity, partnerships and encourage the “think out of the box” approach.  Our combined expertise overcomes practical constraints, solves logistical challenges and employs every means available to ensure a successful project. Every project is assigned a symbiotic team to achieve your project’s multifaceted potential.
			</p>



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
 	echo '<div class="card card_margin_right_botton" style="margin-right:0px;">';	


	
}
 
else {
	echo '<div class="card card_margin_right_botton">';	 
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
    <span class="team_phone" ><? echo $team_phone;  ?></span>
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