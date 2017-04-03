<div>
	<div class="header">
		<div class="card"><h1>Cliënts</h1></div>
		<br>
		<br>
		<br>
		<!-- Create button that goes to create.php -->
			<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>
			<!-- Table with all the information about your animal -->
				<table>
					<tr>
						<th>Name</th>
						<th>Last Name</th>
						<th>Patient</th>
						<th>Telephone</th>
						<th></th>
					</tr>
			<!-- Makes array printable -->
				<?php
					foreach($clients as $client):
				?>
						<tr>
							<td><?=$client['name']?></td>
							<td><?=$client['last_name']?></td>
							<td><?=$client['patient']?></td>
							<td><?=$client['telephone']?></td>
							<td class="center"><a href="edit/?id=<?= $client['id'] ?>">edit</a></td>
							<td class="center"><a href="delete/<?= $client['id'] ?>">delete</a></td>
						</tr>
			<?php
				endforeach;
			?>
		</table>
	</div>
</div>