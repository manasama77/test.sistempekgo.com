<section class="content-header">
	<h1><?=$title;?></h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-home"></i> Home</li>
		<li><i class="fa fa-cogs"></i> Frontend Setup</li>
		<li><a href="<?=site_url();?>admin/carousel/index"><i class="fa fa-cogs"></i> Carousel</a></li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-7">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">List Carousel</h3>
					<div class="pull-right">
						<button type="button" class="btn btn-sm btn-warning" id="refresh"><i class="fa fa-refresh"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table id="datatables" class="table table-bordered small" style="width: 100%;">
							<thead>
								<tr>
									<th style="width: 80px;">No</th>
									<th>Picture</th>
									<th class="text-center" style="width: 200px;"><i class="fa fa-cogs"></i></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Add Carousel</h3>
				</div>
				<div class="box-body">
					<?php if($this->session->flashdata('success')){ ?>
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Proses Upload Berhasil</strong>
						</div>
					<?php } ?>
					<?php if($this->session->flashdata('error')){ ?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Proses Upload Gagal</strong><?=$this->session->flashdata('error');?>
						</div>
					<?php } ?>
					<form id="form_add" class="form" method="post" action="<?=site_url();?>admin/carousel/store" enctype="multipart/form-data">
						<div class="form-group">
							<label for="path">Picture</label>
							<input type="file" class="form-control" id="path" name="path" accept=".png, .jpg, .jpeg" required>
							<div class="help-block"><i>Recomended Size: 1600 x 600 px</i></div>
						</div>
						<div class="form-group">
							<label for="path">Sequence</label>
							<select class="form-control" id="sequence" name="sequence" required>
								<option value="first">First</option>
								<option value="last">Last</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>