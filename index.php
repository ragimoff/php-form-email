<?php 
	
	if ( !empty( $_POST ) ) { // если наш массив POST не пуст
		$message = "Вам пришло новое сообщение с сайта: \n" 
					. "Имя отправителя: " . $_POST['userName'] ."\n"
					. "Email отправителя: " . $_POST['userEmail'] . "\n"
					. "Сообщение: \n " . $_POST['message'];

		$headers = "From: rmx.880@gmail.com";

		$resultMail = mail("rmx.880@gmail.com", "Сообщение с сайта", $message, $headers);

		if ($resultMail) {
			echo "Форма отправлена успешно!";
		} else {
			echo "Письмо не отправлено!";
		}
	}

?>


<form action="index.php" method="post">
	<input id="userName" type="text" name="userName" placeholder="Ваше имя"><br>
	<input type="text" name="userEmail" placeholder="Ваш Email"><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
	<input type="submit" value="Отправить">
</form>

