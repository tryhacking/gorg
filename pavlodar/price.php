<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>Цены на услуги Горгаз - <?=$ccity?>. Акции и скидки</title>
<meta name="description" content="У нас лучшие цены на ГБО, автогаз, балонный газ и газ для газгольдеров в <?=$ccityr?>. Система скидок для постоянных клиентов. С нами выгоднее">
<meta name="keywords" content="цена, купить, горгаз, газ, стоимость, сколько стоит, <?=$ccity?>"> 
<meta property="og:title" content=">Цены на услуги Горгаз - <?=$ccity?>. Акции и скидки">
<meta property="og:description" content="У нас лучшие цены на ГБО, автогаз, балонный газ и газ для газгольдеровв в <?=$ccityr?>. Система скидок для постоянных клиентов. С нами выгоднее">
<?php require $path . '/section/hb.php'; ?>
<div class="text-center"><h1>Цены на услуги Горгаз </h1>
<div class="row">
    <div class="card-w text-center">
    	<p class="bg-danger" style="margin-top: 10px;">Цены не являются публичной оффертой и могут отличаться от указанных на сайте.
    	</p>
    	<p><a href="contacts">Свяжитесь с нами </a>для получения актуальных цен</p>
    </div>
  </div>

  <?php 
  require $path . '/section/data_contact_and_price.php';
  require $path . '/section/pricecard.php'; ?>
</div>
<section id="form_price">
	<div class="container">
		<div class="card-w text-center">
			<h2>Как формируются цены?</h2>
			<p>В формировании цены принимают участие 5 объектов: Нефтедобывающие компании, Нефтеперерабатывающие предприятия, Государственный орган, Службы реализаии газа населению и конечные потребители</p>
		</div>
	</div>
</section>

<?php require $path . '/section/footer.php'; ?>