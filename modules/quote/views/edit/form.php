<?php
	$categories = (new Category)->getMain();
	$authors = Author::getAll('authors');
	$books = Book::getAll('books');
?>

<div id="form-quote-wrp">
    <h2>Форма для редактирования цитаты</h2>
    <form action="/quote/add" method="post">
        <!-- categories box -->
        <div class="form-box">
            <!-- category -->
            <div id="form-category-wrp">
                <label>Категория:</label>
                <select name="category">
					<option value="0">Без категории</option>
					<? foreach ($categories as $cat): ?>
						<option value="<?=$cat->id?>" <?if($cat->id==$quote->id_cat)echo'selected';?>><?=$cat->name?></option>
                    <? endforeach; ?>а
                </select>
            </div>
			
			<!-- sub category -->
            <div id="form-subcategory-wrp" style="display:none;">
                <label>Подкатегория:</label>
                <select name="subcat"></select>
            </div>
        </div>
		
		<!-- author box -->
        <div class="form-box">
            <div id="form-author-wrp">
                <label>Автор:</label>
                <select name="author">
					<? foreach ($authors as $author): ?>
						<option value="<?=$author->id?>" <?if($author->id==$quote->id_author)echo'selected';?>><?=$author->sername?></option>
                    <? endforeach; ?>
                </select>
            </div>
        </div>
		
		<!-- book box -->
        <div class="form-box">
            <div id="form-author-wrp">
                <label>Книга:</label>
                <select name="author">
					<? foreach ($books as $book): ?>
						<option value="<?=$book->id?>" <?if($book->id==$quote->id_book)echo'selected';?>><?=$book->title?></option>
                    <? endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-box">
			<!-- text quote -->
			<div id="form-text-wrp">
				<label>Текст:</label>
				<textarea name="text"><?=$quote->text?></textarea>
			</div>
		</div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" id="form-product" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>