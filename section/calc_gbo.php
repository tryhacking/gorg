<section id="gboprice">
	<script type="text/javascript">

				jQuery(document).ready(function(){

				   var lovato_prop=[26000,40000,42000]; //Для значения оборудования 1
				   var digi_prop=[25000,39000,41000 ]; //Для значения оборудования 2
				   var tanoma_prop=[24000,38000,40000 ]; //Для значения оборудования 3
				   var lovato2_prop=[17000,17000,17000 ]; //Для значения оборудования 4

				   /*Данные по метану*/   
				   var lovato_met=[54500,68500,70500 ];  //Для значения оборудования 1
				   var digi_met=[ 52500,66500,68500 ];  //Для значения оборудования 2
				   var tanoma_met=[47500,65500,67500];   //Для значения оборудования 3
				   var lovato2_met=[46500,46500,46500]; //Для значения оборудования 4
				   
				   
				 window.podschet=function(){
					var dvigatel=jQuery('input[name=valve_type]:checked').val(); //Тип двигателя
					var oborudovanie=jQuery('.oborudovanie-brand option:selected').val(); //Марка оборудования
					var d=jQuery('#probeg').val(); //Среднегодовой пробег
					var e=jQuery('#rashod').val(); //Расход бензина
					var f=jQuery('#benzin-price').val(); //Стоимость литра бензина
					var g=jQuery('#propan-price').val(); //Стоимость литра пропана
					var h=jQuery('#metan-price').val(); //Стоимость литра метана
					var gaz=jQuery('.gaz-name option:selected').val(); //Тип выбранного газа

					/*Переменная базовой стоимости*/
				   if (gaz==1){
					   if ((dvigatel==1) && (oborudovanie==1)) {
					   var bs=lovato_prop[0];	
					} else if ((dvigatel==1) && (oborudovanie==2)){
					   var bs=digi_prop[0];
					} else if ((dvigatel==1) && (oborudovanie==3)){
					    var bs=tanoma_prop[0];
					} else if ((dvigatel==1) && (oborudovanie==4)){
					   var bs=lovato2_prop[0];
					}
					if ((dvigatel==2) && (oborudovanie==1)) {
					   var bs=lovato_prop[1];	
					} else if ((dvigatel==2) && (oborudovanie==2)){
					   var bs=digi_prop[1];
					} else if ((dvigatel==2) && (oborudovanie==3)){
					    var bs=tanoma_prop[1];
					} else if ((dvigatel==2) && (oborudovanie==4)){
					   var bs=lovato2_prop[1];
					}
					if ((dvigatel==3) && (oborudovanie==1)) {
					   var bs=lovato_prop[2];	
					} else if ((dvigatel==3) && (oborudovanie==2)){
					   var bs=digi_prop[2];
					} else if ((dvigatel==3) && (oborudovanie==3)){
					    var bs=tanoma_prop[2];
					} else if ((dvigatel==3) && (oborudovanie==4)){
					   var bs=lovato2_prop[2];
					}
				   } else if (gaz==2){
					if ((dvigatel==1) && (oborudovanie==1)) {
					   var bs=lovato_met[0];	
					} else if ((dvigatel==1) && (oborudovanie==2)){
					   var bs=digi_met[0];
					} else if ((dvigatel==1) && (oborudovanie==3)){
					    var bs=tanoma_met[0];
					} else if ((dvigatel==1) && (oborudovanie==4)){
					   var bs=lovato2_met[0];
					}
					if ((dvigatel==2) && (oborudovanie==1)) {
					   var bs=lovato_met[1];	
					} else if ((dvigatel==2) && (oborudovanie==2)){
					   var bs=digi_met[1];
					} else if ((dvigatel==2) && (oborudovanie==3)){
					    var bs=tanoma_met[1];
					} else if ((dvigatel==2) && (oborudovanie==4)){
					   var bs=lovato2_met[1];
					}
					if ((dvigatel==3) && (oborudovanie==1)) {
					   var bs=lovato_met[2];	
					} else if ((dvigatel==3) && (oborudovanie==2)){
					   var bs=digi_met[2];
					} else if ((dvigatel==3) && (oborudovanie==3)){
					    var bs=tanoma_met[2];
					} else if ((dvigatel==3) && (oborudovanie==4)){
					   var bs=lovato2_met[2];
					}
				   }
					/*Переменная базовой стоимости*/
					if (gaz==1) {
					    var i=(d*e*(f-1.1*g))/100;
					} else if (gaz==2){
					    var i=(d*e*(f-0.9*h))/100;
					}
				    
				    var period= bs*12 / i;
					var vklad=  i/bs * 100;
				    
				    
				    if (vklad >= 50) {
				        jQuery('.good span').html ('Неплохое вложение денег и значительная экономия!<br /><strong>Звоните (8422) 50-50-77 !!!</strong>');
				    } else {
				        jQuery('.good span').html ('');
				    }
				    
				    i= Math.round(i).toString();
				    period= Math.round(period).toString();
				    vklad= Math.round(vklad).toString();
				    bs= bs.toString();
				    
				    jQuery('.st-ust span').html          (bs.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g,     '$1 ') + ' тг.' ) ;
					jQuery('.economiya span').html       (i.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g,      '$1 ') + ' тг./год' ) ;
					jQuery('.okypaemost-time span').html (period.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + ' мес.');
					jQuery('.bank span').html            ( vklad.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
				   }

				function validate(inp) {
				    inp.value = this.value.replace(/[^\d,.]*/g, '')
				                         .replace(/([,.])[,.]+/g, '$1')
				                         .replace(/^[^\d]*(\d+([.,]\d{0,5})?).*$/g, '$1');
				}

				    jQuery('#calc_form input').change(validate);
				    jQuery('#calc_form input').click(podschet);
				    jQuery('#calc_form select').change(podschet);
				    podschet();
				})
</script>
	<div class="row" style="padding: 0 7px;">
		<div class="col-md-12 col-sm-12 col-xs-12 cform">
			<div class="gboprice-page" itemscope="" itemtype="http://schema.org/Article">
				<div class="page-header">Подберите себе оборудование!</div>

				<div itemprop="articleBody">
					<p></p>
					<div class="moduletable">

						<form name="calc_form" id="calc_form" action="#">
							<div class="auto-block">
								<div class="auto-block-title"> <strong>Пожалуйста, укажите число цилиндров у двигателя Вашей машины</strong>
								</div>
								<div class="auto-block-wrapper">
									<div class="auto">
										<div class="row">
											<div class="col-md-4 col-xs-6">
												<label for="valve_type4" style="cursor: pointer;">
													<div class="auto-radio_btn-cont">
														<input class="auto-radio_btn" type="radio" value="1" checked="checked" name="valve_type" id="valve_type4"></div>
													<div class="title-cont"> <strong>4-цилиндра</strong>
													</div>
												</label>
											</div>
											<div class="col-md-4 col-xs-6">
												<label for="valve_type6" style="cursor: pointer;">
													<div class="auto-radio_btn-cont">
														<input class="auto-radio_btn" type="radio" value="2"  name="valve_type" id="valve_type6"></div>
													<div class="title-cont">
														<strong>6-цилиндров</strong>
													</div>
												</label>
											</div>
											<div class="col-md-4 col-xs-12">
												<label for="valve_type8" style="cursor: pointer;">
													<div class="auto-radio_btn-cont">
														<input class="auto-radio_btn" type="radio" value="3"  name="valve_type" id="valve_type8"></div>
													<div class="title-cont">
														<strong>8-цилиндров</strong>
													</div>
												</label>
											</div>
											<div class="row">
											<div class="col-md-6 col-xs-6">
												<div class="inp_txt">
													<strong>Пробег за год</strong>
												</div>
												<input  class="dushbord__form_input" type="number" maxlength="8" size="8" value="50000" name="probeg" class="inputbox" id="probeg">
												<i>км</i>
											</div>
											<div class="col-md-6 col-xs-6">
												<div class="inp_txt">
													<strong>Расход</strong>
												</div>
												<input  class="dushbord__form_input" type="number" maxlength="6" size="4" value="15" name="rashod" class="inputbox" id="rashod">
												<i>л/100 км</i>
											</div>
											</div>
										</div>
									</div>
								</div>
								<div class="benzin-block">
									<div class="auto-block-title">
										<strong>Пожалуйста, укажите текущие цены на топливо</strong>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="benzin">
												<div class="benzin-info">
													<div class="inp_txt">
														<span>Бензин:</span>
													</div>
													<div class="benzin-info-input">
														<input class="dushbord__form_input" type="number" checked="checked" value="35" name="benzin-price" id="benzin-price"></div>

												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="benzin">
												<div class="benzin-info">
													<div class="inp_txt">
														<span>Пропан:</span>
													</div>
													<div class="benzin-info-input">
														<input class="dushbord__form_input" type="number" value="15" name="propan-price" id="propan-price"></div>

												</div>
											</div>
										</div>
										<!--  -->
										<div class="col-md-4">
										<div class="inp_txt">
											<strong>Выберите марку оборудования:</strong>
										</div>
										<div class="oborudovanie">
											<select name="oborudovanie-brand" class="oborudovanie-brand">
												<option value="1">Lovato</option>
												<option value="2" selected="selected">Tamona</option>
												<option value="3">Digitronic</option>
												<option value="4">Карбюратор</option>
											</select>
										</div>
											<div style="visibility:hidden;visibility: hidden;height: 0;width: 0;" class="benzin">
												<div class="benzin-info">
													<div class="inp_txt">
														<span>Метан:</span>
													</div>
													<div class="benzin-info-input">
														<input class="dushbord__form_input" type="number" value="11.9" name="metan-price" id="metan-price"></div>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- <div class="oborudovanie-block"> -->

								<!-- <div class="row"> -->
<!-- 									<div class="col-md-6">
										<div class="inp_txt">
											<strong>Выберите марку оборудования:</strong>
										</div>
										<div class="oborudovanie">
											<select name="oborudovanie-brand" class="oborudovanie-brand">
												<option value="1">Lovata</option>
												<option value="2" selected="selected">Tamata</option>
												<option value="3">Davata</option>
												<option value="4">Карбюратор</option>
											</select>
										</div>
									</div> -->
									<!-- <div class="col-md-6"> -->
										<div class="inp_txt" style="visibility:hidden;visibility: hidden;height: 0;width: 0;">
											<strong>Выберите тип газа:</strong>
										</div>
										<div class="gaz" style="visibility: hidden;visibility: hidden;height: 0;width: 0;">
											<select name="gaz-name" class="gaz-name">
												<option value="1" selected="selected">Пропан</option>
												<option value="2">Метан</option>
											</select>
										</div>
									<!-- </div> -->
								<!-- </div> -->

							<!-- </div> -->
						</form>
						<div class="result">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6 ">
									<div class="rform">
										<div class="result-main-title">
											<div class="result-main-title-txt"> <u>Результаты расчета</u>
											</div>
										</div>
										<div class="st-ust">
											<label>Стоимость установки ГБО:</label>
											<span>17 000 руб.</span>
										</div>

										<div class="economiya">
											<label>Годовая экономия:</label>
											<span>138 750 руб./год</span>
										</div>
										<div class="bank">
											<label>
												Это вложение денег под
												<span>816</span>
												% годовых
											</label>
										</div>
										<div class="okypaemost-time">
											<label>Период окупаемости:</label>
											<span>1 мес.</span>
										</div>

									</div>
								</div>
								<div class="col-md-3"></div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</section>