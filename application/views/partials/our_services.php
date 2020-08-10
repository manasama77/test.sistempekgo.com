<section class="service-section bg-light" id="service">
	<div class="container">
		<!-- SERVICE 1 -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
			<div class="col-12 mb-2">
				<h1 class="text-center"><?=$our_service_title;?></h1>
			</div>
		</div>

		<?php
		$no = 0;
		foreach ($our_services_sub->result() as $key) {
			if($no % '2'){
				?>

				<div class="row justify-content-center no-gutters mb-5">
					<div class="col-lg-5 mt-1 mb-1 mr-lg-3 text-center">
						<img class="img-fluid" src="assets/img/our_services/<?=$key->picture;?>" style="max-width: 256px;" alt="" />
					</div>
					<div class="col-lg-6">
						<div class="bg-black text-center h-100 project">
							<div class="d-flex h-100">
								<div class="service-text w-100 my-auto text-center text-lg-left">
									<h4 class="text-white"><?=$key->title;?></h4>
									<p class="mb-0 text-white-50"><?=$key->detail;?></p>
									<hr class="d-none d-lg-block mb-0 ml-0" />
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php
			}else{
				?>

				<div class="row justify-content-center no-gutters mb-5">
					<div class="col-lg-5 mt-1 mb-1 ml-lg-3 text-center">
						<img class="img-fluid" src="assets/img/our_services/<?=$key->picture;?>" style="max-width: 256px;" alt="" />
					</div>
					<div class="col-lg-6 order-lg-first">
						<div class="bg-black text-center h-100 project">
							<div class="d-flex h-100">
								<div class="service-text w-100 my-auto text-center text-lg-right">
									<h4 class="text-white"><?=$key->title;?></h4>
									<p class="mb-0 text-white-50"><?=$key->detail;?></p>
									<hr class="d-none d-lg-block mb-0 mr-0" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
			}
			$no++;
		}
		?>

	</div>
</section>