<?php
	$authors = (new Author)->getAll('authors');
	$cats = (new Category)->getAll('categories');
?>

<div class="container">
    <h3>Форма для добавления книги</h3>
    <form action="/book/add" method="post">
		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбран</option>
				<? foreach ($authors as $author): ?>
					<option value="<?=$author->id?>"><?=$author->surname?></option>
				<? endforeach; ?>
			</select>
        </div>
		<!-- title book -->
        <div class="form-group">
			<label>Название:</label>
			<input class="form-control" type="text" name="title" required>
        </div>
		<!-- description book -->
		<div class="form-group">
			<label>Описание книги:</label>
			<textarea class="form-control" rows="3" name="description"></textarea>
		</div>
		<!-- rating book -->
		<div class="form-group">
			<label>Рейтинг книги:</label>
			<input class="form-control" type="text" name="rating">
		</div>
		<!-- category -->
        <div class="form-group">
			<label>Категория:</label>
			<select name="id_cat" class="form-control">
				<option value="">Не выбрана</option>
				<? foreach ($cats as $cat): ?>
					<option value="<?=$cat->id?>"><?=$cat->name?></option>
				<? endforeach; ?>
			</select>
        </div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>