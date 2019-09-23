<?php
	$authors = (new Author)->getList();
	$books = (new Book)->getList();

?>

<div class="container">
    <h3>Форма для добавления цитаты</h3>
    <form action="/quote/add" method="post">
		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбран</option>
				<? foreach ($authors as $author): ?>
					<option value="<?=$author->id?>" <? if ($this->get->id_author == $author->id) echo 'selected'; ?>><?=$author->surname?></option>
				<? endforeach; ?>
			</select>
        </div>
        <!-- books -->
        <div class="form-group">
			<label>Книги:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбран</option>
				<? foreach ($books as $book): ?>
					<option value="<?=$book->id?>"><?=$book->surname?></option>
				<? endforeach; ?>
			</select>
        </div>
		<!-- text quote -->
		<div class="form-group">
			<label>Текст цитаты:</label>
			<textarea class="form-control" rows="3" name="text"></textarea>
		</div>
		<!-- rating quote -->
		<div class="form-group">
			<label>Рейтинг книги:</label>
			<input class="form-control" type="text" name="rating">
		</div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>


