<?php
$p = get_post($context->post);
 ?>


	<div class="location">
		<figure class="location-photo">
			<?php echo get_the_post_thumbnail( $p->ID, 'large', array( 'class' => 'card-img-top img-fluid' ) ); ?>
		</figure>
		<div class="card-block">
			<h4 class="card-title"><?php echo get_the_title($p->ID); ?></h4>
			<div class="address">
				<address>
					<span class="location-address"><?php the_field('address', $p->ID); ?></span>
					<span class="location-address2"><?php the_field('address2', $p->ID); ?></span>
					<span class="location-city"><?php the_field('city', $p->ID); ?></span>,
					<span class="location-state"><?php the_field('state', $p->ID); ?></span>
					<span class="location-zip"><?php the_field('zip', $p->ID); ?></span>
					<span class="location-country"><?php the_field('country', $p->ID); ?></span>
				</address>
			</div>
			<div class="phones">
		<?php
			// check if the repeater field has rows of data
			if( have_rows('phone_numbers', $p->ID) ):

			 	// loop through the rows of data
			    while ( have_rows('phone_numbers', $p->ID) ) : the_row();
					$sanitized_title = sanitize_title_with_dashes(get_sub_field('label', $p->ID))
		?>

							<address class="phone phone-<?=$sanitized_title?>">
								<span class="label label-<?=$sanitized_title?>"><?php the_sub_field('label') ?>: </span>
								<span class="number number-<?=$sanitized_title?>"><?php the_sub_field('number') ?>: </span>
							</address>
		<?php
			    endwhile;

			endif;
		?>
			</div>
			<div class="description">
				<p class="card-text"><?php the_field('location_description', $p->ID); ?></p>
			</div>
			<div class="directions">
				<a href="<?php the_field('directions_link', $p->ID); ?>" class="btn btn-secondary"><?php _e('Get Directions', 'cpt-locations'); ?></a>
			</div>
		</div>
	</div>
