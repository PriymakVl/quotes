<?php
	$authors = (new Author)->getAll('authors');
	$cats = (new Category)->getAll('categories');
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
		<!-- rating book -->
		<div class="form-box">
			<label>Рейтинг книги:</label>
			<input type="text" name="rating">
		</div>
		<!-- category -->
        <div class="form-box">
			<label>Категория:</label>
			<select name="id_cat">
				<option value="">Не выбрана</option>
				<? foreach ($cats as $cat): ?>
					<option value="<?=$cat->id?>"><?=$cat->name?></option>
				<? endforeach; ?>
			</select>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>