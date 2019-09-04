<div class="col-md-12">
    <h2 class="text-center">Форма для добавления автора</h2>
    

    <form action="/author/add" method="post">
        <!-- author --> 
        <div class="form-group">
			<label>Имя:</label>
			<input type="text" class="form-control" name="first_name">
			<label>Фамилия:</label>
			<input type="text" class="form-control" name="last_name">
			<label>Отчество:</label>
			<input type="text" class="form-control" name="patronymic">
		</div>
		<!-- date -->
		<div class="form-group">
			<label>ФИО:</label>
			<input type="text" class="form-control" name="surname" requred>
			<label>Дата рождения:</label>
			<input type="text" class="datepicker form-control" name="date_birth">
		</div>
        <!-- buttons -->
        <div class="button-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button" class="btn btn-info" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>