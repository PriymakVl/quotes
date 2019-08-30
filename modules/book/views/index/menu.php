<div class="col-md-2">
    <ul>
    	<li>
            <a href="/book/add">Добавить книгу</a>
        </li>
		<li>
            <a href="/book/edit?id_book=<?=$book->id?>">Редак-ть книгу</a>
        </li>
        <li>
            <a href="#" id_book="<?=$book->id?>" id="delete-book">Удалить книгу</a>
        </li>
        <li>
            <a href="#upload-file-book" data-toggle="modal" id_book="<?=$book->id?>" id="delete-book">Загрузить файл</a>
        </li>
    </ul>
</div>
