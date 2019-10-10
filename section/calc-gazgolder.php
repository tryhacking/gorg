<section id="calc-gazgolder">
	<script>
	function calc2(form) {
	var VOLUME = document.form.VOLUME.value.replace(',', '.');
	var ZAPOL = document.form.ZAPOL.value.replace(',', '.');
	var PLOTN = "0.543";
	var PRICE = "90";
	// var RESULT = (((VOLUME*(85-ZAPOL))*PLOTN)/100);
	var RESULT = ((VOLUME*(85-ZAPOL)/100)*543*90);


	

	document.form.RESULT.value = Math.round(RESULT);
	}
</script>
	<div class="row">
		<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="dushbord__form">
					<h2 class="dushbord__form_header">Калькулятор Стоимости</h2>
					<form name="form" method="post" onsubmit="calc2(this)">
						<label for="VOLUME" class="dushbord__form_label">Объём емкости (указывается в паспорте)</label><br>
						<input class="dushbord__form_input" size="7" value="6" name="VOLUME"><br>
						<label for="ZAPOL" class="dushbord__form_label">Процент заполненности</label><br>
						<input class="dushbord__form_input" size="7" value="40" name="ZAPOL"><br>
						<div class="cform-btn">
						<input id="calc_btn" type="button" onclick="calc2(this)" name="button" value="Подсчитать" class="dushbord__form_submit">
					</div><br>
						<label for="RESULT" class="dushbord__form_label">Стоимость</label><br>
						<input class="dushbord__form_input" size="7" value="0" name="RESULT">
					</form>
									</div>
			</div>

			<div class="col-md-7 col-sm-6 col-xs-12 inverse">
				
				<div class="card-dark" style="    background-color: rgba(0,0,0,0.6);
    padding: 30px;
    margin-top: 50px;
    margin-right: 20px;
    border-radius: 5px;"><h2>Как мы считаем стоимость заправки газгольдера?</h2>
  <ul class="fa-ul">
  <li><i class="fa-li fa fa-truck"></i>Бесплатная доставка до 50 км от города</li>
  <li><i class="fa-li fa fa-check"></i>Скидка 7% при заказе от 5 тонн</li>
  <li><i class="fa-li fa fa-percent"></i>Бесплатное гарантийное обслуживание</li>
  <li><i class="fa-li fa fa-wrench"></i>Бесплатное гарантийное обслуживание</li>
  <li class="bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Заправка газовых емкостей  ТОЛЬКО при наличии паспорта</li>
</ul></div>

			</div>
	</div>
</section>
