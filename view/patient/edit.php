<div class="header">
	<div class="card"><h1>Edit patiënt</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
		<?php foreach ($patient as $info):?>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?= $info['name'] ?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?= $info['species'] ?>">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status" ><?= $info['status'] ?></textarea>
		</div>
		<div>
			<label for="name">Birthdate:</label>
			<input type="date" id="text" name="birthdate" value="<?= $info['birthdate'] ?>">
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Save">
			<?php endforeach; ?>
		</div>
	</form>
</div>