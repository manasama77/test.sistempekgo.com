<section class="contact-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fas fa-map-marked-alt mb-2" style="color: rgba(255, 138, 0, 1)"></i>
						<h4 class="text-uppercase m-0">Alamat Formal</h4>
						<hr class="my-4" />
						<div class="small text-black font-weight-bold" style="font-size: 10px;">
							<h5><?=$contact->row()->alamat_formal;?></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-3 mb-md-0">
				<div class="card py-4 h-100">
					<div class="card-body text-center">
						<i class="fas fa-map-marked-alt mb-2" style="color: rgba(255, 138, 0, 1)"></i>
						<h4 class="text-uppercase m-0">ALAMAT KANTOR OPERASIONAL</h4>
						<hr class="my-4" />
						<div class="small text-black font-weight-bold" style="font-size: 10px;">
							<h5><?=$contact->row()->alamat_operasional;?></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social d-flex justify-content-center">
			<!-- <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
			<a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
			<a class="mx-2" href="#!"><i class="fab fa-github"></i></a> -->
		</div>
	</div>
</section>