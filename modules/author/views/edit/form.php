<div id="form-author-wrp">
    <h2 class="center">Форма для редактировани автора</h2>
    <form action="/author/edit?id_author=<?=$author->id?>" method="post">
        <!-- author --> 
        <div class="form-box">
			<label>Имя:</label>
			<input type="text" name="first_name" value="<?=$author->first_name?>">
			<label>Фамилия:</label>
			<input type="text" name="last_name" value="<?=$author->last_name?>">
			<label>Отчество:</label>
			<input type="text" name="patronymic" value="<?=$author->patronymic?>">
		</div>
		<!-- date -->
		<div class="form-box">
			<label>ФИО:</label>
			<input type="text" name="surname" requred value="<?=$author->surname?>">
			<label>Дата рождения:</label>
			<input type="text" class="datepicker" name="date_birth" value="<?=$author->date_birth?>">
		</div>
        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>