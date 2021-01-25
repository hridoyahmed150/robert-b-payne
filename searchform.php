<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
 	<div class="form-group mb-0">
 		<div class="input-group">
		    <label class="sr-only"><span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span></label>
		    <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		    <span class="input-group-btn">
	        	<button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	      	</span>
	    </div>
	</div>
</form>
