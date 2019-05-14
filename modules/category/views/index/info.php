<table>
	<tr>
		<th width="50">№</th>
		<th width="200">Наименование</th>
		<th>Значение</th>
	</tr>
	<!-- name category -->
	<tr>
		<td>1</td>
		<td>Название</td>
		<td><?=$category->name?></td>
	</tr>
	<!-- parent category -->
	<tr>
		<td>2</td>
		<td>Родительская категория</td>
		<td>
			<? if ($category->parent): ?>
				<a href="/category/list?id_cat=<?=$category->parent->id?>"><?=$category->parent->name?></a>
			<? else: ?>
				<span class="red">нет</span>
			<? endif; ?>
		</td>
	</tr>
	<!-- count quotes -->
	<tr>
		<td>3</td>
		<td>Количество цитат</td>
		<td>
			<? if ($category->qtyQuotes): ?>
				<a href="/quote/category?id_cat=<?=$category->id?>"><?=$category->qtyQuotes?></a>
			<? else: ?>
				<span class="red">нет</span>
			<? endif; ?>
		</td>
	</tr>
	<!-- count sub -->
	<tr>
		<td>4</td>
		<td>Количество подкатегорий</td>
		<td>
			<? if ($category->qtySub): ?>
				<a href="/quote/category/list?id_cat=<?=$category->id?>"><?=$category->qtySub?></a>
			<? else: ?>
				<span class="red">нет</span>
			<? endif; ?>
		</td>
	</tr>		
</table>
