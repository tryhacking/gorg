<?php 
$path = $_SERVER['DOCUMENT_ROOT']; 
$refer = $_SERVER['HTTP_REFERER'];
if (!empty($_POST['phone'])) {
	$email = 'не указана.';
	$name = clean_data($_POST['name']);
	$phone = clean_data($_POST['phone']);
	$email = clean_data($_POST['email']);
	$from = "mail@gorgaz2050.kz";
	$message = "Посетитель " . $name . " заказал обратный звонок на номер " . $phone . " .Почта " . $email;
	$to = 'bragin_german@mail.ru'; // Задаем получателя письма
	$subject = "Заявка с сайта gorgaz2050.kz"; // Задаем тему письма
	$headers = 'From: mail@gorgaz2050.kz' . "\r\n";
	$headers .= "Content-type: text/html; charset=\"utf-8\"";
	mail('infabls.com@gmail.com', $subject, $message, $headers);
	 mail('bragin_german@mail.ru', $subject, $message, $headers);
}
function clean_data ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

header('Location: ' . $refer);
exit;

 ?>
