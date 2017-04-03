<div class="header">
	<div class="card"><h1>Edit Cliënt</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
		<?php foreach ($clients as $info):?>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?= $info['name'] ?>">
		</div>
		<div>
			<label for="name">Last Name:</label>
			<input type="text" id="last_name" name="last_name" value="<?= $info['last_name'] ?>">
		</div>
		<div>
			<label for="name">Telephone:</label>
			<input type="text" id="telephone" name="telephone" value="<?= $info['telephone'] ?>">
		</div>
		<div>
			<?php endforeach; ?>
			<label for="patient">Patient:		</label>	
			<select name="patient">
				<?php
					foreach($patients as $patient):
					var_dump($patient);
				?>
					<option value="<?=$patient['name']?>"><?=$patient['name']?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Save">
		</div>
	</form>
</div>