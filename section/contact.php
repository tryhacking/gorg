<section id="contacts-card">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12"><div class="card-w card-contact">
			<div class="row">
				<col-md-6 class="col-sm-6 col-xs-12"><div class="card__phone-icon"><a class="card__open-link" href="tel:+<?=$control_room ?>"><?=$control_room ?></a> </div></col-md-6>
				<col-md-6 class="col-sm-6 col-xs-12"><h4>Диспетчерская</h4></col-md-6>
			</div>
			<div class="row">
				<col-md-6 class="col-sm-6 col-xs-12"><div class="card__phone-icon"><a class="card__open-link" href="tel:+<?=$reception_room ?>"><?=$reception_room ?></a> </div></col-md-6>
				<col-md-6 class="col-sm-6 col-xs-12"><h4>Приемная</h4></col-md-6>
			</div>
			<div class="row">
				<col-md-6 class="col-sm-6 col-xs-12"><div class="card__phone-icon"><a class="card__open-link" href="tel:+<?=$order_gas ?>"><?=$order_gas ?></a> </div>
      </col-md-6>
				<col-md-6 class="col-sm-6 col-xs-12"><h4>Заказать газ</h4></col-md-6>
			</div>
		

		</div>
	</div>
		<div class="col-md-6 col-sm-6 col-xs-12"><section id="mini_faq">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
      	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$regn1 ?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
	        <div class="panel-heading" role="tab" id="headingOne">
	          <h4 class="panel-title">
	          	<?=$regn1 ?>
	          </h4>
	        </div> 
	    </a>
        <div id="<?=$regn1 ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
          <div class="panel-body"> <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_1_contact_number_1 ?>"><?=$region_1_contact_number_1 ?></a></div> 
          <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_1_contact_number_2 ?>"><?=$region_1_contact_number_2 ?></a></div> 
            <!-- <p> 8 701 960 6702, 8(72331) 21004 </p> -->
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$regn2 ?>" aria-expanded="false" aria-controls="collapseTwo"> <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
           <?=$regn2 ?>
          </h4>
        </div></a>
        <div id="<?=$regn2 ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="height: 0px;">
          <div class="panel-body">
          	 <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_2_contact_number_1 ?>"><?=$region_2_contact_number_1 ?></a></div> 
             <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_2_contact_number_2 ?>"><?=$region_2_contact_number_2 ?></a></div> 
           <!-- <p>8 705 504 42 27, 8(72336) 56104</p> -->
          </div>
        </div> 
      </div>
      <div class="panel panel-default">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$regn3 ?>" aria-expanded="false" aria-controls="collapseThree"><div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
           <?=$regn3 ?>
          </h4>
        </div></a>
        <div id="<?=$regn3 ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
          <div class="panel-body">
          	 <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_3_contact_number_1 ?>"><?=$region_3_contact_number_1 ?></a></div> 
             <div class="card__phone-icon"><a class="card__open-link" href="tel:<?=$region_3_contact_number_2 ?>"><?=$region_3_contact_number_2 ?></a></div> 
        <!--   <p>8 701 960 36 85, 8(72332) 32052</p> -->
          </div>
        </div>
      </div>
    </div>
  </section></div>
	</div>
</section>