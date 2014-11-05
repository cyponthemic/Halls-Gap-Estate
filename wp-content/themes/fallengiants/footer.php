<div id="footer">
	<div class="row">
	<div class="small-centered large-centered large-4 small-6 footer-logo columns">
	<hr>
	<?php echo  '<img src="';
      echo get_stylesheet_directory_uri();
      echo '/bg/logo.png">';
    ?>
    <hr><hr>
	</div>
	</div>
	<footer class="row" role="contentinfo">
			<div class="medium-4 columns">
			<!-- Content menu -->
				<?php
				
				$defaults = array(
					'theme_location'  => 'footercontent',
					'menu'            => '',
					'container'       => 'false',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>	
			</div>	
			<div class="medium-4 columns">
				<!-- ebusiness menu -->
				<?php
				
				$defaults = array(
					'theme_location'  => 'footerebusiness',
					'menu'            => '',
					'container'       => 'false',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>				
			</div>
			<div class="medium-4 columns footer-form">
			<a class="button small-12">JOIN OUR MAILING LIST</a>
			
			<a class="button small-12">DISCOVER OUR WINES</a>
			
			
			<a class="button small-12">VISIT THE CELLAR DOOR</a>					
			</div>
	</footer>
	<div class="row legal">
			Copyright 2014 - Designed by <a href="#">alexchavet</a> with amazing pictures from <a href="http://www.ivannacaptureyou.com/">Yvanna Capture you</a>
	</div>
</div>
<?php wp_footer(); ?>
<!-- Scripts -->   

   <script>
  jQuery(document).resize(function ($) {
  	if ( $("#bghomepage").height!= "90vh") {
    $("#bghomepage").height($(window).height()*0.9);
    }
	});
	</script>
   
  <script>
  	causeRepaintsOn = $("h1, h2, h3, p");

  	jQuery(window).resize(function() {
  	causeRepaintsOn.css("z-index", 1);
  
  
  
  
  jQuery(document).resize(function ($) {
  	
    $(".content-product-image").height($(".content-product-text").height()*1);
    
	});
	
	
	jQuery(function($) {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	
	
	
</script>

	<!-- <script src=" <?php echo get_stylesheet_directory_uri();?>/js/parallax.js"></script> -->
	<!-- <script>var scene = document.getElementById('scene');	var parallax = new Parallax(scene);	</script>  -->

   <!--  <script src=" <?php echo get_stylesheet_directory_uri();?>/js/vendor/modernizr.js"></script> -->
   <!--  <script src=" <?php echo get_stylesheet_directory_uri();?>/js/vendor/jquery.js"></script> -->
   <!-- <script src=" <?php echo get_stylesheet_directory_uri();?>/js/foundation.min.js"></script> -->
    <!-- <script>    $(document).foundation();     </script> -->
</div>
</body>
 
</html>