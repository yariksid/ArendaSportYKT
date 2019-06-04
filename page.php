<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>	
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
		$query = mysqli_query($connect, "SELECT * FROM products WHERE id='" . $_POST['id'] . "'");
		$query2 = mysqli_query($connect, "SELECT * FROM users WHERE id='" . $_POST['user_id'] . "'");
		$cont = $query->fetch_assoc();
		$cont2 = $query2->fetch_assoc();
	 ?>
	<div>
		<div class="col-12 bg-light header col-12 clearfix border border-black">
			<span class="h3 col-4">Аренда коньков велосипедов сноубордов</span>
			<?php echo '<a href="main.php?id=' . $cont2['id'] . '">' ?>
			<button type="button" class="btn btn-secondary float-right mr-5">Вернуться на главную страницу</button>
			</a>
		</div>
			<div class="col-12 d-flex">
				<div class="col-6">
					<?php echo '<img class="col-10" src="' . $cont['img'] . '">' ?>
				</div>
				<div class="col-5">
					<?php echo '<h1>' . $cont['name'] . '</h1>' ?>
					<?php echo '<h3 class="mr-5">Описание:' . $cont['description'] . '</h3>' ?>
					<?php echo '<p class="mt-5">Цена:' . $cont['price'] . 'Руб</p>' ?>
					  <div class="btn-group" role="group">
    					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     						Заказать
   					 	</button>
   					 	<?php 
   					 		echo $_GET['error']
   					 	 ?>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
    					<form method="POST" action="order.php">
    						<input type="date" name="date">
    						<input type="hidden" name="user_id" <?php echo 'value="' . $cont2['id'] . '"'?>>
    						<input type="hidden" name="product_id" <?php echo 'value="' . $cont['id'] . '"' ?>>
    						<input type="hidden" name="time" value="12:00">
    						<button class="btn btn-primary">12:00</button>
    					</form>
    					<hr>
    					<form method="POST" action="order.php">
    						<input type="date" name="date">
    						<input type="hidden" name="user_id" <?php echo 'value="' . $cont2['id'] . '"'?>>
    						<input type="hidden" name="product_id" <?php echo 'value="' . $cont['id'] . '"' ?>>
    						<input type="hidden" name="time" value="13:00">
    						<button class="btn btn-primary">13:00</button>
    					</form>
    					<hr>
    					<form method="POST" action="order.php">
    						<input type="date" name="date">
    						<input type="hidden" name="user_id" <?php echo 'value="' . $cont2['id'] . '"'?>>
    						<input type="hidden" name="product_id" <?php echo 'value="' . $cont['id'] . '"' ?>>
    						<input type="hidden" name="time" value="14:00">
    						<button class="btn btn-primary">14:00</button>
    					</form>
   				 	</div>
  					</div>
				</div>
			</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>