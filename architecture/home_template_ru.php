<?php
/* Template Name: Home Page RU */
get_header(); 

$args = array (
	'numberposts' => 1,
	'post_type'   => 'curators'
);

$curator = get_posts( $args )[0];
$curator_company = get_post_meta( $curator->ID, 'company', true );
$curator_country = get_post_meta( $curator->ID, 'country', true );
$curator_position = get_post_meta( $curator->ID, 'position', true );
$curator_quote = get_post_meta( $curator->ID, 'quote', true );
$curator_img = get_the_post_thumbnail_url( $curator->ID, 'full' );


$args = array (
	'numberposts' => -1,
	'post_type'   => 'quote'
);

$quotes_all = get_posts( $args );

$num = 0;

foreach ( $quotes_all as $quote_lang ){

	$args_lang = array('element_id' => $quote_lang->ID, 'element_type' => 'quote' );
  $my_post = apply_filters( 'wpml_element_language_code', null, $args_lang );
  if( substr( get_locale(), 0, 2 ) == $my_post){
  	$quotes[$num++] = $quote_lang;
  }

}

$args = array (
	'numberposts' => -1,
	'post_type'   => 'speakers'
);
$speakers = get_posts( $args );

$args = array (
	'numberposts' => -1,
	'orderby'     => 'title',
	'order'       => 'ASC',
	'post_type'   => 'programs'
);

$authors = get_posts( $args );


//print_var(unserialize($authors));

if ( ICL_LANGUAGE_CODE == 'ru' ) {
   $src ='/img/map-ru.png';
} else {
   $src = '/img/map-en.png';
}

?>
  
<!-- Верстка главной страницы -->
<div class="intro" id="introduction">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="intro_info">
					<h4 class="intro_info_topic">ARCHITECTURE OF THE FUTURE</h4>
					<h2 class="intro_info_desc"><?php _e('The biggest<br>architecture<br>conference<br>in Eastern<br>Europe', 'arch'); ?></h2>
					<p class="intro_info_date"><?php _e('Kyiv, October 4-5, 2018', 'arch'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="stat">
	<div class="container">
		<div class="stat_wrap">		
			<div class="stat_wrap_item"><p><?php _e('12+ countries', 'arch'); ?></p></div>
			<div class="stat_wrap_item"><p><?php _e('20+ lecturer hours', 'arch'); ?></p></div>
			<div class="stat_wrap_item"><p><?php _e('40+ speakers', 'arch'); ?></p></div>
		</div>	
	</div>
</div>



<div class="overview">
	<div class="container">
		<div class="overview_title">
			<h2><?php _e('The Architecture of the Future — is the biggest architecture<br>conference in Eastern Europe that brings together<br>authorities, architects, engineers, developers, media - all<br>who seek to change the city through the development<br>of advanced technologies and the creation of iconic projects', 'arch'); ?></h2>
		</div>
		<div class="overview_stat">
			<div class="black_circle">
				<span><?php _e('1000+<br>participants', 'arch'); ?></span>
			</div>
			<div class="overview_stat_percents">
				<span><?php _e('63%<br>architects', 'arch'); ?></span>
				<span><?php _e('16%<br>developers', 'arch'); ?></span>
				<span><?php _e('7% <br> media*', 'arch'); ?></span>
				<span class="visible-xs"><?php _e('*14% <br>other groups of <br> the participants', 'arch'); ?></span>
				<span class="other hidden-xs"><?php _e('*14% <br>other groups of <br> the participants', 'arch'); ?></span>
			</div>
			<div class="list_cont">
				<ul>
					<li><span><?php _e('2-day-conference with non-stop presentations', 'arch'); ?></span></li>
					<li><span><?php _e('Partners side events and after parties', 'arch'); ?></span></li>
					<li><span><?php _e('Expo zone with up-to-date technologies', 'arch'); ?></span></li>
					<li><span><?php _e('The first in Ukraine architecture photo exhibition ', 'arch'); ?></span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
/* 
<div class="support">
	<div class="container">
		<h2>при поддержке</h2>
		<div class="support_wrap">
		<?php 
			$args = array(
				'numberposts' => -1,
				'post_type'   => 'support',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'cat_support',
                        'field' => 'name',
                        'terms' => 'support'
                    )
                )
			);
			$support_partners = get_posts( $args );

			foreach ( $support_partners as $key => $value ) {
				$id = $value->ID;
				$logo = get_the_post_thumbnail_url( $id );

			?>
			<div class="support_wrap_item" style="background-image: url(<?php echo $logo;?>);"></div>
			<?php } ?>
		</div>
	</div>
</div>
*/
?>

<div class="topics">
	<div class="container">
		<h2 class="topics_title"><?php _e('THE MAIN TOPICS', 'arch'); ?></h2>
		<div class="topics_wrap">
			<div class="topics_wrap_item topics_wrap_item_1">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_1.1.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('How VR/AR/AI are changing<br>present and future of the architecture', 'arch'); ?></p>
				</div>
			</div>
			<div class="topics_wrap_item topics_wrap_item_2">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_2.2.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('3D printing as a new <br>shape for architecture', 'arch'); ?></p>
				</div>
			</div>
			<div class="topics_wrap_item topics_wrap_item_3">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_3.3.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('Zero energy architecture', 'arch'); ?></p>
				</div>
			</div>
			<div class="topics_wrap_item topics_wrap_item_4">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_4.4.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('Smart city as new <br>platform for living', 'arch'); ?></p>
				</div>
			</div>
			<div class="topics_wrap_item topics_wrap_item_5">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_5.5.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('The sustainable strategies <br>for the cities development', 'arch'); ?></p>
				</div>
			</div>
			<div class="topics_wrap_item topics_wrap_item_6">
				<div class="topics_wrap_item_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/topic_6.6.png)';?>"></div>
				<div class="topics_wrap_item_text">
					<p><?php _e('Mega projects, supertalls and <br>new cities within the existing cities', 'arch'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
/*
<div class="chief">
	<div class="container">
		<h2 class="chief_title">Куратор конференции</h2>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 chief_cont">
				<div class="row">
					<div class="col-md-6">
						<div class="chief_cont_text">
							<h2><?php echo $curator->post_title;?></h2>
							<p><?php echo $curator->post_content;?></p>
							<div class="chief_cont_text_quote">
								<p>&laquo;<?php echo $curator_quote;?>&raquo;</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="chief_cont_img" style="background-image:url(<?php echo $curator_img;?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
*/
?>
<div class="speakers" id="speakers">
	<div class="container">
		<h2><?php _e('SPEAKERS & MODERATORS', 'arch'); ?></h2>
		<!-- <div class="owl-carousel owl-theme speakers_carousel">
		<?php  for( $i = 0; $i < 10; $i++ ) { ?>
			<div class="speaker_wr">
				<div class="speaker_wr_img"></div>
				<div class="speaker_wr_name"><?php echo $i + 1; ?></div>
				<div class="speaker_wr_surname">grg</div>
				<div class="speaker_wr_company">fthiu</div>
				<div class="speaker_wr_info">
					<div>name</div>
					<div>surname</div>
					<div>country</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, illo!</div>
				</div>
			</div>
		<?php } ?>
		</div> -->
		<div id="speakers_carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
		    <ol class="carousel-indicators">
			    <?php $speakers_indicators = ceil( count( $speakers ) / 8 ); 
			  		for( $i = 0; $i < $speakers_indicators; $i++ ) {
			  	?>
			    	<li data-target="#speakers_carousel" data-slide-to="<?php echo $i; ?>" 
			    	class="<?php if ( $i == 0 ) echo 'active'; ?>"></li>
			    <?php } ?>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		    <?php 
			  	$speakers_length = count( $speakers );
			  	
			  	for ( $i = 0; $i < $speakers_length; $i++ ) { 
			  		// $quote_text_first = $quotes[$i]->post_content;
			  		// $quote_logo_first = get_the_post_thumbnail_url( $quotes[$i]->ID );
			  		// $quote_text_second = $quotes[$i+1]->post_content;
			  		// $quote_logo_second = get_the_post_thumbnail_url( $quotes[$i+1]->ID );
			  		if ( $i % 8 == 0 ) {
			  ?>
		      <div class="item <?php if ( $i == 0 ) echo 'active';?>">
		      	<?php 
		      	for ( $a = $i; $a < $i + 8; $a++ ) { 
		      		if ( $a % 4 == 0 ) {   ?>
		      		<div class="carousel_row">
		      		<?php for ( $j = $a; $j < $a + 4; $j++ ) { ?>
		      		<?php if ( !empty( $speakers[$j] ) ) {

		      		$name = $speakers[$j]->post_title;
		      		$photo = get_the_post_thumbnail_url( $speakers[$j]->ID );
		      		$country = get_post_meta( $speakers[$j]->ID, 'country', true );
		      		$position = get_post_meta( $speakers[$j]->ID, 'position', true );
		      		$company = get_post_meta( $speakers[$j]->ID, 'company', true );
		      		 ?>
				        <div class="speaker_wr">
							<div class="speaker_wr_img" style="background-image:url(<?php echo $photo;?>)"></div>
							<!-- <div class="speaker_wr_name"><?php echo $name; ?></div> -->
							<!-- <div class="speaker_wr_surname">grg</div> -->
							<!-- <div class="speaker_wr_company"><?php echo $company; ?></div> -->
							<div class="speaker_wr_info">
								<div class="speaker_wr_info_name"><?php echo $speakers[$j]->post_title; ?></div>
								<div class="speaker_wr_info_company"><?php echo $position; ?></div>
								<div><?php echo $company; ?></div>
								<div><?php echo $country; ?></div>
								<div class="speaker_wr_info_content"><?php echo $speakers[$j]->post_content; ?></div>
							</div>
						</div>
						<?php } ?>
					<?php } ?>
		      		</div>
		      		<?php } ?>
		      	<?php } ?>
					
		      </div>
		      <?php } } ?>


			  <!-- <?php  for( $i = 0; $i < 3; $i++ ) { ?>
		      
		      <div class="item">
		      <?php  for( $j = 0; $j < 2; $j++ ) { ?>
			        <div class="carousel_row">
				        <?php  for( $a = 0; $a < 4; $a++ ) { ?>
				        <div class="speaker_wr">
							<div class="speaker_wr_img"></div>
							<div class="speaker_wr_name"><?php echo $i + 1; ?></div>
							<div class="speaker_wr_surname">grg</div>
							<div class="speaker_wr_company">fthiu</div>
							<div class="speaker_wr_info">
								<div>name</div>
								<div>surname</div>
								<div>country</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, illo!</div>
							</div>
						</div>
						<?php  } ?>
					</div>
				<?php  } ?>
		      </div>

		      <?php } ?> -->
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#speakers_carousel" data-slide="prev">
		      <span class="fa fa-angle-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#speakers_carousel" data-slide="next">
		      <span class="fa fa-angle-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
</div>
<?php
/*

<div class="schedule" id="programs">
	<div class="container">
		<h2><?php _e('Программа конференции', 'arch'); ?></h2>
		<div class="download_program"><a href="#"><?php _e('Скачать программу', 'arch'); ?></a></div>
		<ul class="nav nav-tabs">
		<?php 
		 	$num_prog = 1;
			foreach ( $authors as $program ){
				$active = $num_prog == 1 ? 'active' : '';
		?>
			  <li class="<?php echo $active; ?>"><a data-toggle="tab" href="#day<?php echo $num_prog; ?>"><?php echo $program->post_title; ?></a></li>
		<?php
				$num_prog++; 
			} 
		?>
		</ul>
		<div class="tab-content">
		 <?php 
		 	$num_prog = 1;
			foreach ( $authors as $program ){
				$active = $num_prog == 1 ? 'fade in active' : 'fade';
				$all_authors = unserialize( get_post_meta($program->ID, 'all_authors', true) );
		?>
		<div id="day<?php echo $num_prog; ?>" class="tab-pane <?php echo $active; ?>">
		    <table>
		    <?php
				foreach ( $all_authors as $author ) {
					$arr_keys = array_keys($author);
			?>
		    	<tr>
		    		<td><?php echo $author[$arr_keys[0]]; ?></td>
		    		<td>
		    			<h3><?php echo $author[$arr_keys[2]]; ?></h3>
		    			<p><?php echo $author[$arr_keys[3]]; ?></p>
		    		</td>
		    		<td><?php echo $author[$arr_keys[1]]; ?></td>
		    	</tr>
		    <?php } ?>
		    </table>
		  		<?php if ( count($all_authors) > 2 ){ ?>
		    		 <a href="#" class="show_program"><span><?php _e('Вся программа', 'arch'); ?></span><span class="arrow-down"></span></a>
		  		<?php } ?>
		  </div>
		<?php $num_prog++; } ?>
		</div>
	</div>
</div>
*/
?>
<div class="reasons">
	<div class="container">
		<h2><?php _e('6 REASONS TO ATTEND THE CONFERENCE', 'arch'); ?></h2>
		<p><?php _e('This is not just another conference on architecture,<br>it’s a full-fledged projection into the future!', 'arch'); ?></p>
		<p><?php _e('This conference is not about trends in architecture - rather about your place as a creative leader in society, business and culture', 'arch'); ?></p>
		<div class="reasons_wrap">
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img1" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img1" style="background-image:url(<?php echo get_template_directory_uri().'/img/number1.png)';?>">
					</div>
					<div class="reasons-number-img el-circle" id="el-circle" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-circle.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Feel the future before anyone else', 'arch'); ?></h3>
					<p><?php _e('Be the first to get to learn how architecture is linked with new technologies such as virtual / augmented reality and artificial intelligence, and how new technologies will transform cities and what the architect is to expect in the next 10 years.', 'arch'); ?></p>
				</div>
			</div>
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img2" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img2" style="background-image:url(<?php echo get_template_directory_uri().'/img/number2.png)';?>"></div>
					<div class="reasons-number-img el-circle-half" id="el-circle-half" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-circle-half.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Learn from the best', 'arch'); ?></h3>
					<p><?php _e('The conference has brought together the best professionals from every corner of the world, ready to share their knowledge, experience and practice. They will become your guides to new knowledge and technologies.', 'arch'); ?></p>
				</div>
			</div>
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img3" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img3" style="background-image:url(<?php echo get_template_directory_uri().'/img/number3.png)';?>"></div>
					<div class="reasons-number-img el-square" id="el-square" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-square.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Participate in all the activities of the conference', 'arch'); ?></h3>
					<p><?php _e('During 2 days devote your time to the conference only in order to take part in all partner events. This will allow you to fully immerse yourself in the atmosphere of the architectural community, become acquainted  and meet like-minded people, become a part of the international architectural incubator aimed to discuss and reinvent  the mission of the architect.', 'arch'); ?></p>
				</div>
			</div>
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img4" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img4" style="background-image:url(<?php echo get_template_directory_uri().'/img/number4.png)';?>"></div>
					<div class="reasons-number-img el-circle-half2" id="el-circle-half2" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-circle-half2.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Find out first about new technologies<br> and developments', 'arch'); ?></h3>
					<p><?php _e('Only during the conference there will be an exhibition of building technologies and materials, within the framework of which you will be able to familiarize yourself in detail with the novelties in the construction market.', 'arch'); ?></p>
				</div>
			</div>
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img5" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img5" style="background-image:url(<?php echo get_template_directory_uri().'/img/number5.png)';?>"></div>
					<div class="reasons-number-img el-square-yel" id="el-square-yel" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-square-yel.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Merge into the architectural community', 'arch'); ?></h3>
					<p><?php _e('The largest architectural conference of the Eastern Europe countries gathers at its venue more than 1 000 representatives of the authorities, investors, developers, architects, media, industry associations - all those involved in the development of cities and well thought out space.', 'arch'); ?></p>
				</div>
			</div>
			<div class="reasons_wrap_item">
				<div class="reasons_wrap_item_img item_img6" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-line.png)';?>">
					<div class="reasons-number-img" id="number-img6" style="background-image:url(<?php echo get_template_directory_uri().'/img/number6.png)';?>"></div>
					<div class="reasons-number-img el-circle-bl" id="el-circle-bl" style="background-image:url(<?php echo get_template_directory_uri().'/img/el-circle-bl.png)';?>"></div>
				</div>
				<div class="reasons_wrap_item_text">
					<h3><?php _e('Experience Kyiv', 'arch'); ?></h3>
					<p><?php _e('Find out why Kyiv is called the greenest capital of Europe. October is a traditionally warm season, when the city is lapped in verdure, followed by warm golden and crimson shades. Do not miss the most beautiful time to explore the city, which is more than 1 500 years old.', 'arch'); ?></p>
				</div>
			</div>
		</div>
		<h2 class="reviews_title"><?php _e('THEY ALREADY TALK ABOUT US', 'arch'); ?></h2>
		<div id="review_carousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  	<?php $quotes_indicators = round( count( $quotes ) / 2 ); 
		  	for( $i = 0; $i < $quotes_indicators; $i++ ) {
		  	?>
		    <li data-target="#review_carousel" data-slide-to="<?php echo $i; ?>" 
		    class="<?php if ( $i == 0 ) echo 'active'; ?>"></li>
		    <?php } ?>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		  <?php  
                                           
		  $quotes_length = count( $quotes );
		  	
		  	for ( $i = 0; $i < $quotes_length; $i++ ) {
		  		$quote_text_first = $quotes[$i]->post_content;
		  		$quote_logo_first = get_the_post_thumbnail_url( $quotes[$i]->ID );
		  		$quote_text_second = $quotes[$i+1]->post_content;
		  		$quote_logo_second = get_the_post_thumbnail_url( $quotes[$i+1]->ID );
		  		if ( $i % 2 == 0 ) {
		  ?>
		    <div class="item  <?php if ( $i == 0 ) echo 'active';?>">
		      <div class="quotes_cont">
			      <div class="quote_wrap">
			      	<div class="quote_wrap_text">
			      		<p>&laquo;<?php echo $quote_text_first; ?>&raquo;</p>
			      	</div>
			      	<div class="quote_wrap_logo" style="background-image:url(<?php echo $quote_logo_first;?>"></div>
			      </div>
			      <?php if ( !empty( $quotes[$i+1] ) ) { ?>
			      <div class="quote_wrap">
			      	<div class="quote_wrap_text">
			      		<p>&laquo;<?php echo $quote_text_second; ?>&raquo;</p>
			      	</div>
			      	<div class="quote_wrap_logo" style="background-image:url(<?php echo $quote_logo_second;?>"></div>
			      </div>
			      <?php } ?>
		      </div>
		    </div>
		  <?php } } ?>

		    

		    
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#review_carousel" data-slide="prev">
		    <span class="fa fa-angle-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#review_carousel" data-slide="next">
		    <span class="fa fa-angle-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>


<div class="participants" id="location">
	<div class="participants_header">
		<div class="container">
			<h2><?php _e('PARTICIPANTS & VENUE', 'arch'); ?></h2>
		</div>
	</div>
	<div class="participants_map">
		<div class="container" style="background-image:url(<?php echo get_template_directory_uri().$src; ?>)"></div>
	</div>	
</div>

<?php
$curr_date = time();
// if ( $curr_date < strtotime( '2018-07-01' ) ) {
// 	$curr_date = strtotime( '2018-07-01' );
// }
$early = 'active_timeline';
$early_h = 'highlight_price';
$early_h_name = 'highlight_name';
$regular = '';
$regular_h = '';
$regular_h_name = '';
$late = '';
$late_h = '';
$late_h_name = '';
$get_price = 'early';
if ( $curr_date > strtotime( '2018-06-30' ) ) {
	$early = '';
	$early_h = '';
	$regular = 'active_timeline';
	$regular_h = 'highlight_price';
	$regular_h_name = 'highlight_name';
	$get_price = 'regular';
}
if ( $curr_date > strtotime( '2018-08-31' ) ) {
	$early = '';
	$early_h = '';
	$early_h_name = '';
	$regular = '';
	$regular_h = '';
	$regular_h_name = '';
	$late = 'active_timeline';
	$late_h = 'highlight_price';
	$late_h_name = 'highlight_name';
	$get_price = 'late';
}
$ticets_option = unserialize(get_option('save_price_tickets'));
/*var_dump($ticets_option);*/
?>

<div class="tickets" id="payment">
	<h2><?php _e('Buy a ticket', 'arch'); ?></h2>
	<ul class="nav nav-tabs">
	  <li class="active"><a class="group_tabs_btn" data-toggle="tab" href="#individual"><?php _e('Individual', 'arch'); ?></a></li>
	  <li><a class="group_tabs_btn" data-toggle="tab" href="#group"><?php _e('Group (5 or more)', 'arch'); ?></a></li>
	</ul>
	<div class="container">
		<div class="tab-content">
    	<div class="timeline">
	    	<div class="timeline_item <?php echo $early; ?>">
	    		<p>Early Bird</p>
				<p><?php _e('1 June - 30 June 2018', 'arch'); ?></p>
	    	</div>
	    	<div class="timeline_item <?php echo $regular; ?>">
	    		<p>Regular</p>
				<p><?php _e('1 July - 31 August 2018', 'arch'); ?></p>
	    	</div>
	    	<div class="timeline_item <?php echo $late; ?>">
	    		<p>Late Bird</p>
				<p><?php _e('1 September - 3 October 2018', 'arch'); ?></p>
	    	</div>
	    </div>
	    <div class="timeline_indicators">
	    	<div class="time1 <?php echo $early_h; ?>"></div>
	    	<div class="time2 <?php echo $regular_h; ?>"></div>
	    	<div class="time3 <?php echo $late_h; ?>"></div>
	    </div>
		  <div id="individual" class="tab-pane fade in active">
		    <div class="price_columns">
		    	<div class="price_columns1 price_columns_item">
		    		<div class="price_columns_top price_columns_top_junior">
		    			<h2>Junior</h2>
		    			<div class="prices">
		    				<p class="highlight_price">$<?php echo $ticets_option['junior'][$get_price]; ?></p>
		    			</div>
		    			<p class="price_name highlight_name"><?php _e('for students', 'arch'); ?></p> 
		    		</div>
		    		<div class="price_columns_desc">
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to all speeches and activities of the conference', 'arch'); ?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    		</div>
	    			<div class="price_columns_bottom">
	    				<a href="#buyticket" class="buy_btn"><?php _e('Buy a ticket', 'arch'); ?></a>
	    			</div>
		    	</div>
		    	<div class="price_columns2 price_columns_item">
		    		<div class="price_columns_top">
		    			<h2>Senior</h2>
		    			<div class="prices">
		    				<div class="price_early">
		    					<span class="price_value <?php echo $early_h; ?>">$<?php echo $ticets_option['senior']['early']; ?></span><span class="price_name <?php echo $early_h_name; ?>">Early</span>
		    				</div>
		    				<div class="price_reg">
		    					<span class="price_value <?php echo $regular_h; ?>">$<?php echo $ticets_option['senior']['regular']; ?></span><span class="price_name <?php echo $regular_h_name; ?>">Regular</span>
		    				</div>
		    				<div class="price_late">
		    					<span class="price_value <?php echo $late_h; ?>">$<?php echo $ticets_option['senior']['late']; ?></span><span class="price_name <?php echo $regular_h_name; ?>">Late</span>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="price_columns_desc">
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to all speeches and activities of the conference', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to video and presentations after the conference', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Participation in AF <br> After Party', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p class="empty"><span class="cross-icon"></span></p>
		    			</div>
		    		</div>
	    			<div class="price_columns_bottom">
	    				<a href="#buyticket" class="buy_btn"><?php _e('Buy a ticket', 'arch'); ?></a>
	    			</div>
		    	</div>
		    	<div class="price_columns3 price_columns_item">
		    		<div class="price_columns_top">
		    			<h2>Executive</h2>
		    			<div class="prices">
		    				<div class="price_early">
		    					<span class="price_value <?php echo $early_h; ?>">$<?php echo $ticets_option['executive']['early']; ?></span><span class="price_name <?php echo $early_h_name; ?>">Early</span>
		    				</div>
		    				<div class="price_reg">
		    					<span class="price_value <?php echo $regular_h; ?>">$<?php echo $ticets_option['executive']['regular']; ?></span><span class="price_name <?php echo $regular_h_name; ?>">Regular</span>
		    				</div>
		    				<div class="price_late">
		    					<span class="price_value <?php echo $late_h; ?>">$<?php echo $ticets_option['executive']['late']; ?></span><span class="price_name <?php echo $regular_h_name; ?>">Late</span>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="price_columns_desc">
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to all speeches and activities of the conference', 'arch'); ?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to video and presentations after the conference', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('2 tickets for AF <br> After Party', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Access to Speaker & Partner Lounge Zone', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Priority places near the stage', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Participation in AF<br>Opening Party', 'arch');?></p>
		    			</div>
		    			<div class="price_columns_desc_item">
		    				<p><?php _e('Food included', 'arch');?></p>
		    			</div>
		    		</div>
	    			<div class="price_columns_bottom">
	    				<a href="#buyticket" class="buy_btn"><?php _e('Buy a ticket', 'arch'); ?></a>
	    			</div>
		    	</div>
		    </div>
		  </div>
			<div id="group" class="tab-pane fade">
				<div class="price_columns_group">
					<div class="price_columns_group_wrap">
						<div class="price_columns_group_top">
							<h3><?php _e('Скидка - 10%', 'arch'); ?></h3>
						</div>
						<div class="price_columns_desc_group">
							<p><?php _e('Группа 5-9 человек', 'arch'); ?></p>
						</div>
	    			<div class="price_columns_bottom">
	    				<a href="#group-ticket" class="book_btn" id="group-ticket_btn"><?php _e('Забронировать', 'arch'); ?></a>
	    			</div>
					</div>
					<div class="price_columns_group_wrap">
						<div class="price_columns_group_top">
							<h3><?php _e('Скидка - 15%', 'arch'); ?></h3>
						</div>
						<div class="price_columns_desc_group">
							<p><?php _e('Группа 10-15 человек', 'arch'); ?></p>
						</div>
	    			<div class="price_columns_bottom">
	    				<a href="#group-ticket" class="book_btn" id="group-ticket_btn"><?php _e('Забронировать', 'arch'); ?></a>
	    			</div>
					</div>
					<div class="price_columns_group_wrap">
						<div class="price_columns_group_top">
							<h3><?php _e('Скидка - 20%', 'arch'); ?></h3>
						</div>
						<div class="price_columns_desc_group">
							<p><?php _e('Группа 16 человек и более', 'arch'); ?></p>
						</div>
	    			<div class="price_columns_bottom">
	    				<a href="#group-ticket" class="book_btn" id="group-ticket_btn"><?php _e('Забронировать', 'arch'); ?></a>
	    			</div>
					</div>
				</div>
				<div class="group_text">
					<p><?php _e('Групповая скидка распространяется при условии покупки билетов в одной из категорий участия.<br>Организатор предоставляет всю первичную документацию при покупке билетов по договору.', 'arch'); ?></p>
				</div>
			</div>					
		</div>
	</div>
</div>

<div class="buyticket-block" id="buyticket">
	<div class="buyticket-block_wrapper">
		<div class="buyticket-close"></div>
  	<div class="buyticket_left">
  		<div class="buyticket_left_header">
  			<a class="logo" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri().'/img/logo.svg'?>" alt="logo"></a>
  			<div class="header_info">
  				<div>
  					<p><?php _e('Украина, Киев', 'arch'); ?></p>
  				</div>
  				<div>
  					<p><?php _e('4-5 октября, 2018', 'arch'); ?></p>
  					<p>9.00 - 20.00</p>
  				</div>
  			</div>
  		</div>
  		<div class="buyticket_left_main">
  			<div class="buyticket_left_main_inner">
  					<h1><?php _e('Junior', 'arch'); ?></h1>
  					<p class="for-student"><?php _e('для студентов*', 'arch'); ?></p>
  					<div class="add-icon">
  						<p class="price">$<?php echo $ticets_option['junior'][$get_price]; ?></p>
  						<div class="add-ticket" data-price="<?php echo$ticets_option['junior'][$get_price]; ?>" data-title="Junior" data-id="junior"></div>
  					</div>
  			</div>
  			<div class="buyticket_left_main_inner">
  					<h1><?php _e('Senior', 'arch'); ?></h1>
  					<div class="add-icon">
  						<p class="price">$<?php echo $ticets_option['senior'][$get_price]; ?></p>
  						<div class="add-ticket" data-price="<?php echo $ticets_option['senior'][$get_price]; ?>" data-title="Senior" data-id="senior"></div>
  					</div>
  			</div>
  			<div class="buyticket_left_main_inner">
  					<h1><?php _e('Executive', 'arch'); ?></h1>
  					<div class="add-icon">
  						<p class="price">$<?php echo $ticets_option['executive'][$get_price]; ?></p>
  						<div class="add-ticket" data-price="<?php echo $ticets_option['executive'][$get_price]; ?>" data-title="Executive" data-id="executive"></div>
  					</div>
  			</div>
  			<div class="text"><p><?php _e('*В первый день конференции на стойке регистрации нужно показать студенческий документ. Без подтверждения статуса Студента регистрация по билету Junior проведена не будет.', 'arch'); ?></p></div>
  		</div>
  	</div>
  	<div class="buyticket_right">
  		<div class="buyticket_right_header">
  			<p><?php _e('Все вопросы можно направлять на hello@architectureofthefuture.com или звонить +38-063-439-46-78', 'arch'); ?></p>
  			<div class="step_block">
  				<div class="step_block_inner step_block_inner1">
  					<p class="number">1</p>
  					<p class="text"><?php _e('билеты', 'arch'); ?></p>
  				</div>
  				<div class="arrow-icon"></div>
  				<div class="step_block_inner step_block_inner2">
  					<p class="number">2</p>
  					<p class="text"><?php _e('оформление', 'arch'); ?></p>
  				</div>
  				<div class="arrow-icon"></div>
  				<div class="step_block_inner step_block_inner3">
  					<p class="number">3</p>
  					<p class="text"><?php _e('оплата', 'arch'); ?></p>
  				</div>
  			</div>
  		</div>
  		<div class="buyticket_right_main">
  			<div class="form_main_block right_main-select_tickets" id="blank-ticket">
  				<div class="right_main-select_tickets_wrap">
	  				<img src="<?php echo get_template_directory_uri().'/img/ticket.png'?>" alt="image">
	  				<p><?php _e('Выберите тип и количество<br>билетов', 'arch'); ?></p>
	  			</div>	
  			</div>
  			<div class="form_main_block right_main_added-ticket" id="tickets-list">
  				<!-- <div class="all-tickets junior-ticket">
  					<h1>Junior</h1>
  					<p><?php// _e('для студентов', 'arch'); ?></p>
  					<p class="price">520 ₴</p>
  					<div class="del-icon"></div>
  				</div> -->
  			</div>
  			<div class="form_main_block right_main_form" id="tickets-form">
					<div class="category-block">
						<div class="category-item"></div>
						<!-- <div class="first-elem">
							<p><span>1 Junior</span></p>
						</div>
						<div class="second-elem">
							<p><span>2 Senior</span></p>
						</div>
						<div class="third-elem">
							<p><span>3 Executive</span></p>
						</div> -->
					</div>
					<div class="form-block">
						<!-- <form action="" id="" name="">
							<input type="text" name="FirstName" placeholder="<?php //_e('Имя', 'arch'); ?> ">
							<input type="text" name="LastName" placeholder="<?php// _e('Фамилия', 'arch'); ?> ">
							<input type="tel" name="tel" placeholder="<?php// _e('Телефон', 'arch'); ?> ">
							<input type="text" name="company" placeholder="<?php// _e('Компания', 'arch'); ?> ">
							<input type="text" class="position" name="position" placeholder="<?php// _e('Должность', 'arch'); ?> ">
							<input type="text" class="age" name="Age" placeholder="<?php// _e('Возраст', 'arch'); ?> ">
							<label class="arch arch-left">
								<input type="checkbox" class="checkbox" id="checkbox">
								<span class="label-text"><?php //_e('Согласиться с условиями использования', 'arch'); ?> </span>
							</label>
							<label class="arch arch-right">
								<input type="checkbox" class="checkbox" id="checkbox">
								<span class="label-text"><?php //_e('Подписаться на рассылку', 'arch'); ?> </span>
							</label>
						</form> -->
					</div>
  			</div>
  			<div class="form_main_block right_main_payment-block" id="main_payment-block">
  				<div class="category-ticket">
  					<!-- <div class="junior-ticket">
  						<p><span></span><?php// _e('билет', 'arch'); ?>: Junior</p>
  						<p> ₴</p>
  					</div>
  					<div class="senior-ticket">
  						<p><span></span><?php //_e('билет', 'arch'); ?>: Senior</p>
  						<p> ₴</p>
  					</div>
  					<div class="executive-ticket">
  						<p><span></span><?php// _e('билет', 'arch'); ?>: Executive</p>
  						<p> ₴</p>
  					</div> -->
  				</div>
  				<div class="discount-block">
						<p><?php _e('Код для скидки', 'arch'); ?> </p>
						<input type="text" name="DiscountName">
  				</div>
  			</div>
  			<div class="form_main_block successful-payment-block">
  				<div class="successful-payment-block_wrap">
	  				<img src="<?php echo get_template_directory_uri().'/img/face.png'?>" alt="images">
	  				<div class="text">
	  					<h1><?php _e('Оплата прошла Успешно', 'arch'); ?></h1>
	  					<p><?php _e('Проверьте, пожалуйста, билет по указанному имейлу. Спасибо за интерес к конференции Architecture of the Fututre! Мы сделаем все возможное, чтобы оправдать ваши ожидания. Оставайтесь на связи!', 'arch'); ?> </p>
	  				</div>
	  			</div>	
  			</div>
  		</div>
  		<div class="buyticket_right_footer">
  			<div class="info-ticket">
  				<div class="numb-tickets">
  					<p class="ticket-total"><?php _e('0 билетов', 'arch');?></p>
  					<p></p>
  					<p></p>
  					<p></p>
  				</div>
  				<div class="sum-total">0 $</div>
  			</div>
  			<button class="btn_step_show" id="first-step"><?php _e('Оформить заказ', 'arch');?></button>
  			<button class="btn_step_show" id="second-step"><?php _e('Оформить заказ', 'arch');?></button>
  			<button class="btn_step_show" id="third-step"><?php _e('Оплатить заказ', 'arch');?></button>
  		</div>
  	</div>
	</div>

	<div class="buyticket-block_footer">
		<div class="buyticket-block_footer_text buyticket-block_footer_left">
			<p><?php _e('Все оплаты проводятся в гривне. Пересчет курса осуществляется автоматически в день проведения оплаты. Для осуществления оплаты платежной картой конференция Architecture of the Future использует платежную систему wayforpay.com. Система безопасных электронных платежей реализована на самом современном стандарте безопасности — 3D Secure, который обеспечит максимальную безопасность ваших платежей в Интернет.', 'arch'); ?></p>
		</div>
		<div class="buyticket-block_footer_text buyticket-block_footer_right">
			<p><?php _e('Технология 3D Secure является частью глобальных программ Visa Verified by Visa и MasterCard MasterCardSecureCode™, целью которых является предоставление и обеспечение безопасных и надежных методов оплаты товаров и услуг в глобальной сети Интернет. Конфиденциальная информация о номере вашей карточки, CVV2/CVC2-коде передаются Вами на сайт сервера/системы безопасных электронных платежей в зашифрованном виде. Для передачи данных используется протокол TLS, поэтому безопасность операций полностью гарантирована.', 'arch'); ?></p>
		</div>
		<div class="buyticket-block_footer_pay-logo">
			<div class="icon-pay wayforpay-logo"></div>
      <div class="icon-pay privat-logo"></div>
      <div class="icon-pay visa-logo"></div>
      <div class="icon-pay master-logo"></div>
      <div class="icon-pay maestro-logo"></div>
		</div>
	</div>
</div>

<div class="group-ticket become-partner_container" id="group-ticket_block">
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
		<div class="become-partner_wrap_button arch_button col-sm-6" id="group-book_btn">
			<button><?php _e('Забронировать', 'arch'); ?> </button>
		</div>
	</div>
	<div class="group-ticket-close"></div>
</div>

<div class="thanks_form thanks_form_main">
	<div class="thanks_form_text">
		<h2><?php _e('Спасибо за интерес к нашему мероприятию!<br>Мы свяжемся с вами в течение суток.', 'arch'); ?></h2>
		<p><?php _e('Команда AF', 'arch'); ?></p>
	</div>
	<div class="thanks_form_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/face.png)';?>"></div>
	<div class="group-ticket-close"></div>
</div>

<div class="subscription">
	<div class="container container_custom">
		<h2><?php _e('I want to receive updates of the conference!', 'arch'); ?></h2>
		<form class="form_subscription">
			<input type="text" name="user_name" placeholder="<?php _e('First Name', 'arch'); ?>">
			<input type="email" name="user_email" placeholder="<?php _e('Email', 'arch'); ?>">
			<a href="" class="subscription_btn"><?php _e('Subscribe', 'arch'); ?></a>
		</form>
		<div class="subscription_text">
			<p><?php _e('No spam, only news of the conference, and only once a week<br>You can unsubscribe from the mailing at any time via the link in the email<br>We will never share your contact information with third parties', 'arch'); ?></p>
		</div>
	</div>
</div>


<?php
/*
<div class="partners" id="partners">
	<div class="container">
		<div class="general_partner">
			<h2><?php _e('Генеральный партнер', 'arch'); ?></h2>
			<?php 
			$args = array(
				'numberposts' => 1,
				'post_type'   => 'support',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'cat_support',
                        'field' => 'name',
                        'terms' => 'general'
                    )
                )
			);
			$general_partner = get_posts( $args )[0];

			?>
			<div class="general_partner_logo" style="background-image: url(<?php echo get_the_post_thumbnail_url($general_partner->ID);?>);"></div>
			<!-- <img src="<?php echo get_the_post_thumbnail_url($general_partner->ID);?>" alt="general_partner"> -->
		</div>
		<div class="official_partners">
			<h2><?php _e('Официальные партнеры', 'arch'); ?></h2>
			<div class="official_partners_wrap">
			<?php 
			$args = array(
				'numberposts' => -1,
				'post_type'   => 'support',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'cat_support',
                        'field' => 'name',
                        'terms' => 'official'
                    )
                )
			);
			$official_partners = get_posts( $args );
			//print_var($official_partners);
			foreach ( $official_partners as $key => $value ) {
				$id = $value->ID;
				$logo = get_the_post_thumbnail_url( $id );

			?>
				<div class="official_partners_wrap_item" style="background-image: url(<?php echo $logo;?>);"></div>
			<?php }	?>
			</div>
		</div>
		<div class="regular_partners">
			<h2><?php _e('Партнеры', 'arch'); ?></h2>
			<div class="regular_partners_wrap">
			<?php 
			$args = array(
				'numberposts' => -1,
				'post_type'   => 'support',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'cat_support',
                        'field' => 'name',
                        'terms' => 'regular'
                    )
                )
			);
			$regular_partners = get_posts( $args );
			//print_var($official_partners);
			foreach ( $regular_partners as $key => $value ) {
				$id = $value->ID;
				$logo = get_the_post_thumbnail_url( $id );

			?>
				<div class="regular_partners_wrap_item" style="background-image: url(<?php echo $logo;?>);"></div>
			<?php }	?>
			</div>
		</div>
		<div class="media_partners">
			<h2><?php _e('Медиа партнеры', 'arch'); ?></h2>
			<div class="media_partners_wrap">
			<?php 
			$args = array(
				'numberposts' => -1,
				'post_type'   => 'support',
				'tax_query' => array(
                    array(
                        'taxonomy' => 'cat_support',
                        'field' => 'name',
                        'terms' => 'media'
                    )
                )
			);
			$media_partners = get_posts( $args );
			//print_var($official_partners);
			foreach ( $media_partners as $key => $value ) {
				$id = $value->ID;
				$logo = get_the_post_thumbnail_url( $id );

			?>
				<div class="media_partners_wrap_item" style="background-image: url(<?php echo $logo;?>);"></div>
			<?php }	?>
			</div>
		</div>
	</div>
</div>
*/
?>

<div class="call_to_action">
	<div class="call_to_action_btns">
		<a href="<?php echo home_url() . '/partners'; ?>"><?php _e('Become partner', 'arch'); ?></a>
		<a href="<?php echo home_url() . '/speaker'; ?>"><?php _e('Become speaker', 'arch'); ?></a>
	</div>
</div>	

<?php get_footer(); ?>