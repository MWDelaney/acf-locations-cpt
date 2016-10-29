
<div class="card-deck">
	<?php

	foreach ( $context->posts as $p ) {
		$data = array( 'post' => $p );
		\MWD\CPT\Locations\template_data( $data, 'context' );
		\MWD\CPT\Locations\template( 'location', 'item' );
	}

	?>
</div>
