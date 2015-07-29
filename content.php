<div class="post-header">
	
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php 
			if ( 'espresso_events' == get_post_type() && is_front_page() ) :
				_e( 'Event', 'baskerville' );
			elseif ( 'espresso_events' == get_post_type() && !is_front_page() ) :
				espresso_event_date();
			elseif ( 'espresso_venues' == get_post_type() ) :
				echo baskerville_ee_venue_city_state();
			else :
			endif ?>
    
    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>
    
</div> <!-- /post-header -->

<?php if ( has_post_thumbnail() ) : ?>

		<div class="featured-media">
		
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
			
				<?php the_post_thumbnail('post-thumbnail'); ?>
				
			</a>
			
					
		</div> <!-- /featured-media -->
			
	<?php endif; ?>
									                                    	    
<div class="post-excerpt">
<?php 
			if ( 'espresso_events' == get_post_type() && !( is_front_page() ) && espresso_display_ticket_selector_in_event_list() ) : ?>
					<div class="post-content section-inner thin event-archive-tickets">
						
						<div class="event-tickets" style="clear: both;">
							<?php espresso_ticket_selector( $post ); ?>
						</div>
						
						<div class="clear"></div>
					
					</div>

<?php 		
			else :
				the_excerpt('100');
			endif; ?>      			            	                                                                                            
	

</div> <!-- /post-excerpt -->

<div class="post-meta">

	<?php 
	echo 'post type: ' . get_post_type();
			if ( 'espresso_events' == get_post_type() && is_front_page() ) :?>
				<a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php espresso_event_date_range(); ?></a>
	<?php
			elseif ( 'espresso_events' == get_post_type() && !is_front_page() ) :
			elseif ( 'espresso_venues' == get_post_type() ) :
			else :?>
				<a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time(get_option('date_format')); ?></a>
	<?php
			endif ?>
	<?php
	
		if( function_exists('zilla_likes') ) zilla_likes(); 
	
		if ( comments_open() ) {
			comments_popup_link( '0', '1', '%', 'post-comments' );
		}
		
		edit_post_link(); 
	
	?>

	<div class="clear"></div>

</div>
            
<div class="clear"></div>