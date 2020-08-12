<div class="container text-primary">
	<h2>Вход в Панель Администратора</h2>
	<div class="my-5">
		<div class="login_form" style="max-width: 300px;">
			<form id="admin_login_form">
				<div class="form-group">
					<label for="login">Логин</label>
					<input type="text" class="form-control" name="login">
				</div>
				<div class="form-group">
					<label for="pass">Пароль</label>
					<input type="password" class="form-control" name="pass">
				</div>
				<div class="form-group w-100">
					<button class="btn btn-primary w-100 mx-auto" onclick="admin_log_in()" type="button" name="button">Войти</button>
				</div>
			</form>
			<div class="login_status text-center">

			</div>
		</div>
	</div>
</div>
