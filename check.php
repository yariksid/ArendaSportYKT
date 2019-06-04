<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect, "SELECT mail, name, pass, id FROM users WHERE name = '" . $_POST['name'] . "' AND pass = '" . $_POST['pass'] . "'");
	$cont = $query->fetch_assoc();
	if ($query->num_rows == 0) {
		header("Location: login.php?txt=Нет такого пользовотеля");
	}else{
		header("Location: main.php?id=" . $cont['id'] . "");
	}
	
?>