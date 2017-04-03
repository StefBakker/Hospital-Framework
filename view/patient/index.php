<div>
	<div class="header">
		<div class="card"><h1>Patiënts</h1></div>
		<br>
		<br>
		<br>
		<!-- Create button that goes to create.php -->
			<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>
			<!-- Table with all the information about your animal -->
				<table>
					<tr>
						<th>Name</th>
						<th>Species</th>
						<th>Status</th>
						<th>Birthdate</th>
						<th></th>
					</tr>
			<!-- Makes array printable -->
				<?php
					foreach($patients as $patient):
				?>
						<tr>
							<td><?=$patient['name']?></td>
							<td><?=$patient['species']?></td>
							<td><?=$patient['status']?></td>
							<td><?=$patient['birthdate']?></td>
							<td class="center"><a href="edit/?id=<?= $patient['id'] ?>">edit</a></td>
							<td class="center"><a href="delete/?id=<?= $patient['id'] ?>">delete</a></td>
						</tr>
			<?php
				endforeach;
			?>
		</table>
	</div>
</div>