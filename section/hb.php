<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
<script src="/assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/head.css">
<link rel="manifest" href="/manifest.json">
<!-- =========фикс шапки при скролле=========== -->
<script>
  document.addEventListener("turbolinks:before-cache", function() {
    hide();
  })

var h_hght = 90; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна

$(function(){

  var elem = $('#top_nav');
  var top = $(this).scrollTop();

  if(top > h_hght){
    elem.css('top', h_mrg);
  }           

  $(window).scroll(function(){
    top = $(this).scrollTop();

    if (top+h_mrg < h_hght) {
      elem.css('top', (h_hght-top));
    } else {
      elem.css('top', h_mrg);
    }
  });

});
</script>
<!-- =========фикс шапки при скролле=========== -->
</head>
<body data-spy="scroll">
  <div class="wrapper" id ="wrapper" >

    <div id="mobile-fixed-menu" class="menu2">
      <div class="dropdown" style="    position: absolute;
      top: 6px;
      left: 20px;">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-globe" aria-hidden="true"></i>
        Выберите регион
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" style="left: 0px">
        <li>
          <a href="/astana/">Акм. обл и Астана</a>
        </li>
        <li>
          <a href="/karaganda/">Кар. обл и Караганда</a>
        </li>
        <li>
          <a href="/pavlodar/">Павл. обл и Павлодар</a>
        </li>
        <li>
          <a href="/ust-kamenogorsk/">ВКО и Усть-Каменогорск</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="/">Нет моего города</a>
        </li>
      </ul>
    </div>
  </div>
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="show()">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <script >
    function show() {
      document.getElementById('myNavmenu').style.display='block'
    }
    function hide() {
      document.getElementById('myNavmenu').style.display='none'
      // body...
    }
  </script>
  <header class="menu2">

    <div class="row  hidden-xs">
      <div class="topper">
        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="index">
            <div class="topper__logo"></div>
          </a>

        </div>
        <div class="col-md-4 col-sm-3 col-xs-4">
          <div class="dropdown" style="  margin-left: 40px;  padding: 8px 0;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-globe" aria-hidden="true"></i>
              Выберите регион 
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="/astana/" >Акмолинская обл. и Астана</a>
              </li>
              <li>
                <a href="/karaganda/">Карагандинская обл. и Караганда</a>
              </li>
              <li>
                <a href="/pavlodar/">Павлодарская обл. и Павлодар</a>
              </li>
              <li>
                <a href="/ust-kamenogorsk/">ВКО обл. и Усть-Каменогорск</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/">Нет моего города</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6  col-sm-7 col-xs-6">
          <div class="topper__contact">
            <div class="topper__phone-icon"></div>
            <p> 
              <strong><a href="tel:<?=$nomber1?>"><?=$nomber1?></a>
                <br>
                <a href="tel:<?=$nomber2?>"><?=$nomber2?></a></strong> 
              </p>
            </div>
            <div class="topper__contact">
              <div class="topper__address-icon"></div>
              <div class="topper_addr"><p><strong><?=$addr?></strong></p></div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">

      <button type="button"  style="top: 55px !important; padding: 7px 13px;font-size: 20px;" class="navbar-toggle" onclick="hide()" >

        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
      <ul class="nav navmenu-nav">
        <li class="active">
          <a href="/">Главная</a>
        </li>
        <li>
          <a href="avtogaz">Газовые заправки</a>
        </li>
        <li>
          <a href="ustanovka-gbo">Газобалонное оборудование</a>
        </li>
        <li>
          <a href="dostavka-gaza">Доставка газа</a>
        </li>
        <li>
          <a href="gazgolder">Газ для газгольдеров</a>
        </li>
        <li>
          <a href="/faq">Ответы на ваши вопросы</a>
        </li>
        <li class="hidden-sm hidden-md">
          <a href="/price">Цены</a>
        </li>
        <li>
          <a href="contacts">Контакты</a>
        </li>
      </ul>
    </nav>
    <nav id="top_nav" class="navbar hidden-xs" >
      <div id="navbar" class="navbar-collapse menu-collapse menu-shadow collapse in" aria-expanded="true">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index">Главная</a>
          </li>
          <li class=" dropdown-toggle" type="button" data-toggle="dropdown">
            <a href="#">
              Услуги
              <span class="caret"></span>
            </a>
          </li>
          <ul class="dropdown-menu">
            <li>
              <a href="dostavka-gaza">Доставка газа в баллонах</a>
            </li>
            <li>
              <a href="ustanovka-gbo">Установка ГБО на авто</a>
            </li>
            <li>
              <a href="avtogaz">Газовые заправки</a>
            </li>
            <li>
              <a href="gazgolder">Сжиженный газ для газгольдеров</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="uslugi">Все услуги</a>
            </li>
          </ul>
          <li>
            <a href="avtogaz">АЗГС</a>
          </li>
          <li>
            <a href="ustanovka-gbo">ГБО</a>
          </li>
          <li>
            <a href="dostavka-gaza">Доставка газа</a>
          </li>
          <li>
            <a href="price">Цены</a>
          </li>
          <li>
            <a href="/faq">Вопросы</a>
          </li>
          <li class="hidden-sm hidden-md">
            <a href="/about">О компании</a>
          </li>
          <li>
            <a href="contacts">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main id="main2" class="barba-container">

