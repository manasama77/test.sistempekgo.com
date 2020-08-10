<section class="content-header">
	<h1><?=$title;?></h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-home"></i> Home</li>
		<li><a href="<?=site_url();?>admin/about_us/index"><i class="fa fa-table"></i> Contact</a></li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body">
					
					<?php
					if($this->session->flashdata('error') === TRUE){
						?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong><?=GA_KONEK;?></strong>
						</div>
					<?php } ?>

					<form action="<?=site_url();?>admin/contact/update" method="post">
						<div class="form-group">
							<label for="alamat_formal">Alamat Formal</label>
							<textarea class="form-control" id="alamat_formal" name="alamat_formal" rows="10" required><?=$alamat_formal;?></textarea>
						</div>
						<div class="form-group">
							<label for="alamat_operasional">Alamat Operasional</label>
							<textarea class="form-control" id="alamat_operasional" name="alamat_operasional" rows="10" required><?=$alamat_operasional;?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>