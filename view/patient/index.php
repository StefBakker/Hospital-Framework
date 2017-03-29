<div class="header">
	<h1>Patiënts</h1>
	<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>
	<table>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
<?php
	endforeach;
?>
		</table>
</div>
<br>