<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect, "INSERT INTO users (name, mail, pass) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['pass'] . "')");
	$text = 'Вы успешно зарегистрировались на нашем сайте. Ваш логин:' . $_POST['name'] . ', ваш пароль:' . $_POST['pass'];
	mail($_POST['mail'], "Регистрация на сайте", $text);
	$registr = "Вы успешно зарегистрировались, теперь войдите в свой аккаунт.";
	header("Location: login.php?txt= '" . $registr . "'");
 ?>
