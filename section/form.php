<div class="dushbord__form">
	<h2 class="dushbord__form_header">Закажите установку ГБО в <?=$ccityr ?></h2>
	<form action="" method="POST">
		<label for="name" class="dushbord__form_label">Ваше имя</label>

		<input type="text" name="name" id="name" class="dushbord__form_input" required>

		<label for="email" class="dushbord__form_label">Ваш e-mail</label>

		<input type="email" name="e-mail" id="email" class="dushbord__form_input" required>

		<label for="phone" class="dushbord__form_label">Ваш телефон</label>

		<input type="tel" name="phone" id="phone" class="dushbord__form_input" required>
		
			<?php
			if(!empty($_POST['e-mail'])){
	//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
	$name = $_POST['name']; // Вытаскиваем имя в переменную
	$email = $_POST['e-mail']; // Вытаскиваем почту в переменную
	$phone= $_POST['phone'];
	$message = "Поздравляем, $name, отправка сообщений на почту $email и номером $phone работает"; // Формируем сообщение, отправляемое на почту
	$to = 'gorgaz2050@mail.ru'; // Задаем получателя письма
	$from = $email;  // От кого пришло письмо
	$subject = "Письмо с примера простой формы сайта web.cofp.ru"; // Задаем тему письма
	$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
		if (mail($to, $subject, $message, $headers)) { // При помощи функции mail, отправляем сообщение, проверяя отправилось оно или нет
		// echo "<script>document.location.href='http://gorgaz2050.kz';</script>";
			echo "<div class="."dushbord__form_message"."><p>Ваша заявка принята!</p></div>";
	}
	else {
		echo "<p>Ошибка!</p>"; // Письмо не отправилось
	}
}
?>
		
		
	<div class="dushbord__form_submit-cont">
		<input type="submit" name="submit" value="ОТПРАВИТЬ" class="dushbord__form_submit"></div>

</form>
</div>