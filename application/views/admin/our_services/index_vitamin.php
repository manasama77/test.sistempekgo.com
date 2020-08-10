<script src="https://cdn.tiny.cloud/1/y1lbyegpvnufywjd7k7c8p0drp9rfup9gymycg4n6evr6nfs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="<?=base_url();?>vendor/datatables/datatables.min.css">
<script src="<?=base_url();?>vendor/datatables/datatables.min.js"></script>
<script>
	$(document).ready(function(){
		$("#picture").change( function() { readURL(this); } );
		$("#edit_picture").change( function() { readURL2(this); } );
		$('#edit').click(function(){
			editModal(this);
		});

		table = $('#datatables').DataTable({
			"destroy": true,
			"responsive": true,
			"processing": false, 
			"serverSide": false, 
			"order": [], 
			"columnDefs": [
			{ 
				"targets": [4],
				"orderable": false,
			},
			],
		});
	});

	function readURL(input) {
		if (input.files && input.files[0]) {

			var reader = new FileReader();

			reader.onload = function(e) {
				console.log(e.target.result)
				$('#preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURL2(input) {
		if (input.files && input.files[0]) {

			var reader = new FileReader();

			reader.onload = function(e) {
				console.log(e.target.result)
				$('#edit_preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

<script>
	function edit(id){
		$.ajax({
			url: '<?=site_url();?>admin/our_services/show',
			method: 'get',
			dataType: 'json',
			data: { id: id },
			beforeSend: (xhr) => { $.blockUI() }
		}).done( (res) => {
			$('#edit_id').val(id);
			$('#edit_title').val(res.title);
			$(tinymce.get('edit_detail').getBody()).html(res.detail);
			$('#edit_preview').attr('src', '<?=base_url();?>assets/img/our_services/' + res.picture);
			$('#modal_edit').modal('show');
			$.unblockUI();
		});
		
	}

	function deletes(id){
		let confirmnya = confirm("Delete Data ?");

		if(confirmnya === true){
			$.ajax({
				url: '<?=site_url();?>admin/our_services/delete',
				method: 'post',
				dataType: 'json',
				data: { id: id },
				beforeSend: (xhr) => { $.blockUI() }
			}).done( (res) => {
				if(res.code == 200){
					location.reload();
				}else{
					alert('tidak terhubung dengan server.')
				}
				$.unblockUI();
			});
		}

	}

	tinymce.init({
		selector: 'textarea',
		height: 300,
		menubar: false,
		plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table paste code help wordcount'
		],
		toolbar: `undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat`,
		// toolbar_mode: 'floating',
		content_css: '//www.tiny.cloud/css/codepen.min.css'
	});
</script>