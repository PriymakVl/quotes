<?php
	$categories = (new Category)->getMain();
	//$authors = Author::getAll();
?>

<div id="form-quote-wrp">
    <h2 class="center">Форма для добавления цитаты</h2>
    <form action="/quote/add" method="post">
        <!-- categories box -->
        <div class="form-box">
            <!-- category -->
            <div id="form-category-wrp">
                <label>Категория:</label>
                <select name="id_cat">
					<option value="0">Без категории</option>
					<? foreach ($categories as $cat): ?>
						<option value="<?=$cat->id?>"><?=$cat->name?></option>
                    <? endforeach; ?>
                </select>
            </div>
			
			<!-- sub category -->
            <div id="form-subcategory-wrp" style="display:none;">
                <label>Подкатегория:</label>
                <select name="subcat"></select>
            </div>
        </div>
		
		 <!-- author -->
        <div class="form-box">
			<label>Автор:</label>
			<select name="id_author">
				<option value="0">Без автора</option>
				<? foreach ($authors as $author): ?>
					<option value="<?=$author->id?>"><?=$author->sername?></option>
				<? endforeach; ?>
			</select>
        </div>
		<!-- book -->
		<div class="form-box">
			<label>Книга:</label>
			<select name="id_book">
				<option value="0">Не указана</option>
				<? foreach ($books as $book): ?>
					<option value="<?=$book->id?>"><?=$book->title?></option>
				<? endforeach; ?>
			</select>
        </div>

        <div class="form-box">
			<!-- text quote -->
			<div>
				<label>Текст цитаты:</label>
				<textarea name="text"></textarea>
			</div>
		</div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" id="form-product" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>