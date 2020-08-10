<option value="first">First</option>
<?php
foreach ($sequence as $key) {
	echo '<option value="'.$key['sequence'].'">'.$key['text'].'</option>';
}
?>
<option value="last">Last</option>