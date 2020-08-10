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
			<?php
			if($this->session->flashdata('error') === TRUE){
				?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong><?=GA_KONEK;?></strong>
				</div>
			<?php } ?>
		</div>

		<div class="col-md-8">
			<div class="box box-success">
				<div class="box-header with-border">
					<h4 class="box-title">Sub Our Services List</h4>
				</div>
				<div class="box-body">
					<table id="datatables" class="table table-bordered table-hover small">
						<thead class="bg-navy-active">
							<tr>
								<th style="width: 30px;" class="text-center">#</th>
								<th style="width: 100px;" class="text-center">Picture</th>
								<th style="width: 100px;" class="text-center">Title</th>
								<th style="width: 200px;" class="text-center">Detail</th>
								<th style="width: 60px;" class="text-center"><i class="fa fa-cogs"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($sub->result() as $key) {
								?>
								<tr>
									<td class="text-center"><?=$key->id;?></td>
									<td><img src="<?=base_url();?>assets/img/our_services/<?=$key->picture;?>" class="img-thumbnail" style="width: 100px;" alt=""></td>
									<td><?=$key->title;?></td>
									<td><?=$key->detail;?></td>
									<td class="text-center">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-xs" onclick="edit('<?=$key->id;?>');">
												<i class="fa fa-pencil"></i>
											</button>
											<button type="button" class="btn btn-danger btn-xs" onclick="deletes('<?=$key->id;?>');">
												<i class="fa fa-trash"></i>
											</button>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-4">

			<form action="<?=site_url();?>admin/our_services/update" method="post">

				<div class="box box-warning">
					<div class="box-header with-border">
						<h4 class="box-title">Our Service Title</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="<?=$title_our_services;?>" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Update</button>
						</div>
					</div>
				</div>
			</form>

			<form action="<?=site_url();?>admin/our_services/store" method="post" enctype="multipart/form-data">

				<div class="box box-danger">
					<div class="box-header with-border">
						<h4 class="box-title">Sub Our Service</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" name="title" required>
						</div>
						<div class="form-group">
							<label for="detail">Detail</label>
							<textarea id="detail" name="detail"></textarea>
						</div>
						<div class="form-group">
							<label for="picture">Picture</label>
							<input type="file" id="picture" name="picture" required>
							<div class="help-block"><i>Recomended Size: 256 x 256 px</i></div>
							<img id="preview" class="img-thumbnail" style="width: 100px;">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</div>

			</form>
			
		</div>

	</div>
</section>

<form action="<?=site_url();?>admin/our_services/update" method="post" enctype="multipart/form-data">
	<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Edit Sub Our Service</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="edit_title">Title</label>
						<input type="text" class="form-control" id="edit_title" name="edit_title" required>
					</div>
					<div class="form-group">
						<label for="edit_detail">Detail</label>
						<textarea id="edit_detail" name="edit_detail"></textarea>
					</div>
					<div class="form-group">
						<label for="edit_picture">Picture</label>
						<input type="file" id="edit_picture" name="edit_picture">
						<div class="help-block"><i>Recomended Size: 256 x 256 px</i></div>
						<img id="edit_preview" class="img-thumbnail" style="width: 100px;">
					</div>
				</div>
				<div class="modal-footer">
					<input type="text" style="display: none;" id="edit_id" name="edit_id">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</form>