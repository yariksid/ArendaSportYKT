<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container bg-white">
		<div class="text-center">
			<h3>Войти</h3>
			<form method="POST" action="check.php">
				<div class="form-group">
					<span>Введите логин:</span><input class="mb-2 mt-1" type="" name="name">
				</div>
				<div class="form-group">
					<span>Введите пароль:</span><input class="mb-2 mt-1" type="password" name="pass">
				</div>
				<button type="submit" class="btn btn-primary">Войти</button>
			</form>
			<h4 class="text-success">
				<?php 
					echo $_GET['txt']
				 ?>
			</h4>
			<a href="index.php">Нет аккаунта?</a>
		</div>
	</div>
</body>
</html>