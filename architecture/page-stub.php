<?php
/* Template Name: Stub */
?>

<?php get_header(); ?>

<div class="container_stub">
	<div class="row row-stub">
		<div class="col-md-12 row-inner">
			<div class="stub_wrap">
					<div class="text_inner">
						<div class="text_inner_header">
							<div class="logo-img"></div>
							<div class="switch-block">
								<span id="ru-switch">Ru|</span>
								<span id="en-switch">En</span>
							</div>
						</div>
						<div class="text_inner_body">
							<div class="xl-text">
								<p class="ru-text">крупнейшая<br>архитектурная<br>конференция<br>восточной<br>европы</p>
								<p class="en-text">the biggest<br>architecture<br>conference<br>in eastern<br>Europe</p>
							</div>	
							<div class="location-block">	
								<p class="ru-text">Киев, Октябрь 4-5, 2018</p>
								<p class="en-text">Kyiv, October 4-5, 2018</p>
							</div>	
							<div class="button-block">
								<button class="ru-text">Забронировать билет</button>
								<button class="en-text">Book the ticket</button>
							</div>
						</div>
					</div> 
					<div class="img-inner"></div>	
			</div>
		</div>
	</div>	
	<div class="footter-stub_wrap">
		<p class="ru-text">Приносим свои извинения, но сайт находится в разработке.<br>Немного терпения и мы удивим вас перечнем спикеров и темами выступлений!</p>
		<p class="en-text">We are really sorry but the site is under construction.<br>Please be patient and we will definitely amaze with the speakers list and topics to be presented.</p>
	</div>
	<div class="form-block" id="form-footer">
		<div class="form-group">
			<label><span class="ru-text">Имя</span><span class="en-text">Name</span></label>
			<input></input>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input></input>
		</div>
		<button><span class="ru-text">Забронировать</span><span class="en-text">Book the ticket</span></button>
		<span class="close-btn"></span>
	</div>
</div>

<style>
	footer.footer {
		display: none;
	}
</style>

<?php get_footer(); ?>