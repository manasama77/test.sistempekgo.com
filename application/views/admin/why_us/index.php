<section class="content-header">
	<h1><?=$title;?></h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-home"></i> Home</li>
		<li><a href="<?=site_url();?>admin/about_us/index"><i class="fa fa-table"></i> About Us</a></li>
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

					<form action="<?=site_url();?>admin/why_us/update" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="title">Judul</label>
							<input type="text" class="form-control" id="title" name="title" value="<?=$title_data;?>" required>
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea class="form-control" id="content" name="content" rows="10" required><?=$content_data;?></textarea>
						</div>
						<div class="form-group">
							<label for="content">Photo</label>
							<input type="file" class="form-control" id="foto" name="foto">
							<img id="preview" src="<?=base_url();?>assets/img/why_us/<?=$photo_data;?>" alt="Photo" class="img-thumbnail img-responsive" style="width: 204px; height: auto; margin-top: 10px;" />
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