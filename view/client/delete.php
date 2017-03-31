<div class="header">
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<span><?=$client['name']?></span>
		</div>
		<div>
			<label for="name">Patiënt:</label>
			<span><?=$client['patient']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>

</div>