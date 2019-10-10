<?php require $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
<title>ТОО Горгаз 2050 - Официальный сайт</title>
<meta name="description" content="">
<meta name="keywords" content=""> 
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="https://gorgaz2050.kz/img/bg.jpg">
<?php require $path . '/section/hb.php';
$url = $_SERVER['REQUEST_URI'];
$content = explode('/', $url);
if ($content[1] == 'ust-kamenogorsk') {
    require $path . '/section/action.php';
}
require $path . '/section/quest.php';
 require $path . '/section/servise.php'; 
   require $path . '/section/why-we.php'; ?>
  <section id="mini_faq">
    <div class="mini-faq-title" style="text-align: center;"><h2>Вопросы</h2></div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed"><div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            1. Безопасность газ
          </h4>
        </div></a>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
          <div class="panel-body">
            <p>
              Все когда-либо задаются вопросом о безопасности газа. Мы, работая на рынке более 20 лет, можем с уверенностью сказать, что газ безопаснее Ваших сотовых телефонов. Так как к каждой газовой продукции, есть инструкции и техники безопасности, соблюдая которые Вы можете с комфортом и выгодой использовать газ в быту и промышленности, не опасаясь за свою безопасность, чего нельзя сказать о тех же телефонах взрывающихся даже при правильном пользовании. На нашем сайте мы постараемся максимально осветить все интересующие Вас вопросы, предоставляя видеоматериалы, информационные иллюстрации и техническую документацию.
            </p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
           2. Инструкция при утечке или запахе газа с централизованного газоснабжения
          </h4>
        </div></a>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
          <div class="panel-body">
           <ol>
             <li>Откройте окна и двери</li>
             <li>Выйдите на улицу</li>
             <li>Позвоните по телефону 104 или в компанию которая обслуживает Ваш газгольдер</li>
           </ol>
           <p class="bg-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ни в коем случае не дышите испарениями , не оставляйте плиту включенной и не пользуйтесь электрическими приборами</p>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
           3. Инструкция при утечке или запахе газа с газового баллона
          </h4>
        </div></a>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
          <div class="panel-body">
           <ol>
             <li>Закройте клапан у газового баллона</li>
             <li>Вынесите газовый баллон наружу</li>
             <li>Позвоните по телефону 104 или в компанию которая привезла Вам баллон</li>
             <p class="bg-danger">  <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ни в коем случае не дышите испарениями, не оставляйте плиту включенной и не пользуйтесь электрическими приборами</p>
           </ol>
          </div>
        </div>
      </div>
  </section>
  <?php require $path . '/section/call_q.php'; require $path . '/section/footer.php'; ?>