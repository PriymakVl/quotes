<div id="categories">
	<h3>Категории</h3>
	<ul>
		<? foreach ($categories as $category): ?>
			<li>
				<a href="/quote/category?id_cat=<?=$category->id?>"><?=$category->name?></a>
			</li>
		<? endforeach; ?>
		<li>
			<a href="/quote/category?id_cat=0">Без категории</a>
		</li>
	</ul>
</div>