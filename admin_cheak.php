<?php 
	if ($_POST['pass'] == 'admin') {
		header("Location: admin.php?id=" . $_POST['id']);
	}else{
		$error = 'НЕПРАВЕЛЬНЫЙ ПАРОЛЬ!';
		header("Location: admin_reg.php?error=" . $error . "&id=" . $_POST['id']);
	}
 ?>