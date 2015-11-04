        <!--Footer-->
        <div class="clear center-text footer">		

		<div class="footer-content center-text block content-960 center-relative">
		<img class="bottom-100" src="<?php bloginfo('template_directory'); ?>/images/footer_logo.png" alt="" />
		 
		 
		 <?
		 // get data
		 
		global $wp_query;
		$postid = 14;
		
		$address_line_1 = get_post_meta($postid, 'address_line_1', true);
		$address_line_2 = get_post_meta($postid, 'address_line_2', true);
		
		$phone = get_post_meta($postid, 'phone', true);
		$fax = get_post_meta($postid, 'fax', true);
		$email = get_post_meta($postid, 'email', true);
		 
		 
		 
		 ?>
									<p class="footer_address"><? echo $address_line_1; ?></p>
									<p class="footer_address"><? echo $address_line_2; ?></p>
									<p class="footer_address"><? echo $phone; ?></p>
									<p class="footer_address"><? echo $fax; ?></p>
									<p class="footer_address"><a id="footer_email" href="mailto:<? echo $email; ?>"><? echo $email; ?></a></p>
		</div>		
        </div>	
		<div class="footer-copyright center-text">Copyright © 2014 LAR Management Ltd.   |   All Rights Reserved</div>
        </div>