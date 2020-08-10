<link rel="stylesheet" href="<?=base_url();?>vendor/datatables/datatables.min.css">
<script src="<?=base_url();?>vendor/datatables/datatables.min.js"></script>
<script>
	$(document).ready(function(){
		loadSequence();

		table = $('#datatables').DataTable({
			"destroy": true,
			"responsive": true,
			"processing": true, 
			"serverSide": true, 
			"order": [], 
			"ajax": {
				"url": `<?=site_url('datatables/datatables_carousel')?>`,
				"type": "POST"
			},
			"columns": [
				{ "data": "sequence" },
				{ 
					"data": null,
					"render": function(res){
						html = `<img src="<?=base_url();?>assets/img/carousel/${res.path}" class="img-responsive img-thumbnail" />`;

						return html;
					}
				},
				{ 
					"data": null,
					"render": function(res){
						let vdel = ``;
						html = `
						<div class="text-center">
							<div class="btn-group">
								<button class="btn btn-danger btn-xs" onclick="deleteData('${res.id}');"><i class="fa fa-trash fa-fw"></i> Delete</button>
								${res.btn}
							</div>
						</div>
						`;
						return html;
					}
				},
			],
			"columnDefs": [
			{ 
				"targets": [2],
				"orderable": false,
			},
			],
		});

		$('#refresh').on('click', () => {
			table.ajax.reload();
			loadSequence();
		});

		$('#form_reset').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				url: `<?=site_url();?>admin/account/reset`,
				method: 'post',
				dataType: 'json',
				data: {
					id: $('#reset_id').val(),
					password: $('#reset_password').val()
				},
				beforeSend: function(){
					$('#reset_submit').attr('disabled', true);
					$.blockUI();
				}
			}).done(function(res){
				if(res.code == 200){
					alert('Reset Akun Berhasil');
					$('#reset_id').val(null);
					$('#reset_username').val(null);
					$('#reset_username_text').val(null);
					$('#modal-reset').modal('hide');
					table.draw();
				}else{
					alert('Reset Akun Gagal');
				}
				$('#reset_submit').attr('disabled', false);
				$.unblockUI();
			});
		});

	});

	function deleteData(id)
	{
		let c = confirm('Hapus Carousel ?');

		if(c == true){
			$.ajax({
				url: `<?=site_url();?>admin/carousel/destroy`,
				method: 'post',
				data: { id: id },
				dataType: 'json',
				beforeSend: function(){
					$.blockUI();
				}
			})
			.done(function(res){
				if(res.code == 200){
					alert('Hapus Carousel Berhasil');
					table.draw();
				}else{
					alert('Hapus Carousel Gagal');
				}
				$.unblockUI();

			});
		}
	}

	function loadSequence()
	{
		$.ajax({
			url: `<?=site_url();?>admin/carousel/list_sequence`,
			method: 'get',
			dataType: 'json',
			beforeSend: () => {
				$.blockUI();
				$('#sequence').html(``);
			},
		}).done((res) => {
			$('#sequence').html(res);
			$.unblockUI();
		});
	}

	function upOrder(id)
	{
		console.log(id);
		$.ajax({
			url: `<?=site_url();?>admin/carousel/up`,
			method: 'get',
			data: { id: id },
			beforeSend: function(){
				$.blockUI();
			}
		})
		.done(function(res){
			table.ajax.reload();
			loadSequence();
			$.unblockUI();

		});
	}

	function downOrder(id)
	{
		console.log(id);
		$.ajax({
			url: `<?=site_url();?>admin/carousel/down`,
			method: 'get',
			data: { id: id },
			beforeSend: function(){
				$.blockUI();
			}
		})
		.done(function(res){
			table.ajax.reload();
			loadSequence();
			$.unblockUI();

		});
	}
</script>