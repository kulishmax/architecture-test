<?php
/*
* Template Name: Blog page
*/

get_header();

?>

<div class="container-fluid blog-page">
	<div class="blog-page_container">
		<div class="blog-page_row">
			<div class="blog-page_main">
				<div class="blog-page_content">
					<div class="blog-page_top">
						<div class="blog-page_top_inner">
							<h2><?php _e('Устойчивые стратегии', 'arch'); ?> </h2>
						</div>
						<div class="blog-page_top_inner blog-page_top_inner-date">
							<span class="date">26 <?php _e('апреля', 'arch'); ?> 2018</span>
							<span class="view-icon">5742</span>
						</div>
					</div>
					<h3 class="blog-page_title"><?php _e('акихиса хирата построил концепцию жилого дома на основе структуры дерева', 'arch'); ?> </h3>
					<h2><?php _e('Проект Tree-Ness House в Токио создавался как бетонное воплощение растений.', 'arch'); ?> </h2>
					<p>В природе нет одинаковых деревьев, хотя все они построены по единой логике: с корневой системой, стволом, ветками и листвой. Чтобы органично привнести природу в городскую застройку, по мнению японского архитектора, нужно применять такой же метод разнообразия внутри единой системы и для архитектуры.</p>
					<p>Дом на узком угловом участке Хирата собрал из трех ключевых элементов.
					К прямоугольным жилым ячейкам добавляются складчатые ниши-балконы, которые в отдельных квартирах перерастают в открытые лестницы и переходы. Между ячейками и нишами высаживается третья составляющая — кустарники 
					и деревья.</p>
					<div class="blog-page_content_img">
						<div class="wr_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/hirata-tree.jpg)';?>"></div>
					</div>
					<p>Таким образом строгая геометрия жилых комнат контрастирует с диагоналями балконов и органическими формами озеленения. Хирата называет такой прием переплетением: «Расположение трех разных элементов — функциональных блоков, ниш и деревьев — помогает им спутать вместе внешнее и внутреннее пространства и соединиться в единый органический образ».</p>
					<div class="blog-page_content_carousel">
						<div id="carousel-content" class="carousel slide carousel-content" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <div class="carousel-content_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/hirata-tree-1.jpg)';?>"></div>
						    </div>
						    <div class="item">
						      <div class="carousel-content_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/hirata-tree-2.jpg)';?>"></div>
						    </div>
						     <div class="item">
						      <div class="carousel-content_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/hirata-tree-3.jpg)';?>"></div>
						    </div>
						  </div>
						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-content" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-content" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					<p>Прорезая балконы внутрь жилых блоков, архитектор пытался добиться пространственной глубины дерева: ясного внешнего силуэта, который тем не менее просматривается насквозь, как бы вплетая в себя всё окружение и одновременно расплываясь в нем.</p>
					<div class="blog-page_content_img">
						<div class="wr_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/hirata-tree-2.jpg)';?>"></div>
					</div>
					<p>Почему в японской архитектуре не только не боятся выставлять наружу личное, а даже стремятся к этому, мы подробно разбирали в материале «Уединиться в стеклянной комнате: нетипичный взгляд на приватность от японских архитекторов».</p>
				</div>
				<div class="blog-page_content-social">
					<a href="" class="social_linc facebook-icon"></a>
					<a href="" class="social_linc linkedin-icon"></a>
				</div>
			</div>


			<div class="blog-page_sidebar">
				<div class="blog-page_sidebar_inner">
				  <h2><?php _e('Популярные статьи', 'arch'); ?></h2>  
				  <div id="sidebarCarousel" class="carousel slide sidebar-carousel" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#sidebarCarousell" data-slide-to="0" class="active"></li>
				      <li data-target="#sidebarCarousel" data-slide-to="1"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
								<div class="read-block">
									<a href="">
										<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo1.jpg)';?>"></div>
										<h2>Супер высокие здания</h2>
									</a>
									<div class="text">
										<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
										<div class="text_bottom">
											<span>Читать дальше</span>
											<span class="view-icon">5742</span>
										</div>
									</div>
								</div>
								<div class="read-block">
									<a href="">
										<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo1.jpg)';?>"></div>
										<h2>Супер высокие здания</h2>
									</a>
									<div class="text">
										<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
										<div class="text_bottom">
											<span>Читать дальше</span>
											<span class="view-icon">5742</span>
										</div>
									</div>
								</div>
				      </div>

				      <div class="item">
								<div class="read-block">
									<a href="">
										<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo1.jpg)';?>"></div>
										<h2>Супер высокие здания</h2>
									</a>
									<div class="text">
										<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
										<div class="text_bottom">
											<span>Читать дальше</span>
											<span class="view-icon">5742</span>
										</div>
									</div>
								</div>
								<div class="read-block">
									<a href="">
										<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo1.jpg)';?>"></div>
										<h2>Супер высокие здания</h2>
									</a>
									<div class="text">
										<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
										<div class="text_bottom">
											<span>Читать дальше</span>
											<span class="view-icon">5742</span>
										</div>
									</div>
								</div>
				      </div>
				    </div>
					</div>
				</div>
			</div>

		</div>
		<div class="blog-page_main-more">
			<h2 class="title"><?php _e('читайте также', 'arch'); ?></h2>
			<div class="blog-page_main-more_wrap">
				<div class="read-block">
					<a href="">
						<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo1.jpg)';?>"></div>
						<h2>Супер высокие здания</h2>
					</a>
					<div class="text">
						<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
						<div class="text_bottom">
							<span>Читать дальше</span>
							<span class="view-icon">5742</span>
						</div>
					</div>
				</div>
				<div class="read-block">
					<a href="">
						<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo2.jpg)';?>"></div>
						<h2>Супер высокие здания</h2>
					</a>
					<div class="text">
						<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
						<div class="text_bottom">
							<span>Читать дальше</span>
							<span class="view-icon">5742</span>
						</div>
					</div>
				</div>
				<div class="read-block">
					<a href="">
						<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo3.jpg)';?>"></div>
						<h2>Супер высокие здания</h2>
					</a>
					<div class="text">
						<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
						<div class="text_bottom">
							<span>Читать дальше</span>
							<span class="view-icon">5742</span>
						</div>
					</div>
				</div>
				<div class="read-block">
					<a href="">
						<div class="read-block_img" style="background-image:url(<?php echo get_template_directory_uri().'/img/photo4.jpg)';?>"></div>
						<h2>Супер высокие здания</h2>
					</a>
					<div class="text">
						<h2><?php _e('Футуристические здания — главные модные локации для круизных показов', 'arch'); ?></h2>
						<div class="text_bottom">
							<span>Читать дальше</span>
							<span class="view-icon">5742</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>