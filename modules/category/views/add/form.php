<?php
	$categories = (new Category)->getMain();
?>

<div id="form-category-wrp">
    <h3>Форма для добавления категории</h3>
    <form action="/category/add" method="post">
        <!-- category main -->
        <div class="form-box">
			<label>Главные категории:</label>
			<select name="id_parent">
				<option value="0">Не выбрана</option>
				<? foreach ($categories as $cat): ?>
					<option value="<?=$cat->id?>"><?=$cat->name?></option>
				<? endforeach; ?>
			</select>
        </div>
		
		<!-- category -->
        <div class="form-box">
			<label>Категория:</label>
			<input type="text" name="name" required>
        </div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>