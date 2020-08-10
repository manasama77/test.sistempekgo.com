<section class="projects-section text-center mt-4" id="about">
	<div class="container">
		<!-- Featured Project Row-->
		<div class="row align-items-center no-gutters">
			<div class="col-xl-6 col-lg-7">
				<img class="img-fluid mb-3 mb-lg-0" src="<?=base_url();?>assets/img/<?=$about_us->row()->photo;?>" alt="Foto Founder" />
			</div>
			<div class="col-xl-6 col-lg-5">
				<div class="featured-text text-center text-lg-left">
					<h4 class="text-dark"><?=$about_us->row()->title;?></h4>
					<p class="text-dark mb-0"><?=$about_us->row()->content;?></p>
				</div>
			</div>
		</div>
	</div>
</section>