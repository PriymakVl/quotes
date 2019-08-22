<h2>Информация по книге</h2>
<table width="900">
	<tr>
		<th width="50">№</th>
		<th width="200">Наименование</th>
		<th>Значение</th>
	</tr>
	<!-- name book -->
	<tr>
		<td>1</td>
		<td>Наименование</td>
		<td class="left"><?=$book->title?></td>
	</tr
	<!-- category -->
	<tr>
		<td>2</td>
		<td>Категория</td>
		<td class="left"><?=$book->category ? $book->category->name : '<span class="red">нет</span>'?></td>
	</tr
	<!-- rating -->
	<tr>
		<td>3</td>
		<td>Рейтинг</td>
		<td class="left"><?=$book->rating ? $book->rating : '<span class="red">нет</span>'?></td>
	</tr>
	<!-- book description -->
	<tr>
		<td>4</td>
		<td>Описание книги</td>
		<td class="left"><?=$book->description ? $book->description : ''?></td>
	</tr>
	<!-- author -->
	<tr>
		<td>2</td>
		<td>Автор</td>
		<td class="left"><?=$book->author ? $book->author->surname : '<span class="red">нет</span>'?></td>
	</tr>
	
</table>