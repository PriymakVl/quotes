<?php
	$authors = (new Author)->getList();
	$cats = (new Category)->getAll('categories');
	$states = [Book::STATE_NOT_READ, Book::STATE_SPEED_READ, Book::STATE_READ, Book::STATE_AUDIO, Book::STATE_OUTLINED];
?>

<div class="container">
    <h3>Форма для редактирования книги</h3>
    <form action="/book/edit?id_book=<?=$book->id?>" method="post">
		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбран</option>
				<? foreach ($authors as $author): ?>
					<option value="<?=$author->id?>" <? if ($author->id == $book->id_author) echo 'selected' ?>><?=$author->surname?></option>
				<? endforeach; ?>
			</select>
        </div>
		<!-- title book -->
        <div class="form-group">
			<label>Название:</label>
			<input class="form-control" type="text" name="title" value="<?=$book->title?>" required>
        </div>
		<!-- description book -->
		<div class="form-group">
			<label>Описание книги:</label>
			<textarea class="form-control" rows="3" name="description"><?=$book->description?></textarea>
		</div>
		<!-- state book -->
		<div class="form-group">
			<label>Состояние:</label>
			<select class="form-control" name="state">
				<? foreach ($states as $state): ?>
					<option value="<?=$state?>" <? if ($state == $book->state) echo 'selected' ?>>
						<?=(new Book)->convertState($state)?>
					</option>
				<? endforeach; ?>
			</select>
		</div>
		<!-- rating book -->
		<div class="form-group">
			<label>Рейтинг книги:</label>
			<input class="form-control" type="text" name="rating" value="<?=$book->rating ? $book->rating : 0?>">
		</div>
		<!-- category -->
        <div class="form-group">
			<label>Категория:</label>
			<select name="id_cat" class="form-control">
				<option value="">Не выбрана</option>
				<? foreach ($cats as $cat): ?>
					<option value="<?=$cat->id?>" <? if ($cat->id == $book->id_cat) echo 'selected' ?>><?=$cat->name?></option>
				<? endforeach; ?>
			</select>
        </div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button" class="btn btn-primary" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>