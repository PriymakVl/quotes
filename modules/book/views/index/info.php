<div class="col-md-10">
    <table class="table table-bordered table-sm">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="50">№</th>
				<th width="200">Наименование</th>
				<th>Значение</th>
            </tr>
        </thead>
        <!-- tbody -->
        <tbody class="table-striped">
	        <tr>
				<td>1</td>
				<td>Наименование</td>
				<td class="left"><?=$book->title?></td>
			</tr>
			<!-- category -->
			<tr>
				<td>2</td>
				<td>Категория</td>
				<td class="left"><?=$book->category ? $book->category->name : '<span class="red">нет</span>'?></td>
			</tr>
			<!-- rating -->
			<tr>
				<td>3</td>
				<td>Рейтинг</td>
				<td class="left"><?=$book->rating ? $book->rating : '<span class="red">нет</span>'?></td>
			</tr>
			<!-- author -->
			<tr>
				<td>4</td>
				<td>Автор</td>
				<td class="left"><?=$book->author ? $book->author->surname : '<span class="red">нет</span>'?></td>
			</tr>
			<!-- book file -->
			<tr>
				<td>5</td>
				<td>Файл</td>
				<td>
					<? if ($book->filename): ?>
						<a href="/web/books/<?=$book->filename?>">Скачать</a>
					<? else: ?>
						<span class="text-danger" >Нет</span>
					<? endif; ?>
				</td>
			</tr>
			<!-- book description -->
			<tr>
				<td>6</td>
				<td>Описание книги</td>
				<td class="left"><?=$book->description ? $book->description : ''?></td>
			</tr>
        </tbody>
    </table>
</div>