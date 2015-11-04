<div id="contact" class="clear section block">
	
	
	
	
	<div class="block content-960 center-relative">

<h1 class="section-title white">CONTACT US</h2>	
		<div class="divider" style="width: 940px;"></div> 
		

</div>


<div id="contact_form">
	
	
	<form method="post" action="<? ABSPATH  ?>wp-content/themes/lar/contactmail.php"  id="contact_form"> 
				<input type="text" placeholder="NAME" id="fn" name="fn"><input type="text" placeholder="EMAIL" id="email" name="email"><input type="text" placeholder="PHONE" id="phone" name="phone">
				<br><textarea id="message"  name="message">MESSAGE</textarea>
				
				
<img src=<?php bloginfo('template_directory'); ?>/captcha_code_file.php?rand=<?php echo rand(); ?>"  name="captchaimg" id='captchaimg' >
 <small style="color: #6d6e70; display: block; padding-left: 10px;">
Can't read the image? Click <a style="color:#888888;" href='javascript: refreshCaptcha();'>here</a> to refresh.</small>
<input id="letters_code" type="text" name="letters_code" placeholder="Enter the code here"  class="clear">
 

				
				
				<button type="submit">SEND MESSAGE</button>
				
				
			</form>
	<div class="clear"></div>
	
	
	
</div> 
</div> 