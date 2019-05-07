<div id="form-category-wrp">
    <h3>Форма для добавления категории</h3>
    <form action="/category/add?id_cat=<?=$this->get->id_cat?>" method="post">
		
		<!-- category -->
        <div class="form-box">
			<label>Категория:</label>
			<input type="text" name="name" required>
        </div>
		
		<!-- category parent -->
		<input type="hidden" name="id_parent" value="<?=$this->get->id_cat?$this->get->id_cat:0?>">

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>