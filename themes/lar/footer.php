<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage LAR
 * @since LAR 1.0
 */
?>


<?php wp_footer(); ?>


 <!--Load JavaScript-->
        <!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.1.min.js"></script> -->	
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>				
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/accordion-tabs.min.js"></script>				
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/portfolio.js"></script>		
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/supersized.3.2.7.js"></script>		
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.sticky.js"></script>			       
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.dryMenu.js"></script>	
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/small-menu.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>        
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.myHint.js"></script>	        
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.vticker-min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/php/scriptsData.php"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>		
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        
         <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
        
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.anystretch.js"></script>
		
		<script>
		    // $('.div01').anystretch("img01.jpg");
		    // $('.div02').anystretch("img02.jpg");
		    // $('.div03').anystretch("img03.jpg");

		    $(".stretchMe").anystretch();
	    </script>

 <script src="<?php bloginfo('template_directory'); ?>/js/main_lightbox.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/imagelightbox.min.js"></script>
<script>

	$( function()
	{
			// ACTIVITY INDICATOR

		var activityIndicatorOn = function()
			{
				$( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
			},
			activityIndicatorOff = function()
			{
				$( '#imagelightbox-loading' ).remove();
			},


			// OVERLAY

			overlayOn = function()
			{
				$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
			},
			overlayOff = function()
			{
				$( '#imagelightbox-overlay' ).remove();
			},


			// CLOSE BUTTON

			closeButtonOn = function( instance )
			{
				$( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
			},
			closeButtonOff = function()
			{
				$( '#imagelightbox-close' ).remove();
			},


			// CAPTION

			captionOn = function()
			{
				var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
				if( description.length > 0 )
					$( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
			},
			captionOff = function()
			{
				$( '#imagelightbox-caption' ).remove();
			},


			// NAVIGATION

			navigationOn = function( instance, selector )
			{
				var images = $( selector );
				if( images.length )
				{
					var nav = $( '<div id="imagelightbox-nav"></div>' );
					for( var i = 0; i < images.length; i++ )
						nav.append( '<button type="button"></button>' );

					nav.appendTo( 'body' );
					nav.on( 'click touchend', function(){ return false; });

					var navItems = nav.find( 'button' );
					navItems.on( 'click touchend', function()
					{
						var $this = $( this );
						if( images.eq( $this.index() ).attr( 'href' ) != $( '#imagelightbox' ).attr( 'src' ) )
							instance.switchImageLightbox( $this.index() );

						navItems.removeClass( 'active' );
						navItems.eq( $this.index() ).addClass( 'active' );

						return false;
					})
					.on( 'touchend', function(){ return false; });
				}
			},
			navigationUpdate = function( selector )
			{
				var items = $( '#imagelightbox-nav button' );
				items.removeClass( 'active' );
				items.eq( $( selector ).filter( '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ).index( selector ) ).addClass( 'active' );
			},
			navigationOff = function()
			{
				$( '#imagelightbox-nav' ).remove();
			},


			// ARROWS

			arrowsOn = function( instance, selector )
			{
				var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

				$arrows.appendTo( 'body' );

				$arrows.on( 'click touchend', function( e )
				{
					e.preventDefault();

					var $this	= $( this ),
						$target	= $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
						index	= $target.index( selector );

					if( $this.hasClass( 'imagelightbox-arrow-left' ) )
					{
						index = index - 1;
						if( !$( selector ).eq( index ).length )
							index = $( selector ).length;
					}
					else
					{
						index = index + 1;
						if( !$( selector ).eq( index ).length )
							index = 0;
					}

					instance.switchImageLightbox( index );
					return false;
				});
			},
			arrowsOff = function()
			{
				$( '.imagelightbox-arrow' ).remove();
			};


		//	WITH ACTIVITY INDICATION

		$( 'a[data-imagelightbox="a"]' ).imageLightbox(
		{
			onLoadStart:	function() { activityIndicatorOn(); },
			onLoadEnd:		function() { activityIndicatorOff(); },
			onEnd:	 		function() { activityIndicatorOff(); }
		});
		
		
	


 $('a.start_gallery').click(function(e){
 	var get_id = $(this).data('imagelightbox');
 	var new_start = 'a[data-imagelightbox="' + get_id + '"]';
 	
 			$( new_start ).imageLightbox(
		{
			onLoadStart:	function() { activityIndicatorOn(); },
			onLoadEnd:		function() { activityIndicatorOff(); },
			onEnd:	 		function() { activityIndicatorOff(); }
		});
 	
 });




		//	WITH OVERLAY & ACTIVITY INDICATION

		$( 'a[data-imagelightbox="b"]' ).imageLightbox(
		{
			onStart: 	 function() { overlayOn(); },
			onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
			onLoadStart: function() { activityIndicatorOn(); },
			onLoadEnd:	 function() { activityIndicatorOff(); }
		});


		//	WITH "CLOSE" BUTTON & ACTIVITY INDICATION

		var instanceC = $( 'a[data-imagelightbox="c"]' ).imageLightbox(
		{
			quitOnDocClick:	false,
			onStart:		function() { closeButtonOn( instanceC ); },
			onEnd:			function() { closeButtonOff(); activityIndicatorOff(); },
			onLoadStart: 	function() { activityIndicatorOn(); },
			onLoadEnd:	 	function() { activityIndicatorOff(); }
		});


		//	WITH CAPTION & ACTIVITY INDICATION

		$( 'a[data-imagelightbox="d"]' ).imageLightbox(
		{
			onLoadStart: function() { captionOff(); activityIndicatorOn(); },
			onLoadEnd:	 function() { captionOn(); activityIndicatorOff(); },
			onEnd:		 function() { captionOff(); activityIndicatorOff(); }
		});


		//	WITH ARROWS & ACTIVITY INDICATION

		var selectorG = 'a[data-imagelightbox="g"]';
		var instanceG = $( selectorG ).imageLightbox(
		{
			onStart:		function(){ arrowsOn( instanceG, selectorG ); },
			onEnd:			function(){ arrowsOff(); activityIndicatorOff(); },
			onLoadStart: 	function(){ activityIndicatorOn(); },
			onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
		});


		//	WITH NAVIGATION & ACTIVITY INDICATION

		var selectorE = 'a[data-imagelightbox="e"]';
		var instanceE = $( selectorE ).imageLightbox(
		{
			onStart:	 function() { navigationOn( instanceE, selectorE ); },
			onEnd:		 function() { navigationOff(); activityIndicatorOff(); },
			onLoadStart: function() { activityIndicatorOn(); },
			onLoadEnd:	 function() { navigationUpdate( selectorE ); activityIndicatorOff(); }
		});


		//	ALL COMBINED

		var selectorF = 'a[data-imagelightbox="f"]';
		var instanceF = $( selectorF ).imageLightbox(
		{
			onStart:		function() { overlayOn(); closeButtonOn( instanceF ); arrowsOn( instanceF, selectorF ); },
			onEnd:			function() { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
			onLoadStart: 	function() { captionOff(); activityIndicatorOn(); },
			onLoadEnd:	 	function() { captionOn(); activityIndicatorOff(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
		});

	});
</script>

 

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

function refreshCaptcha0()
{
	var img = document.images['captchaimg0'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

</script>



</body>
</html>