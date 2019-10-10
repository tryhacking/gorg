<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>Цены на услуги Горгаз - <?=$ccity?>. Акции и скидки</title>
<meta name="description" content="У нас лучшие цены на ГБО, автогаз, балонный газ и газ для газгольдеров в <?=$ccityr?>. Система скидок для постоянных клиентов. С нами выгоднее">
<meta name="keywords" content="цена, купить, горгаз, газ, стоимость, сколько стоит, <?=$ccity?>"> 
<meta property="og:title" content=">Цены на услуги Горгаз - <?=$ccity?>. Акции и скидки">
<meta property="og:description" content="У нас лучшие цены на ГБО, автогаз, балонный газ и газ для газгольдеровв в <?=$ccityr?>. Система скидок для постоянных клиентов. С нами выгоднее">
<?php require $path . '/section/hb.php'; ?>
<div class="text-center"><h1>Цены на услуги Горгаз </h1></div>
<div class="row">
    <div class="card-w text-center">
    	<p class="bg-danger" style="margin-top: 10px;">Цены не являются публичной оффертой и могут отличаться от указанных на сайте.
    	</p>
    	<p><a href="contacts">Свяжитесь с нами </a>для получения актуальных цен</p>
    </div>
  </div>
<section id="services">
  <div class="row">
    <div class="price_title"><h2>Услуги компании ГорГаз в городе <?=$ccity?></h2></div>
    <div class="col-md-5 col-sm-5 col-md-offset-1 col-xs-12">
      <div class="card-w" id="cbg1"   style="max-width: 100%;min-width: 98%;">
        <div class="bg-servise bg-petrol " id="bg-servise-cpb2"></div>
        <div class="card_title">
          <h3>Цена на автогаз</h3>
        </div>  
        <div class="card_text">
            На заправках - 73 тг/л <br> 
            На базе - 71 тг/л <br>
        <a href="avtogaz" class="btn btn-primary">Найти ближаюшую АЗГС на карте</a>
        </div>        
      </div>
      <div class="card-w card-1 card-pr-ballon ">
        <div class="bg-servise bg-gas" ></div>
        <div class="card_title" >
          <h3 style="margin: 0;">Цена на газ в баллонах</h3>
        </div>      
        <div class="card_text">
          <p>10 кг - 1500 тг</p>
        </div>  
        <div class="card_text">
          <p>20 кг - 3000 тг</p>
        </div>
        <a href="dostavka-gaza" class="btn btn-primary">Заказать доставку газа</a>
      </div>
  </div>
  	<div class="col-md-6 col-sm-6 col-xs-12"><section id="mini_faq">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#Глубокое" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
						Глубокое	          </h4>
					</div> 
				</a>
				<div id="Глубокое" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
					<div class="panel-body"> 
							Баллон 10кг-1800тг
		Баллон 20кг-3600тг
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Шемонаиха" aria-expanded="false" aria-controls="collapseTwo"> <div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
				Шемонаиха          </h4>
			</div></a>
			<div id="Шемонаиха" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
				<div class="panel-body">
						Баллон 10кг-1800тг
		Баллон 20кг-3600тг
				</div>
			</div> 
		</div>
		<div class="panel panel-default">
			<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Риддер" aria-expanded="false" aria-controls="collapseThree"><div class="panel-heading" role="tab" id="headingThree">
				<h4 class="panel-title">
				Риддер          </h4>
			</div></a>
			<div id="Риддер" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
				<div class="panel-body">
					Автогаз: 1л.-75тг
		Баллон 10кг - 1800тг 
		Баллон 20кг - 3600тг
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section id="form_price">
  <div class="container">
    <div class="card-w text-center">
      <h2>Как формируются цены?</h2>
      <p>В формировании цены принимают участие 5 объектов: Нефтедобывающие компании, Нефтеперерабатывающие предприятия, Государственный орган, Службы реализаии газа населению и конечные потребители</p>
    </div>
  </div>
</section>

<?php require $path . '/section/footer.php'; ?>