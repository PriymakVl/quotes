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
	<!-- rating -->
	<tr>
		<td>2</td>
		<td>Рейтинг</td>
		<td class="left"><?=$quote->rating?></td>
	</tr>
	<!-- text quote -->
	<tr>
		<td>3</td>
		<td>Текст цитаты</td>
		<td class="left"><?=$quote->text?></td>
	</tr>
	<!-- author -->
	<tr>
		<td>4</td>
		<td>Автор</td>
		<td class="left"><?=$quote->author?$quote->author->surname:'<span class="red">Не указан</span>'?></td>
	</tr>
	<!-- book -->
	<tr>
		<td>5</td>
		<td>Книга</td>
		<td class="left"><?=$quote->book?$quote->book->tile:'<span class="red">Не указан</span>'?></td>
	</tr>
	
</table>