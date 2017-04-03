<div class="header">
	<div class="card"><h1>Edit Specie</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
		<?php foreach ($specie as $info):?>
			<label for="specie">Species:</label>
			<input type="text" id="name" name="name" value="<?= $info['name'] ?>">
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Save">
			<?php endforeach; ?>
		</div>
	</form>
</div>