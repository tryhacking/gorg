<?php require $_SERVER['DOCUMENT_ROOT'] .  '/section/header.php'; ?>
<title>Контакты Горгаз - <?=$ccity?></title>
<meta name="description" content="Телефоны и адреса Горгаз в <?=$ccityr?>. ">
<meta name="keywords" content="контакты, телефон, адрес, позвонить, заказать"> 
<meta property="og:title" content="Контакты Горгаз - <?=$ccity?>">
<meta property="og:description" content="Телефоны и адреса Горгаз в <?=$ccityr?>.">
<?php require $path . '/section/hb.php'; ?>

<style>.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
.card-contact {width: 100%;}</style>
<section>
  <div class="text-center"><h1>Контакты Горгаз - <?=$ccity ?> </h1>
  <p>Для просмора контактов выберите город</p></div>
</section>


<?php 
require $path .'/section/contact/kar.php';
require $path .  '/section/call_q.php';
require  $path . '/section/footer.php'; ?>