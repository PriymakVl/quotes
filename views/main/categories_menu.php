<div id="categories">
	<h3>Категории</h3>
	<ul>
		<? foreach ($categories as $category): ?>
			<li>
				<a href="/category?id_cate=<?=$category->id?>"><?=$category->name?></a>
			</li>
		<? endforeach; ?>
	</ul>
</div>