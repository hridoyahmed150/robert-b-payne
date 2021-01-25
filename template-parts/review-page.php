<div class="review-content">
	<div class="title-review">
		WE ARE CONSTANTLY SETTING THE STANDARD
	</div>
	<div class="content-review">
		<div class="stars">
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
		</div>
		<p><?php echo get_post_meta( get_the_ID(), 'cmb_review_text', true ); ?></p>
		<p><strong>by <?php echo get_post_meta( get_the_ID(), 'cmb_review_by', true ); ?></strong></p>
	</div>
	<div class="foot-reviews">
		<div class="row align-items-center">
			<div class="col-md-4">
				<a target="_blank" title="Click for the Business Review of Robert B. Payne, Inc., a Heating & Air Conditioning in Fredericksbrg VA" href="https://www.bbb.org/richmond/business-reviews/heating-and-air-conditioning/robert-b-payne-inc-in-fredericksbrg-va-1057#sealclick"><img alt="Click for the BBB Business Review of this Heating & Air Conditioning in Fredericksbrg VA" style="border: 0;" src="https://seal-Richmond.bbb.org/seals/blue-seal-293-61-robertbpayneinc-1057.png" /></a>
			</div>
			<div class="col-md-8 actions-buttons">
				<a href="<?php echo site_url(); ?>/reviews/" class="btn btn-white">READ MORE REVIEWS</a>
				<a href="<?php echo site_url(); ?>/reviews/#leave-review" class="btn btn-white btn-leave-review">LEAVE A REVIEW</a>
			</div>
		</div>
	</div>
</div>
