<div class="header">
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
	<?php foreach ($patient as $deleted): ?>
		<div>
			<label for="name">Name:</label>
			<span><?=$deleted['name']?></span>
		</div>
		<div>
			<label for="name">Species:</label>
			<span><?=$deleted['species']?></span>
		</div>
		<div>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	<?php endforeach; ?>
	</form>

</div>