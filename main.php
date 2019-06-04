<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
		$query = mysqli_query($connect, "SELECT * FROM products");
		if($_GET['id'] == null){
			$welcome = '';
		}else{
			$query2 = mysqli_query($connect, "SELECT * FROM users WHERE id = " . $_GET['id'] . "");
			$cont2 = $query2->fetch_assoc();
			$welcome = 'Добро пожаловать ,' . $cont2['name'];
		};
	?>
	<div>
		<div class="container-fluid border border-black navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Аренда коньков, велосипедов, сноубордов</a>
			<h3 class="ml-auto">
				<?php echo $welcome ?>
			</h3>
			<?php 
				if($cont2['root'] == 'yes'){
					echo '<a href="admin_reg.php?id=' . $cont2['id'] . '"><button class="btn btn-primary ml-2">Admin panel</button></a>';
				}else if($cont2['root'] == 'no'){
					echo '';
				}
			?>
		</div>
		<div class="col-12 mt-5">
			<div class="d-flex">
			<div class="col-2 bg-light border">
				<div>
					<h3>
						<?php echo $_GET['ord'] ?>
						<?php echo $_GET['ord1'] ?>
					</h3>
					<div class="col-7">
						<h3>
							Товары
						</h3>
						<?php echo '<a href="main.php?id=' . $cont2['id'] . '">Все</a>' ?>
						<hr>
						<?php echo '<a href="main1.php?id=' . $cont2['id'] . '">Коньки</a>' ?>
						<hr>
						<?php echo '<a href="main2.php?id=' . $cont2['id'] . '">Велосипеды</a>' ?>
						<hr>
						<?php echo '<a href="main3.php?id=' . $cont2['id'] . '">Сноуборды</a>' ?>

					</div>
				</div>
			</div>
			<div class="row col-7">
				<?php 
				$num = $query->num_rows;
					$num;
					for ($i=0; $i < $num; $i++) { 
						$cont = $query->fetch_assoc();
				 ?>
					<div class="border m-4 col-3 p-0">
						<form method="POST" action="page.php" class="">
							<?php echo '<img style="height: 195px; width: 185px" src="' . $cont['img'] . '">' ?>
							<?php echo '<p>' . $cont['name'] . '</p>' ?>
							<?php echo '<p>' . 'Цена:' . $cont['price'] . 'руб' . '</p>' ?>

							<input type="hidden" name="id" <?php echo 'value ="' . $cont['id'] . '"' ?>>
							<input type="hidden" name="user_id" <?php echo 'value ="' . $cont2['id'] . '"' ?>>
							<button type="submit" class="btn btn-light border border-primary">Посмотреть</button>
						</form>
					</div>
			 	<?php 
			 		}
			 	 ?>

			</div>
			</div>
		</div>
	</div>





</body>
</html>