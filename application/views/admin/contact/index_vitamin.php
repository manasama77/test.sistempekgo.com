<script src="https://cdn.tiny.cloud/1/y1lbyegpvnufywjd7k7c8p0drp9rfup9gymycg4n6evr6nfs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
	$(document).ready(function(){
		$("#foto").change(function() {
			readURL(this);
		});
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
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