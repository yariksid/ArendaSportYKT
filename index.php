<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>	
		<div class="container">
			<div class="text-center">
			<h3>Регистрация</h3>
			<form method="POST" action="insert.php">
				<div class="form-group">
					<span>Введите логин:</span><input class="mb-2 mt-1" type="" name="name">
				</div>
				<div class="form-group">
					<span>Введите почту:</span><input class="mb-2 mt-1" type="" name="email">
				</div>
				<div class="form-group">
					<span>Придумайте пароль:</span><input class="mb-2 mt-1" type="password" name="pass">
				</div>
					<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
			</form>
			<a href="login.php">Уже есть аккаунт?</a>
			</div>
		</div>
</body>
</html>