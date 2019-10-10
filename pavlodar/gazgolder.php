<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>ТОО Горгаз 2050 - Официальный сайт</title>
<meta name="description" content="">
<meta name="keywords" content=""> 
<meta property="og:title" content="">
<meta property="og:description" content="">
<?php require $path . '/section/hb.php'; ?>
<section id="video-forma">
		<div class="row">
      <div class="col-md-7 col-sm-12 col-xs-12">
        <center>
    <h1>Сжиженный газ для газгольдера в Астане</h1>
   <ul class="fa-ul">
  <li><i class="fa-li fa fa-truck"></i>Бесплатная доставка до 50 км от города</li>
  <li><i class="fa-li fa fa-check"></i>Скидка 7% при заказе от 5 тонн</li>
  <li><i class="fa-li fa fa-percent"></i>Бесплатное гарантийное обслуживание</li>
  <li><i class="fa-li fa fa-wrench"></i>Бесплатное гарантийное обслуживание</li>
  <li class="bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Заправка газовых емкостей  ТОЛЬКО при наличии паспорта</li>
</ul>
  </center>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="dushbord__form">
					<h2 class="dushbord__form_header">Закажите газ</h2>
					<form action="" method="post">
						<label for="name" class="dushbord__form_label">Ваше имя</label><br>
						<input type="text" name="name" id="name" class="dushbord__form_input" required="yes"><br>
						<label for="email" class="dushbord__form_label">Ваш адрес</label><br>
						<input type="text" name="e-mail" id="email" class="dushbord__form_input" required="yes"><br>
						<label for="phone" class="dushbord__form_label">Ваш телефон</label><br>
						<input type="tel" name="phone" id="phone" class="dushbord__form_input" required="yes"><br>
            <?php
            if(!empty($_POST['e-mail'])){
  //Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
  $name = $_POST['name']; // Вытаскиваем имя в переменную
  $email = $_POST['e-mail']; // Вытаскиваем почту в переменную
  $phone= $_POST['phone'];
  $message = "Поздравляем, $name, отправка сообщений на почту $email и номером $phone работает"; // Формируем сообщение, отправляемое на почту
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
						<input type="submit" name="submit" value="ОТПРАВИТЬ" class="dushbord__form_submit">
					</form>
									</div>
			</div>
		</div>
</section>

<section id="utp-gaz">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">  <div class="card-w"><h3>Горгаз рад предложить газ лучшего качества, по лучшей цене.</h3>

<p><i class="fa fa-money" aria-hidden="true"></i>Цена формируется индивидуально в зависимости от объема заказа и отдалённости Вашего дома от нашего склада.</p>
<p><i class="fa fa-check-square-o" aria-hidden="true"></i>
Качество газа (соотношение бутана к пропану) ежемесячно корректируется в зависимости от поставки, однако данная информация не является секретной и Вы всегда можете уточнить её у компетентного сотрудника ГорГаз.</p>

<p><i class="fa fa-user-circle" aria-hidden="true"></i>Ведущий специалист ГорГаз: 
  <?php echo $ccity; ?>
<?php switch ($ccity) {
  case 'Астана':
    echo "Толеу <a href='tel:+77019606658'>+7 701 960 66 58</a> <a href='tel:+77057814761'>+7 705 781 47 61</a>";
    break;
  case 'Павлодар':
     echo "Василий <a href='tel:+77010717706'>8 701 071 77 06</a>";
    break;
  case 'Усть-Каменогорск':
  echo "Владимир Александрович: <a href='tel:+77019603608'>8 701 960 36 08</a>";
    break;
  default: echo "Владимир Александрович: <a href='tel:+77019603608'>8 701 960 36 08</a>";
    break;
} ?>


 </p></div></div>
  </div>
</section>

<style>
  .chevron {padding: 55px;}
  #way-gazgolder .fa-3x {color: #b0211f;
    font-size: 5em;}
</style>
<section id="way-gazgolder" style="">
    <h2 class="text-center">Как осуществляется заказ?</h2>
    <div class="row">
      <div class="card-w" style="padding: 40px 25px 0px;">
      <div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-1 col-sm-offset-1">
      <i class="fa fa-3x  fa-phone-square" aria-hidden="true"></i>
       <h4>Вы звоните и оформляете заявку. </h4> 
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12"> <i class="fa chevron fa-3x fa-chevron-right" aria-hidden="true"></i> </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <i class="fa fa-3x  fa-money" aria-hidden="true"></i>
       <h4>Вы осуществляете оплату в наших офисах</h4> </div>
      <div class="col-md-2 col-sm-2 col-xs-12"> <i class="fa chevron fa-3x fa-chevron-right" aria-hidden="true"></i> </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <i class="fa  fa-3x fa-truck" aria-hidden="true"></i>
       <h4>Наша машина приезжает и осуществляет заправку.</h4> </div>
      <div class="col-md-1 col-xs-0"></div>
    </div>
    </div>
</section>

<?php require $path . '/section/calc-gazgolder.php'; ?>

<section id="reccomend">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card-w">
          <h2 class="danger">Установкой газгольдеров мы не занимаемся</h2>
          <p>Для этой деятельности требуется лицензия и другие разрешительные документы</p>
          <p class="bg-danger inverse"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Обязательно проверяйте наличие лицензии у вашей компании</p>
       <!--    <h3>Мы рекоммендуем:</h3> -->
        </div>
      </div>
    </div>
  </div>
  <!--  <div class="container">
     <div class="row">
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="card-w">
           <div class="bg-servise bg-petrol"></div>
           <div class="card_title">
             <h3>Васнецов Анатолий</h3>
           </div>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur quaerat facilis beatae sapiente, similique ducimus explicabo, voluptate cum eveniet, illo debitis accusamus doloribus natus consequatur iure dolor laborum a.</p>
           <div class="card__phone-icon"><a class="card__open-link" href="tel:+77232221568">+7 (7232) 50-31-68</a></div> 
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="card-w">
           <div class="bg-servise bg-petrol"></div>
           <div class="card_title">
             <h3>Адольф Гитлер</h3>
           </div>
           <p>At quod accusantium excepturi fuga alias assumenda consequatur similique laboriosam quasi ducimus, mollitia quia vero vel est dignissimos id ipsum soluta reprehenderit aspernatur nam? Fuga reiciendis, recusandae!</p>
          <div class="card__phone-icon"><a class="card__open-link" href="tel:+77232221568">+7 (7232) 50-31-68</a></div> 
         </div>
       </div>
       <div class="col-md-4 col-sm-12 col-xs-12">
         <div class="card-w">
           <div class="bg-servise bg-petrol"></div>
           <div class="card_title">
             <h3>Оскар Уайлд</h3>
           </div>
           <p>Sed eius quasi nesciunt, quidem minus sint dolor, totam libero officia harum optio impedit ducimus mollitia officiis placeat numquam praesentium similique neque magnam. Praesentium suscipit facilis, cum repudiandae laudantium nihil.</p>
           <div class="card__phone-icon"><a class="card__open-link" href="tel:+77232221568">+7 (7232) 50-31-68</a></div> 
         </div>
       </div>
     </div>
   </div> -->
 </section> 

  <section id="mini_faq">
    <div class="mini_faq-title" style="text-align: center;"><h2>Вопросы</h2></div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
       <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed"> <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            1. Безопасно ли газовое отопление?
          </h4>
        </div></a>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
          <div class="panel-body">
            <p>
              Система автономной газификации является абсолютно безопасной и невзрывоопасной. Во-первых, на газгольдере имеется сбросные клапана, которые при увеличении давления сбрасывают газ, что не дает газгольдеру взорваться.
      Во вторых, в помещениях где установлено газовое оборудование нами устанавливаются автоматические газоанализаторы с сигнализатором утечки и отсекающем клапанном, что позволяет избежать утечки газа.
 
            </p>
            <ul>
              <li>
                Газонакопительная станция ТОО «LPG Дистрибьюшн», использует высокотехнологичное газовое оборудование.
                <p></p>
              </li>
              <li>
                В настоящее время станция насчитывает 200 сотрудников, имеющих высокую профессиональную подготовку и многолетний опыт работы в системе газоснабжения крупных городов и населенных пунктов Республики Казахстан.
              </li>
              <li>
                Станция обеспечивает потребителей автогазом, баллонным и емкостным газом для коммунально-бытового потребления.
              </li>
              <li>
                Продаваемому на станции газу присвоена торговая марка «Жігергаз».
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
           2. Гарантия качества газа
          </h4>
        </div></a>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
          <div class="panel-body">
            <p>
              Собственная аттестованная производственная
              <a href="/attestovannaya-proizvodstvennaya-laboratoriya-/">лаборатория</a>
              постоянно контролирует состав сжиженного газа на соответствие ГОСТ 20448-90, с помощью газового хроматографа «Кристалл – 2000М».
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            3. Сколько стоит заправка газгольдера
          </h4>
        </div></a>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
          <div class="panel-body">
            Стоимость газа зависит от отпускной цены на газонаполнительных станциях и определяется качеством газа и накладными расходами на его доставку. Поскольку удельные накладные расходы (в расчете на 1 литр перевозимого газа) у небольшого газовоза гораздо больше, чем у его большого собрата, цена газа за литр в системе автономной газификации получается практически такой-же, как цена на газовой заправке.

  Более низкая цена свидетельствует о том, что это либо нестандартный газ с большим содержанием бутана, либо отопительный газ, предназначенный для систем с испарителями и не подходящий для бытовых систем автономной газификации. Такого газа следует избегать.

  Долго экономить на качестве газа не выйдет. Рано или поздно снабжение некачественным газом приведёт к тому, что потребуются дорогостоящие процедуры по откачке и утилизации конденсата.
            <p>Заявки по телефону: 8(7172) 97 83 83; 8 701 9 901 888</p>
          </div>
        </div>
      </div>
     
       
    </div>
  </section>
    <section id="compare" class="hidden-xs"><div class="container">
  <h2>Сравнительная Таблица материалов для автономного Газообеспечения</h2>
  <p>Не знаете чем топить свой дом? Эта таблица поможет вам сделать правильный выбор</p>            
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th>Материал</th>
        <th>КПД</th>
        <th>Экологичность</th>
        <th>Срок службы</th>
        <th>Стоимость</th>
        <th>Общая оценка</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Бензин</td>
        <td>87%</td>
        <td>6</td>
        <td>3 года</td>
        <td>170000тг</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Мазут</td>
        <td>69%</td>
        <td>4</td>
        <td>3 года</td>
        <td>150000тг</td>
        <td>5</td>
      </tr>
      <tr class="l-blue inverse">
        <td>Газ</td>
        <td>84%</td>
        <td>9</td>
        <td>5 лет</td>
        <td>130000тг</td>
        <td>9</td>
      </tr>
      <tr>
        <td>Электричество</td>
        <td>72%</td>
        <td>10</td>
 		<td>10 лет</td>
        <td>260000тг</td>
        <td>8</td>     
      </tr>
      <tr>
        <td>Уголь/дрова</td>
        <td>46%</td>
        <td>6</td>
        <td>20 лет</td>
        <td>45000тг</td>
        <td>8</td>
      </tr>
    </tbody>
  </table>
</div></section>
<?php require $path . '/section/footer.php'; ?>