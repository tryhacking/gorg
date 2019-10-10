<script >

	function calc(form) {
	var GAZ = document.form.GAZ.value.replace(',', '.');
	var BENZIN = document.form.BENZIN.value.replace(',', '.');
	var ROZHOD = document.form.ROZHOD.value.replace(',', '.');
	var PROBEG = document.form.PROBEG.value.replace(',', '.');

	var DAY = (((BENZIN-GAZ)*ROZHOD*PROBEG)/100);

	document.form.DAY.value = Math.round(DAY);
	document.form.MOUTH.value = Math.round(DAY*30);
	document.form.EKONOM.value = Math.round(DAY*365);
	}
</script>
<div class="cform-cont">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 cform">
			<!-- <div class="cform">
			-->
			
				<h3 id="cform-txt">Посчитайте сколько вы сэкономите перейдя на газ</h3>
			
			<form name="form" onsubmit="calc(this)" method="post">
				<div class="row">
					<div class="col-md-12 col-sm-12" style="padding: 0">
						<div class="col-md-3 col-sm-6">
							<div class="cform-row">
								<div class="label_cont"><label for="GAZ" class="dushbord__form_label">Цена 1 литра газа:</label></div>
								<input class="dushbord__form_input" size="7" value="65" name="GAZ">
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="cform-row">
								<div class="label_cont"><label for="BENZIN" class="dushbord__form_label">Цена 1 литра бензина</label></div>
									
								<input class="dushbord__form_input" size="7" value="145" name="BENZIN">
						</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="cform-row">
								<div class="label_cont"><label for="ROZHOD" class="dushbord__form_label">Средний расход бензина на 100 км пробега:</label></div>
								<input class="dushbord__form_input" size="7" value="10" name="ROZHOD">
								</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="cform-row">
								<div class="label_cont"><label for="PROBEG" class="dushbord__form_label">Средний суточный пробег Вашего автомобиля:</label></div>
								<input class="dushbord__form_input" size="7" value="50" name="PROBEG">
								</div>
						</div>

					</div>
				</div>
				<div class="cform-btn">
						<input id="calc_btn" type="button" onclick="calc(this)" name="button" value="Подсчитать" class="dushbord__form_submit">
					</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"><h1 style="color: #fff;font-weight: bold;">ВЫ СЭКОНОМИТЕ:</h1></div>
					<div class="col-md-4"></div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="row counter">
							<div class="col-md-4 col-sm-6 column-1-3 year">
								<div class="label_speed">В день</div>
								<div class="result_input">
									<input class="txt_speed" size="7" value="0" name="DAY"></div>
							</div>
							<div class="col-md-4 col-sm-6 column-1-3 month">
								<div class="label_speed">В Месяц</div>
								<div class="result_input">
									<input class="txt_speed" size="7" value="0" name="MOUTH" style=""></div>
							</div>
							<div class="col-md-4 col-sm-12 column-1-3 day">
								<div class="label_speed">В Год</div>
								<div class="result_input">
									<input class="txt_speed" size="7" value="0" name="EKONOM"></div>
							</div>
						</div>
					</div>
				</div>
					
			</form>
		</div>
	</div>
</div>