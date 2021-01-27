<div id="reviews-home">
    <div>
        <?php  $reveiw_iamge_id = get_post_meta( get_the_ID(), 'cmb_home_bg_reviews_id', 1 );

        $review_image_src = wp_get_attachment_image_url( $reveiw_iamge_id, 'full');

        ?>
        <img class="lozad" data-src="<?php echo $review_image_src; ?>" alt="Robert B Payne Vans﻿" />

    </div>

</div>
