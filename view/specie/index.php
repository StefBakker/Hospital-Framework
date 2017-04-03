<div>
	<div class="header">
		<div class="card"><h1>Species</h1></div>
		<br>
		<br>
		<br>
		<!-- Create button that goes to create.php -->
			<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>
			<!-- Table with all the information about your animal -->
				<table>
					<tr>
						<th>Species</th>
					</tr>
			<!-- Makes array printable -->
				<?php
					foreach($species as $specie):
				?>
						<tr>
							<td><?=$specie['name']?></td>
							<td class="center"><a href="edit/?id=<?= $specie['id'] ?>">edit</a></td>
							<td class="center"><a href="delete/?id=<?= $specie['id'] ?>">delete</a></td>
						</tr>
			<?php
				endforeach;
			?>
		</table>
	</div>
</div>