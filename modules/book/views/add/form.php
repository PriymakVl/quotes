<?php
	$authors = (new Author)->getAll('authors');
?>

<div id="form-category-wrp">
    <h3>Форма для добавления книги</h3>
    <form action="/book/add" method="post">
		<!-- authors -->
        <div class="form-box">
			<label>Авторы:</label>
			<select name="id_author">
				<option value="0">Не выбран</option>
				<? foreach ($authors as $author): ?>
					<option value="<?=$author->id?>"><?=$author->surname?></option>
				<? endforeach; ?>
			</select>
        </div>
		<!-- title book -->
        <div class="form-box">
			<label>Название:</label>
			<input type="text" name="title" required>
        </div>
		<!-- description book -->
		<div class="form-box">
			<label>Описание книги:</label>
			<textarea name="description"></textarea>
		</div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>