<?php
\app\themes\nz1\AppAsset::register($this);

$primary_menu = Yii::$app->f->getMenu('primary_menu');

if(isset($primary_menu['error']) && $primary_menu['error'] == 1){
	$primary_menu = [
		'id' => 0,
		'name' => 'Primary menu',
		'code' => 'primary_menu',
		'data' => [
			[
				"url_link" => "/",
				"title" => "Trang chủ",
				"id" => 0,
				"icon_class" => "fa fa-home",
				"menu_style" => "0",
				"summary" => ""
			],

			[
				"url_link" => "/gioi-thieu",
				"title" => "Giới thiệu",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

			[
				"url_link" => "/xuat-khau-lao-dong-nhat-ban",
				"title" => "Xuất khẩu lao động Nhật Bản",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

			
			[
				"url_link" => "/dao-tao-tieng-nhat",
				"title" => "Đào tạo tiếng Nhật",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

			[
				"url_link" => "/tu-van-xkld",
				"title" => "Tư vấn XKLĐ",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

			[
				"url_link" => "/blog",
				"title" => "BLOG",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

			[
				"url_link" => "/lien-he",
				"title" => "Liên hệ",
				"id" => 0,
				"icon_class" => "",
				"menu_style" => "0",
				"summary" => ""
			],

		]
	];
}

$logo = Yii::$app->f->getLogo();

if(isset($logo['error']) && $logo['error'] == 1){
	$logo = [
		'src' => '/img/nozomi-pink-2-300x80.png',
		'url_link' => '/',
		'title' => 'Nozomijapan',
		'alt' => 'Nozomijapan',
	];
}

?>

<div class="elementor elementor-46 elementor-location-header">
	<div class="elementor-section-wrap">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-72fa4bb elementor-section-full_width elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default">
			<div class="elementor-container elementor-column-gap-no">
				<div class=elementor-row>
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c97997">
						<div class="elementor-column-wrap elementor-element-populated">
							<div class=elementor-widget-wrap>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-587936a elementor-section-content-middle header__menu elementor-section-boxed elementor-section-height-default elementor-section-height-default">
									<div class="elementor-container elementor-column-gap-no">
										<div class="elementor-row">

											<!-- logo element -->
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-59b77af">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div class="elementor-element elementor-element-158f62b elementor-widget elementor-widget-image">
															<div class="elementor-widget-container">
																<div class="elementor-image"><a href="<?=$logo['url_link'];?>"><img src="<?=$logo['src'];?>" title="<?=$logo['title'];?>" alt="<?=$logo['alt'];?>"></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- #logo element -->

											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4ed07bf">
												<div class=elementor-column-wrap>
													<div class=elementor-widget-wrap></div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9ccbcf0">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div class="elementor-element elementor-element-3dd4de0 elementor-align-right elementor-widget__width-inherit btn_3d elementor-widget elementor-widget-button">
															<div class="elementor-widget-container">
																<div class="elementor-button-wrapper">
																	 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
								
								
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e323bf1">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div class="elementor-element elementor-element-ec2757e elementor-align-right elementor-widget__width-inherit btn_3d elementor-widget elementor-widget-button">
															<div class="elementor-widget-container">
																<div class=elementor-button-wrapper>
																	<a href="" class="elementor-button-link elementor-button elementor-size-sm" role=button>
																		<span class=elementor-button-content-wrapper>
																			<span class="elementor-button-icon elementor-align-icon-right">
																				<i aria-hidden=true class="fas fa-headset"></i>		
																			</span>
																			<span class=elementor-button-text>Đăng ký tư vấn</span>
																		</span>
																	</a>
								
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>



								<section class="elementor-section elementor-inner-section elementor-element elementor-element-7aa4d24 elementor-section-content-middle elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default">
									<div class="elementor-container elementor-column-gap-no">
										<div class=elementor-row>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c8692b6">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class=elementor-widget-wrap>
														<div class="elementor-element elementor-element-e345f80 elementor-view-default elementor-widget elementor-widget-icon">
															<div class="elementor-widget-container">
																<div class="elementor-icon-wrapper">
																	<a class="elementor-icon" href="/">
																		<i aria-hidden=true class="fas fa-home"></i>		
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d00a58c" data-id=d00a58c data-element_type=column>
												<div class="elementor-column-wrap elementor-element-populated">
													<div class=elementor-widget-wrap>
														<div class="elementor-element elementor-element-8fed47a elementor-nav-menu__align-justify elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id=8fed47a data-element_type=widget data-settings={&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;} data-widget_type=nav-menu.default>
															<div class=elementor-widget-container>
                                                            <nav role=navigation class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none">


<ul id="menu-1-8fed47a" class=elementor-nav-menu>
<?php
if(isset($primary_menu['data']) && !empty($primary_menu['data'])){
	foreach($primary_menu['data'] as $v1){
		echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-'.$v1['id'].'">';
		echo '<a href="'.$v1['url_link'].'" class="elementor-item upper">'.uh($v1['title']).'</a>';

		$childs = [];

		if(!empty($childs)){
			echo '<ul class="sub-menu elementor-nav-menu--dropdown">';
			foreach($childs['data'] as $v2){
				echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$v2['id'].'">';
				echo '<a href="'.$v2['url_link'].'" class="elementor-sub-item">'.uh($v2['title']).'</a>';
				echo '</li>';
			}
			echo '</ul>';
		}

		echo '</li>';
	}
}

?>
</ul></nav>
															<div
								class=elementor-menu-toggle role=button tabindex=0 aria-label="Menu Toggle" aria-expanded=false>
								<i
								class=eicon-menu-bar aria-hidden=true></i>
								<span
								class=elementor-screen-only>Menu</span></div>
								
								<nav
								class="elementor-nav-menu--dropdown elementor-nav-menu__container" role=navigation aria-hidden=true>
<?php
if(isset($primary_menu['data']) && !empty($primary_menu['data'])){
	echo '<ul id=menu-2-8fed47a class=elementor-nav-menu>';
	foreach($primary_menu['data'] as $v1){		
		
		$childs = [];
		echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-'.$v1['id'].'">';			
		echo '<a href="'.$v1['url_link'].'" class="elementor-item upper">'.uh($v1['title']).'</a>';

		if(!empty($childs)){
			echo '<ul class="sub-menu elementor-nav-menu--dropdown">';
			foreach($childs['data'] as $v2){
				echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$v2['id'].'">';
				echo '<a href="'.$v2['url_link'].'" class="elementor-sub-item">'.uh($v2['title']).'</a>';
				echo '</li>';
			}
			echo '</ul>';
		}

		echo '</li>';
		
		
	}
	echo '</ul>';
}
?>								
							</nav></div></div></div></div></div><div
								class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bdcc828" data-id=bdcc828 data-element_type=column><div
								class="elementor-column-wrap elementor-element-populated"><div
								class=elementor-widget-wrap><div
								class="elementor-element elementor-element-bbf44e2 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form" data-id=bbf44e2 data-element_type=widget data-settings={&quot;skin&quot;:&quot;full_screen&quot;} data-widget_type=search-form.default><div
								class=elementor-widget-container><form
								class=elementor-search-form role=search action="/search" method=get><div
								class=elementor-search-form__toggle>
								<i
								aria-hidden=true class="fas fa-search"></i>		<span
								class=elementor-screen-only>Search</span></div><div
								class=elementor-search-form__container>
								<input
								placeholder="Tìm kiếm..." class=elementor-search-form__input type=search name=s title=Search value><div
								class="dialog-lightbox-close-button dialog-close-button">
								<i
								class=eicon-close aria-hidden=true></i>
								<span
								class=elementor-screen-only>Close</span></div></div></form></div></div></div></div></div><div
								class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bb5f03d" data-id=bb5f03d data-element_type=column><div
								class=elementor-column-wrap><div
								class=elementor-widget-wrap></div></div></div></div></div></section>



								</div></div></div></div></div></section>




<section
class="elementor-section elementor-top-section elementor-element elementor-element-dd38680 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=dd38680 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}><div
class="elementor-container elementor-column-gap-no"><div
class=elementor-row><div
class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92c6547" data-id=92c6547 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap><section
class="elementor-section elementor-inner-section elementor-element elementor-element-7ad7609 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=7ad7609 data-element_type=section><div
class="elementor-container elementor-column-gap-default"><div
class=elementor-row><div
class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9dc45c4" data-id=9dc45c4 data-element_type=column><div
class="elementor-column-wrap elementor-element-populated"><div
class=elementor-widget-wrap>
<div class="elementor-element elementor-element-b4174a5 elementor-widget elementor-widget-image" data-id=b4174a5 data-element_type=widget data-widget_type=image.default>
<div class=elementor-widget-container>
<div class=elementor-image>
<a href="<?=$logo['url_link'];?>">
	<img src="<?=$logo['src'];?>" class="attachment-large size-large" alt loading=lazy srcset="" sizes="(max-width: 465px) 100vw, 465px">		
</a>
</div></div></div></div></div></div>

<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-088949b" data-id=088949b data-element_type=column>
	<div class="elementor-column-wrap elementor-element-populated">
		<div class=elementor-widget-wrap><div class="elementor-element elementor-element-f938c35 elementor-nav-menu--stretch elementor-nav-menu--indicator-classic elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id=f938c35 data-element_type=widget data-settings={&quot;layout&quot;:&quot;dropdown&quot;,&quot;full_width&quot;:&quot;stretch&quot;,&quot;toggle&quot;:&quot;burger&quot;} data-widget_type=nav-menu.default>
			<div class=elementor-widget-container><div
class=elementor-menu-toggle role=button tabindex=0 aria-label="Menu Toggle" aria-expanded=false>
<i
class=eicon-menu-bar aria-hidden=true></i>
<span class=elementor-screen-only>Menu</span></div>
<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role=navigation aria-hidden=true>
<?php
if(isset($primary_menu['data']) && !empty($primary_menu['data'])){
	echo '<ul id="menu-2-f938c35" class="elementor-nav-menu">';
	foreach($primary_menu['data'] as $v1){		
		
		$childs = [];
		echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-'.$v1['id'].'">';			
		echo '<a href="'.$v1['url_link'].'" class="elementor-item upper">'.uh($v1['title']).'</a>';

		if(!empty($childs)){
			echo '<ul class="sub-menu elementor-nav-menu--dropdown">';
			foreach($childs['data'] as $v2){
				echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$v2['id'].'">';
				echo '<a href="'.$v2['url_link'].'" class="elementor-sub-item">'.uh($v2['title']).'</a>';
				echo '</li>';
			}
			echo '</ul>';
		}

		echo '</li>';
		
		
	}
	echo '</ul>';
}
?>
</nav></div></div></div></div></div></div></div></section></div></div></div></div></div></section>
	</div>
</div>



<?php
$this->registerJs(<<<JS
$('body').addClass('home page-template page-template-elementor_header_footer page wp-custom-logo elementor-default elementor-template-full-width elementor-kit-47 elementor-page');
JS
);