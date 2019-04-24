<h2>Информация по цитате</h2>
<table width="900">
	<tr>
		<th width="50">№</th>
		<th width="200">Наименование</th>
		<th>Значение</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Категория</td>
		<td class="left"><?=$quote->category->name?></td>
	</tr
	<!-- author -->
	<? if ($quote->author): ?>
		<tr>
			<td>2</td>
			<td>Автор</td>
			<td class="left"><?=$quote->author?></td>
		</tr>
	<? endif; ?>
	<!-- book -->
	<? if ($quote->book): ?>
		<tr>
			<td>3</td>
			<td>Книга</td>
			<td class="left"><?=$quote->book->tilte?></td>
		</tr>
	<? endif; ?>
	<!-- rating -->
	<tr>
		<td>4</td>
		<td>Рейтинг</td>
		<td class="left"><?=$quote->rating?></td>
	</tr>
</table>