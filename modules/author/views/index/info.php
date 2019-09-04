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
	<tbody>
		<tr>
			<td>1</td>
			<td>ФИО</td>
			<td><?=$author->surname?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Книги</td>
			<td>
				<? if ($author->books): ?>
					<? foreach ($author->books as $book): ?>
						<ul>
							<li>
								<? printf('<a href="/book?id_book=%s">%s</a>', $book->id, $book->title); ?>
							</li>
						</ul>
					<? endforeach; ?>
				<? else: ?>
					<span class="text-danger">книг еще нет</span>
				<? endif; ?>					
			</td>
		</tr>
	</tbody>
	
</table>
