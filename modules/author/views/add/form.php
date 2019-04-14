<div id="form-author-wrp">
    <h2 class="center">Форма для добавления автора цитаты</h2>
    <form action="/author/add" method="post">
        <!-- author --> 
        <div class="form-box">
			<label>Имя:</label>
			<input type="text" name="first_name">
			<label>Фамилия:</label>
			<input type="text" name="last_name">
			<label>Отчество:</label>
			<input type="text" name="patronymic">
		</div>
		<!-- date -->
		<div class="form-box">
			<label>ФИО:</label>
			<input type="text" name="surname" requred>
			<label>Дата рождения:</label>
			<input type="text" class="datepicker" name="date_birth">
		</div>
        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Сохранить" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>