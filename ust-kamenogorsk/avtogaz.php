<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>АЗГС - газовые заправки для авто - <?=$ccity ?></title>
<meta name="description" content="Сеть газовых заправок в <?=$ccityr ?>. Заправка авто газом ещё никогда не была такой удобной. Выберите ближайшую заправку на карте в <?=$ccityr ?>">
<meta name="keywords" content="автогаз, заправка, азс, азгс, авто, газ, пропан, сжиженный, +на карте, карта, <?=$ccity?>"> 
<meta property="og:title" content="АЗГС - газовые заправки для авто - <?=$ccity ?>">
<meta property="og:description" content="Сеть газовых заправок в <?=$ccityr ?>. Заправка авто газом ещё никогда не была такой удобной. Выберите ближайшую заправку на карте">
<?php require $path . '/section/hb.php'; ?>
<style>
	.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; font-size: 26px;}
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
     .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
	.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
	.tab-pane { padding: 15px 0; }
	.tab-content{padding:0 10px }

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
</style>
<section id="avto-utp">
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="card-w" style="padding: 0px 25px 0px;">
		<h1>Газовые заправки в <?=$ccityr?></h1>
		<p>Заправка авто газом по лучшим ценам в <?=$ccityr?></p>
		<p>Мы работаем круглосуточно, без перерывов и выходных!</p>
		<p>Также вы можете скачать список заправок по <a href="/azgs.docx">этой ссылке</a></p>
		<p class="bg-danger"><i class="fa fa-map-marker" aria-hidden="true"></i> Выберите регион для просмотра карты газовых заправок</p>
	</div>
		</div>
	</div>
	<ul class="nav nav-tabs nav-justified">
<!--     <li ><a data-toggle="tab" href="#home">Все цены</a></li> -->
    <li class="active"><a data-toggle="tab" href="#menu1">Астана</a></li>
    <li><a data-toggle="tab" href="#menu2">Караганда</a></li>
    <li><a data-toggle="tab" href="#menu3">Павлодар</a></li>
    <li><a data-toggle="tab" href="#menu4">Усть-Каменогорск</a></li>
  </ul>

  <div class="tab-content">

    <div id="menu1" class="tab-pane fade in active">
     <div class="map-container"> <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af6a00c9c951f360ec4ac34bdba46ec13f563e767c66103b3407fab683837e29e&amp;width=100%&amp;height=544&amp;lang=ru_RU&amp;scroll=true"></script></div>
    </div>
    <div id="menu2" class="tab-pane fade">
  <div class="map-container"> <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af6a00c9c951f360ec4ac34bdba46ec13f563e767c66103b3407fab683837e29e&amp;width=100%&amp;height=544&amp;lang=ru_RU&amp;scroll=true"></script></div>
    </div>
    <div id="menu3" class="tab-pane fade">
 <div class="map-container"> <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af6a00c9c951f360ec4ac34bdba46ec13f563e767c66103b3407fab683837e29e&amp;width=100%&amp;height=544&amp;lang=ru_RU&amp;scroll=true"></script></div>
    </div>
     <div id="menu4" class="tab-pane fade">
 <div class="map-container"> <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af6a00c9c951f360ec4ac34bdba46ec13f563e767c66103b3407fab683837e29e&amp;width=100%&amp;height=544&amp;lang=ru_RU&amp;scroll=true"></script></div>
    </div>
</div>
    </div>
</section>

<section id="why-we__avtogaz">
	<style>
	.bg-w {width: 128px; height: 128px; margin: auto;}
	.bg-shield {background: url('/assets/img/why-we.png') -281px -5px}
	.bg-dog {background: url('/assets/img/why-we.png') -5px -5px}
	.bg-sert {background: url('/assets/img/why-we.png') -143px -143px}
	.bg-medal {background: url('/assets/img/why-we.png') -5px -143px}
	.bg-fuel {background: url('/assets/img/why-we.png') -143px -5px}
	.bg-spec {background: url('/assets/img/why-we.png') -281px -143px}
	.bg-pig {background: url("/assets/img/about/pig.png");}
	.azgs {background: url("/assets/img/about/petrol.png");}
	.zapr {background: url("/assets/img/about/gas-zapravka.png");}
	.dash {background: url("/assets/img/about/dash.png");}
	.true {background: url("/assets/img/about/.png");}
	.promo {background: url("/assets/img/about/present.png");}
	.cash {background: url("/assets/img/about/cash.png");}
</style>

<section id="why-we">
		<div class="container">
			<div class="row">
				<h2>Почему клиенты выбирают нас?</h2>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="bg-w azgs" s ></div>
					<h3>Развитая сеть АГЗС:</h3>
<p>Более 20 заправок по Казахстану</p>

				</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="bg-w promo"></div>
					
<h3>Акции</h3>
<p>Мы проводим всеразличные акции, скидки и ведём дисконтную политику 
</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="bg-w cash"></div>
					<h3>Удобный способ расчета</h3>
<p>У нас Вы сможете расплатится удобным для Вас способом: наличными, безналичными и картами.
</p>
				</div>
				
			
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="bg-w bg-dog"></div>
					<h3>Честная политика</h3>
<p>В отличии от большинства других заправок, мы заинтересованы в предоставлении качественного газа, точности литража и лояльности цена на наших АГЗС, так как сами ежедневно на них обсуживаемся.
</p>

				</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="bg-w zapr"></div>
					<h3>Быстрая заправка</h3>
<p>Российское оборудование и мощные насосы позволяют заправить вашу машину в считаные секунды и как следствие на наших заправках не бывает очередей.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="bg-w dash"></div>
					<h3>Точность счётчиков</h3>
<p>Каждые 3 дня мы проводим калибровку счётчиков, с учетом технических характеристик газа, а значит заправляя 40 литров газа Вы действительно получите ровно 40 литров газа.
</p>
				</div>
			</div>
		</div>
	</section>
</section>










<section id="hw">

	<div class="wrapper-main">
		<div class="row">
			<div class="why_we_avg">
				<hr align="left" size="4" width="200" style="border-top: 7px solid #ff9900; display: inline-block;    margin-top: 0; margin-bottom: 6px;margin-right: 5px;" />
				<div class="why_we_avg-title" style="display: inline-block;">
					<h2 style="font-weight: bold;">Почему стоит работать с нами</h2>
				</div>
				<hr align="left" width="200" size="4" style="border-top: 7px solid #ff9900;display: inline-block; margin-top: 0;margin-bottom: 6px;margin-left: 5px;" />
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="wrapper">
					<a href="#">
						<img src="/assets/img/like.png" alt="" style="    height: 99px;">
						<h3>Опыт</h3>
						<p>
							Очень много лет стабильной работы!(Наверное где-то лет 10).
						Более 10 лет мы трудимся чтобы вам стало комфортнее передвигаться.
						</p>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wrapper">
					<a href="#">
						<img src="/assets/img/client.png" alt="" style="height: 99px;">
						<h3>Качество</h3>
						<p>
							Несколько тысяч довольных клиентов! Мы предлагаем самое высокое качество по доступным ценам!
						</p>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wrapper">
					<a href="#">
						<img src="/assets/img/contractor.png" alt="" style="height: 99px;">
						<h3>Профессионализм</h3>
						<p>
							Наши компетентные консультанты и мастера ответят на любой интересующий вас вопрос.
						</p>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wrapper">
					<a href="#">
						<img src="/assets/img/techsup.png" alt="" style="height: 99px;">
						<h3>Надежность</h3>
						<p>Что-нибудь про гарантию от производителя,или типо того.</p>
					</a>
				</div>
			</div>
		</div>
	</div>	
</section>
	<section id="not_yet-sct">
			<div class="not_yet">
				<div class="not_yet-text-main">
		<div class="not_yet-text" id="qny">Еще не перешли на ГБО?</div>
		<div class="not_yet-text" id="qsp">Скорее спешите!</div>
		<div class="not_yet-text" id="qvg">Это <span>ВЫГОДНО!</span></div>
				</div>
		
		<div class="not_yet-btn">
			<!-- <input type="button" class="button4" value="ЗАКАЗАТЬ" onClick='location.href="http://gorgaz2050.kz/ustanovka-gbo"'> -->
			<input  type="submit" name="submit" value="ОТПРАВИТЬ" class="dushbord__form_submit notyetbtn" onClick='location.href="http://gorgaz2050.kz/ustanovka-gbo"'>
		</div>
		</div>
	</section>
<?php require $path .  '/section/footer.php'; ?>