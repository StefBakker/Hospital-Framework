<div class="header">
	<div class="card"><h1>New Cliënt</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
			<label for="name">Name:	</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Last Name:	</label>
			<input type="text" id="last_name" name="last_name">
		</div>
		<div>
			<label for="name">Telephone:	</label>
			<input type="text" id="telephone" name="telephone"></input>
		</div>
		<div>
			<label for="patient">Patient:		</label>	
			<select name="patient">
				<?php
					foreach($clients as $client):
				?>
					<option value="<?=$client['name']?>"><?=$client['name']?></option>
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