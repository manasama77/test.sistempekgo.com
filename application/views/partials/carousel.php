<div class="swiper-container">
	<div class="swiper-wrapper">
		<?php
		foreach ($carousel->result() as $key) {
		?>
			<div class="swiper-slide">
				<img src="<?=base_url();?>assets/img/carousel/<?=$key->path;?>" style="width:100%;" class="swiper-lazy">
			</div>
		<?php } ?>
		<!-- <div class="swiper-slide">
			<img src="assets/img/slide1.png" style="width:100%;" alt="Slide 2" class="swiper-lazy">
		</div>
		<div class="swiper-slide">
			<img src="assets/img/slide1.png" style="width:100%;" alt="Slide 3" class="swiper-lazy">
		</div> -->
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination swiper-pagination-black"></div>
	<!-- Add Arrows -->
	<div class="swiper-button-next swiper-button-black"></div>
	<div class="swiper-button-prev swiper-button-black"></div>
</div>