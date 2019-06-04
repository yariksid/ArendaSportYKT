<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMIN 0_0</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>	
		<div class="container col-12">
			<div class="text-center mt-4">
			<h3 class="">Admin access</h3>
			<form method="POST" action="admin_cheak.php">
				<div class="form-group">	
					<span class="">Введите пароль:</span><input class="mb-2 mt-1" type="" name="pass">
					<input type="hidden" name="id" value=<?php echo '"' . $_GET['id'] . '"' ?>>
				</div>
					<button type="submit" class="btn btn-primary">Войти</button>
				<div>
					<h3>
						<?php 
							echo $_GET['error'];
						?>
					</h3>
				</div>
			</form>
			</div>
		</div>
</body>
</html>