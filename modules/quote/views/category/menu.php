<div id="menu-outside-wrp">
    <ul>
        <? if ($category): ?>
    		<li>
                <a href="/category/add?id_cat=<?=$category->id?>">Добавить категорию</a>
            </li>
    		<li>
                <a href="/quote/add?id_cat=<?=$category->id?>">Добавить цитату</a>
            </li>
        <? endif; ?>
		<li>
            <a href="/quote/add_file">Добавить файл</a>
        </li>
    </ul>
</div>