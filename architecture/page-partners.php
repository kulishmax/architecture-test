<?php
/* Template Name: Parners */
get_header();

if ( ICL_LANGUAGE_CODE == 'ru' ) {
  $src1 = '/img/img-attend-left-ru.png';
} else {
  $src1 = '/img/img-attend-left-en.png';
}

if ( ICL_LANGUAGE_CODE == 'ru' ) {
  $src2 = '/img/img-attend-right-ru.png';
} else {
  $src2 = '/img/img-attend-right-en.png';
}

if ( ICL_LANGUAGE_CODE == 'ru' ) {
  $src3 = '/img/img-age-ru.png';
} else {
  $src3 = '/img/img-age-en.png';
}

if ( ICL_LANGUAGE_CODE == 'ru' ) {
  $src4 = '/img/img-gend-ru.png';
} else {
  $src4 = '/img/img-gend-en.png';
}

if ( ICL_LANGUAGE_CODE == 'ru' ) {
  $src5 = '/img/graph-countries-ru.png';
} else {
  $src5 = '/img/graph-countries-en.png';
}

?>

<div class="partners-page">

	<div class="geometry_partners">
		<div class="container">
			<h2><?php _e('Мы ищем партнеров по всему миру!', 'arch'); ?></h2>
			<p><?php _e('Мы работаем над тем, чтобы собрать в одном месте и в одно<br>время архитекторов и представителей девелоперских<br>компаний. Если данная аудитория является вашей целевой,<br>предлагаем партнерское сотрудничество.', 'arch'); ?></p>
		</div>
	</div>

	<div class="conference_text">
		<div class="container">
			<h2><?php _e('конференция', 'arch'); ?></h2>
			<p><?php _e('Архитектура будущего &mdash; крупнейшая архитектурная<br>конференция Восточной Европы, объединяющая<br>архитекторов, инженеров, девелоперов, медиа &mdash; всех,<br>кто стремится изменить город путем развития передовых<br>технологий и создания знаковых<br>архитектурных объектов', 'arch'); ?></p>
		</div>
	</div>

	<div class="stripes-img"></div>

	<div class="partner_bonuses">
		<div class="container">
			<h2><?php _e('партнерские проявления*', 'arch'); ?></h2>
			<div class="partner_bonuses_wrap">
				<ul>
					<li><?php _e('Выступление с 30-минутной презентацией', 'arch'); ?> </li>
					<li><?php _e('Стенд компании в экспо-зоне', 'arch'); ?> </li>
					<li><?php _e('Имиджевая представленность компании<br>на всех информационных носителях', 'arch'); ?> </li>
					<li><?php _e('Комуникационная стратегия компании<br>в рамках конференции', 'arch'); ?> </li>
					<li><?php _e('До 10 билетов для участников конференции', 'arch'); ?> </li>
					<li><?php _e('Постоянный доступ в speaker & partner<br>lounge zone', 'arch'); ?> </li>
					<li><?php _e('Участие во всех вечеринках конференции', 'arch'); ?> </li>
					<li><?php _e('Участие в ужине для спикеров конференции', 'arch'); ?> </li>
					<li><?php _e('Возможность провести собственный<br>side event для участников конференции', 'arch'); ?> </li>
				</ul>
				<div class="img-left"></div>
				<div class="img-right"></div>
			</div>
			<div class="bottom_text">
				<p><?php _e('*Тут представлен неполный перечень партнерских<br>проявлений. Каждый партнерский пакет имеет свою специфику', 'arch'); ?>  </p>
			</div>
		</div>
	</div>

	<div class="attendees-speaker">
		<div class="attendees-speaker_header">
			<h2><?php _e('аудитория конференции', 'arch'); ?></h2>
		</div>
		<div class="attendees-speaker_container">
			<div class="attendees-speaker_container_wrap">
				<h2><?php _e('Ожидаемая аудитория<br>(специализация)', 'arch'); ?></h2>
				<div class="image" style="background-image:url(<?php echo get_template_directory_uri().$src1; ?>)">
				</div>
			</div>
			<div class="attendees-speaker_container_wrap attendees-speaker_container_wrap-countries">
				<h2><?php _e('Ожидаемая аудитория<br>(страна)', 'arch'); ?></h2>
				<div class="image" style="background-image:url(<?php echo get_template_directory_uri().$src2; ?>)">
				</div>
			</div>
		</div>
	</div>

	<div class="attendees-speaker-graph">
		<div class="attendees-speaker-graph_container">
			<div class="attendees-speaker-graph_container_inner container_inner-left">
				<h2><?php _e('Ожидаемая аудитория<br>(возраст)', 'arch'); ?></h2>
				<div class="image" style="background-image:url(<?php echo get_template_directory_uri().$src3; ?>)">
				</div>
			</div>
			<div class="attendees-speaker-graph_container_inner container_inner-right">
				<h2><?php _e('Ожидаемая аудитория<br>(пол)', 'arch'); ?></h2>
				<div class="image" style="background-image:url(<?php echo get_template_directory_uri().$src4; ?>)">
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="partners-companies partners-companies1">
		<div class="container">
			<h2><?php _e('архитектурные компании', 'arch'); ?></h2>
			<p><?php _e('Мы приглашаем самые лучшие компании со всего мира!', 'arch'); ?></p>
			<div class="partners-companies_wrap">
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo1.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo2.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo3.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo4.png)';?>"></div>
			</div>
			<div class="partners-companies_wrap">
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo1.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo2.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo3.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo4.png)';?>"></div>
			</div>
		</div>
	</div> -->

	<div class="partners-countries">
		<div class="partners-countries_wrap">
			<h2><?php _e('Из каких стран приедут спикеры?', 'arch'); ?></h2>
			<p><?php _e('База контактов составляет более 5 000 архитекторов<br>со всего мира, поэтому мы привезем лучших из лучших!', 'arch'); ?></p>
			<div class="image" style="background-image:url(<?php echo get_template_directory_uri().$src5; ?>)"></div>
		</div>
	</div>

	<!-- <div class="partners-companies partners-companies2">
		<div class="container">
			<h2><?php _e('Девелоперские компании', 'arch'); ?></h2>
			<p><?php _e('Мы приглашаем ведущие девелоперские и инвестиционные<br>компании со всего мира!', 'arch'); ?></p>
			<div class="partners-companies_wrap">
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo5.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo6.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo7.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo8.png)';?>"></div>
			</div>
			<div class="partners-companies_wrap">
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo9.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo5.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo6.png)';?>"></div>
				<div class="" style="background-image:url(<?php echo get_template_directory_uri().'/img/comp-logo7.png)';?>"></div>
			</div>
		</div>
	</div> -->

	<div class="become-partner">
		<div class="become-partner_header">
			<h2><?php _e('хочу стать партнером', 'arch'); ?></h2>
		</div>
		<div class="become-partner_container row">
			<div class="left-block col-sm-6">
					<form class="become-partner_wrap_form">
						<input type="text" name="FirstName" placeholder="<?php _e('Имя*', 'arch'); ?> ">
						<input type="text" name="FirstName" placeholder="<?php _e('Фамилия*', 'arch'); ?> ">
						<input type="email" name="email" placeholder="<?php _e('Email*', 'arch'); ?> ">
					</form>
				</div>
				<div class="right-block col-sm-6">
					<form class="become-partner_wrap_form">
						<input type="text" name="company" placeholder="<?php _e('Компания*', 'arch'); ?> ">
						<input type="text" name="position" placeholder="<?php _e('Должность*', 'arch'); ?> ">
						<input type="tel" name="tel" placeholder="<?php _e('Телефон*', 'arch'); ?> ">
					</form>
				</div>
				<p class="necessarily-text"><?php _e('*обязательно для заполнения', 'arch'); ?> </p>
				<div class="become-partner_wrap_footer">
					<div class="become-partner_wrap_agree become-partner_wrap_сheckbox col-sm-6">
						<label class="arch">
							<input type="checkbox" class="checkbox" id="checkbox">
							<span class="label-text"><?php _e('Подписаться на рассылку', 'arch'); ?> </span>
						</label>
					</div>
					<div class="become-partner_wrap_button arch_button col-sm-6">
						<button><?php _e('Стать партнером', 'arch'); ?> </button>
					</div>
				</div>	
		</div>
		<div class="thanks_form">
			<div class="thanks_form_text">
				<h2><?php _e('Спасибо за интерес к нашему мероприятию!<br>Мы свяжемся с вами в течение суток.', 'arch'); ?></h2>
				<p><?php _e('Команда AF', 'arch'); ?></p>
			</div>
			<div class="thanks_form_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/face.png)';?>"></div>
		</div>
		<div class="info">
			<p><?php _e('Кроме заявки, есть также возможность связаться с нами напрямую:<br>Татьяна, +38-093-567-28-81, tania@architectureofthefuture.com', 'arch'); ?></p>
		</div>
	</div>

</div>
<?php get_footer(); ?>