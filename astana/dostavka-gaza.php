<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>ТОО Горгаз 2050 - Официальный сайт</title>
<meta name="description" content="">
<meta name="keywords" content=""> 
<meta property="og:title" content="">
<meta property="og:description" content="">
<?php require $path . '/section/hb.php'; ?>
<style>

	#ctaforma{
		padding: 20px 0px;
		color: #fff;
		background-image: url(/assets/img/bg.jpg);
		background-attachment: fixed;}
		h1 {color: #fff;}
		.fa-ul {padding: 20px 0;}
		#schemaimg {width: 100%;}

	</style>

	<section id="ctaforma" >
		<div class="row">
			<div class="col-md-7">
				<h1 >Доставка газа в баллонах - <?=$ccity ?></h1>
				<ul class="fa-ul">
					<li> <i class="fa-li fa fa-truck"></i>
						Бесплатная доставка до 50 км от города
					</li>
					<li> <i class="fa-li fa fa-check"></i>
						Скидка 7% при заказе от 5 тонн
					</li>
					<li>
						<i class="fa-li fa fa-percent"></i>
						Наличный и безналичный расчёт
					</li>
					<li>
						<i class="fa-li fa fa-wrench"></i>
						Бесплатное гарантийное обслуживание
					</li>
				</ul>
				<p class="bg-danger">Закажите газ позвонив на номер <a href="tel:+77019606644">+7 701 960 66 44</a></p>
				<div class="card-w" style="width: 90%;">
					<h2>Как происходит доставка баллонов?</h2>
					<p>Мы забираем Ваш пустой баллон в обмен предоставляем свой. Пока Вы пользуетесь нашим сертифицированным газом, Ваш баллон попадает на станцию где с него сливается конденсат и заполняют нужным количеством газа, согласно его паспортным данным ( таблички ) </p>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="dushbord__form">
					<h2 class="dushbord__form_header">Заказать доставку газа</h2>
					<form action="" method="post">
						<label for="name" class="dushbord__form_label">Ваше имя</label>
						<br>
						<input type="text" name="name" id="name" class="dushbord__form_input" required>
						<label for="email" class="dushbord__form_label">Ваш e-mail</label>
						<br>
						<input type="email" name="e-mail" id="email" class="dushbord__form_input" required>
						<label for="phone" class="dushbord__form_label">Ваш телефон</label>
						<br>
						<input type="tel" name="phone" id="phone" class="dushbord__form_input" required>
						<?php
						if(!empty($_POST['e-mail'])){
	//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
	$name = $_POST['name']; // Вытаскиваем имя в переменную
	$email = $_POST['e-mail']; // Вытаскиваем почту в переменную
	$phone= $_POST['phone'];
	$message = "Поздравляем, $name, отправка сообщений на почту $email и номером $phone работает gas"; // Формируем сообщение, отправляемое на почту
	$to = 'gorgaz2050@mail.ru'; // Задаем получателя письма
	$from = $email;  // От кого пришло письмо
	$subject = "Письмо из формы заказа доставки газа"; // Задаем тему письма
	$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
		if (mail($to, $subject, $message, $headers)) { // При помощи функции mail, отправляем сообщение, проверяя отправилось оно или нет
		// echo "<script>document.location.href='http://gorgaz2050.kz';</script>";
			echo "
			<div class="."dushbord__form_message".">
				<p>Ваша заявка принята!</p>
			</div>
			";
		}
		else {
			echo "
			<p>Ошибка!</p>
				"; // Письмо не отправилось
			}
		}
		?>
		<div class="dushbord__form_submit-cont">
			<input type="submit" name="submit" value="ОТПРАВИТЬ" class="dushbord__form_submit"></div>
		</form>
	</div>
</div>
</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="card-w">
				<h2>Газ в баллонах во внедоставочное время</h2>
				<p>
					Если Вам срочно нужен газ, а доставка уже не осуществляется, то Вы можете приехать в наши пункты самовывоза и самостоятельно выбрать баллон по отличной цене.
				</p>
				<p class="bg-info">
					<i class="fa fa-map-marker"></i>
					Ближайший пункт самовывоза можете найти на карте:
				</p>
			</div>
		</div>
	</div>
</div>

<section id="ballon" >
	<div class="row">
		<div class="col-md-6 col-sm-4 col-xs-12">
			<img src="/assets/img/shema.jpg" id="schemaimg" alt="Доставка газовых баллонов в <?php echo $ccityr ?>">
		</div>
		<div class="col-md-6 col-sm-8 col-xs-12">
			<div class="ballon_mother">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" >Не слит конденсат</button>
					<button class="tablinks" onclick="openCity(event, 'Paris')">Не полностью заправлен</button>
					<button class="tablinks" id="f3" onclick="openCity(event, 'Tokyo')">Баллоны от ГорГаз</button>
				</div>

				<div id="London" class="tabcontent">
					<div class="ballon_container">
						<div class="ballon_container-center">
							<div class="ballon_container-span" id="if">Если вы купили газ за N</div>
							<div class="arrow_box" id="minialert">
								<div class="gaspercent-txt">Вас обманули на N тенге!</div>
								<div class="ballon_container-span" id="ballongasbot">Газовая подушка 15%</div>
							</div>
							<div class="ballon_container-textcont" id="gas_percent">
								<div class="ballon_container-textcont-txt">Переплата на N тенге</div>
							</div>
							<div class="line" id="oneline"></div>
							<div class="line" id="twoline"></div>
							<div class="line" id="threeline"></div>
							<div class="ballon_container-span" id="ballongas">Газ 30л х N = N тг</div>
							<div class="ballon_container-span" id="balloncond">Не слит конденсат</div>
							<div class="ballon1 ballon"></div>
						</div>
					</div>
					<div class="ballon_container-bottom">
						<div class="ballon_container_bottom-text" id="">
							<div>Вы покупаете газ за N, а он стоит M</div>
						</div>
					</div>
				</div>

				<div id="Paris" class="tabcontent">
					<div class="ballon_container">
						<div class="ballon_container-center">
							<div class="ballon_container-span" id="if">Если вы купили газ за M</div>
							<div class="arrow_box" id="minialert">
								<div class="gaspercent-txt">Вас обманули на M тенге!</div>
								<div class="ballon_container-span" id="ballongasbot">Газовая подушка 15%</div>
							</div>
							<div class="ballon_container-textcont" id="gas_percent">
								<div class="ballon_container-textcont-txt">Переплата на M тенге</div>
							</div>
							<div class="line" id="oneline"></div>
							<div class="line" id="twoline"></div>
							<div class="ballon_container-span" id="ballongas">Газ 30л х M = M тг</div>
							<div class="ballon2 ballon"></div>
						</div>
					</div>
					<div class="ballon_container-bottom">
						<div class="ballon_container_bottom-text" id="">
							<div>Вы покупаете газ за N, а он стоит M</div>
						</div>
					</div>
				</div>

				<div id="Tokyo" class="tabcontent">
					<div class="ballon_container">
						<div class="ballon_container-center">
							<div class="ballon_container-span" id="if">Если вы купили газ у ГорГАз</div>
							<div class="arrow_box" id="minialert-gorg">
								<div style="font-size: 14px;font-weight: bold;color: #fff;">БЕЗ ОБМАНА</div>
								<div class="ballon_container-span" id="ballongasbot">Газовая подушка 15%</div>
							</div>
							<div class="ballon_container-textcont" id="gas_percent">
								<div class="gaspercent-txt">НЕТ переплаты</div>
							</div>
							<div class="line" id="oneline"></div>
							<div class="line" id="twoline"></div>
							<div class="ballon_container-span" id="ballongas">Газ 30л х N = N тг</div>
							<div class="ballon3 ballon"></div>
						</div>
					</div>
					<div class="ballon_container-bottom">
						<div class="ballon_container_bottom-text" id="">
							<div>Газ за свои деньги!</div>
						</div>
					</div>
				</div>

				<script>/*===============dostavka-tab====================*/

					function openCity(evt, cityName) {
						var i, tabcontent, tablinks;
						tabcontent = document.getElementsByClassName("tabcontent");
						for (i = 0; i < tabcontent.length; i++) {
							tabcontent[i].style.display = "none";
						}
						tablinks = document.getElementsByClassName("tablinks");
						for (i = 0; i < tablinks.length; i++) {
							tablinks[i].className = tablinks[i].className.replace(" active", "");
						}
						document.getElementById(cityName).style.display = "block";
						evt.currentTarget.className += " active";
					}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
/*===============dostavka-tab====================*/</script></div>
</div>
</div>

</section>
<?php require $path . '/section/footer.php'; ?>