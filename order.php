<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query2 = mysqli_query($connect, "SELECT * FROM orders WHERE product_id = '" . $_POST['product_id'] . "'");
$pr_id = $_POST['product_id'];
$user_id = $_POST['user_id'];
$time = $_POST['time'];
$date = $_POST['date'];
$baz = true;
	$num = $query2->num_rows;
	if ($num > 0) {
		for ($i=0; $i < $num; $i++) {
			$content = $query2->fetch_assoc();
			if($time == $content['time'] && $date == $content['date']){
				$error = 'На эту время и дату уже забронирован этот товар';
				header("Location: main.php?id=" . $user_id . "&ord=" . $error);
			}else{
				$baz = false;
			}
		}
	}else{
		$baz = false;
	}
	if($baz == false){
		$query = mysqli_query($connect, "INSERT INTO orders (time, date ,user_id, product_id) VALUES ('" . $time . "', '" . $date . "', '" . $user_id . "', '" . $pr_id . "') ");
		$success = 'Вы успешно забронировали этот товар на дату' . $date . ', ' . $time;
		header("Location: main.php?id=" . $user_id . "&ord=" . $success);
		$baz = true;
	}
 ?>