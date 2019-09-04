<div>
    <ul>
    	<li>
            <a href="/author/add">Добавить автора</a>
        </li>
		<li>
            <a href="/author/edit?id_author=<?=$author->id?>">Редактировать атвора</a>
        </li>
        <li>
            <a href="#" id_author="<?=$author->id?>" id="delete-author">Удалить автора</a>
        </li>
        <li>
            <a href="/book/add?id_author=<?=$author->id?>">Добавить книгу</a>
        </li>
    </ul>
</div>