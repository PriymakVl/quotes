<h2>Информация по книге</h2>
<table width="900">
	<tr>
		<th width="50">№</th>
		<th width="200">Наименование</th>
		<th>Значение</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Категория</td>
		<td class="left"><?=$book->category ? $book->category->name : ''?></td>
	</tr
	<!-- rating -->
	<tr>
		<td>2</td>
		<td>Рейтинг</td>
		<td class="left"><?=$book->rating ? $book->rating : ''?></td>
	</tr>
	<!-- book description -->
	<tr>
		<td>3</td>
		<td>Описание книги</td>
		<td class="left"><?=$book->description ? $book->description : ''?></td>
	</tr>
	<!-- author -->
	<? if ($book->author): ?>
		<tr>
			<td>2</td>
			<td>Автор</td>
			<td class="left"><?=$book->author->surname?></td>
		</tr>
	<? endif; ?>
	
</table>