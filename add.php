<?php header("Location: main.php?id=" . $_GET['id']);
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect, "INSERT INTO products (name, img, description, price, it) VALUES ('" . $_POST['name'] . "', 'images/" . $_POST['img'] . "', '" . $_POST['description'] . "', '" . $_POST['price'] . "', '" . $_POST['it'] . "')");
 ?>