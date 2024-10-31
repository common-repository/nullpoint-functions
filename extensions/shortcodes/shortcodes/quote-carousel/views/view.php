<?php if (!defined('FW')) die( 'Forbidden' );

$atts['column'] = trim($atts['column']);
if ( $atts['column'] != '2'  && $atts['column'] != '3' ) $atts['column'] = '1';

$random_qc_number = rand(1000,9999);
?>
<div id="npt-owl-quote" class="owl-carousel carousel owl row npt-owl-quote-<?php echo esc_attr($random_qc_number); ?> npt-owl-pagination-<?php echo esc_attr($atts['pagination']); ?> npt-owl-navigation-<?php echo esc_attr($atts['navigation']); ?>">
	<?php foreach ($atts['quotes'] as $key => $quote) : ?>
	<div class="npt-quote-item">
		<h4 class="npt-quote-content"><?php echo wp_kses_post($quote['quote_content']); ?></h4>
		<?php if ( $quote['quote_image'] != '' ) { ?>
		<div class="npt-quote-image">
        	<img src="<?php echo get_template_directory_uri().'/images/ring-small.png' ; ?>" width="105" height="105" alt="member" />
        	<div class="npt-quote-author-image" style="background-image: url('<?php echo esc_url($quote['quote_image']['url']); ?>');"></div>
        </div>
		<?php } ?>
		<?php  if ( $quote['quote_author'] != '' ) { ?>
		<div class="npt-quote-author">
            <h4><?php echo esc_html($quote['quote_author']); ?></h4>
            <p class="npt-quote-author-position"><?php echo esc_html($quote['quote_author_position']); ?></p>
		</div>
		<?php } ?>
	</div>				
	<?php endforeach; ?>
</div>

<script type="text/javascript"> 
	jQuery(document).ready(function($){
		$(document).ready(function() {
	
		  var owl = $(".npt-owl-quote-<?php echo esc_attr($random_qc_number); ?>");
	
		  owl.owlCarousel({
			  
		  navigation : true, // Show next and prev buttons
		  navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		  pagination : true,
	 
		  slideSpeed : 1500,
		  paginationSpeed : 1500,
		  
		  items : <?php echo esc_attr($atts['column']); ?>, 
		  itemsDesktop : [5000,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktop : [1599,<?php echo esc_attr($atts['column']); ?>], 
		  itemsDesktopSmall : [900,1], 
		  itemsTablet: [600,1], 
		  itemsMobile : [400,1],
		  <?php if ( $atts['delay'] != 'false' && $atts['delay'] != '') { ?> 			  
		  autoPlay : <?php echo esc_attr($atts['delay']); ?>000,
		  <?php } else { ?>
		  autoPlay : false,
		  <?php } ?>		
		  });
		});
	 });
</script>
