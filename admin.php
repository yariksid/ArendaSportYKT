<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container col-12">
			<?php echo '<form method="POST" action="add.php?id="' . $_GET['id'] . '">' ?>
			<div class="">
				<div class="form-group">
					<span>name:</span><input type="" name="name">
				</div>
				<div class="form-group">
					<span>img:</span><input type="" name="img">
				</div>
				<div class="form-group">
					<span>description:</span><input type="" name="description">
				</div>
				<div class="form-group">
					<span>price:</span><input type="" name="price">
				</div>
				<div class="form-group">
					<span>Коньки, Сноуборд или Велосипед:</span><input type="" name="it">
				</div>
				<button type="submit" class="btn btn-primary">Добавить</button>
			</div>
		</form>
	</div>
</body>
</html>