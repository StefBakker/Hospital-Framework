<div class="header">
	<div class="card"><h1>New patiënt</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
			<label for="name">Name:	</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="specie">Specie:		</label>	
			<select name="specie">
				<?php
					foreach($species as $specie):
					var_dump($specie);
				?>
					<option value="<?=$specie['name']?>"><?=$specie['name']?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:	</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Birth Date:	</label>
			<input type="date" id="birthdate" name="birthdate"></input>
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Save">
		</div>
	</form>
</div>