<table>
	<tr>
		<th width="50">№</th>
		<th width="200">Наименование</th>
		<th>Значение</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Название</td>
		<td><?=$category->name?></td>
		<? if ($category->id_parent): ?>
			<tr>
				<td>2</td>
				<td><?=$category->parent->name?></td>
			</tr>	
		<? endif; ?>
	</tr>
</table>
