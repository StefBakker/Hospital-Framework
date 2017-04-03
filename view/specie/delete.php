<div class="header">
	<h1>Delete specie</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<label for="name">Specie:</label>
		<?php foreach ($species as $specie): ?>

			<span><?=$specie['name']?></span>

		<?php endforeach;?>
		
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>

</div>