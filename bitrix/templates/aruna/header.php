<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" rel="icon">
	<link href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">	
</head>
<body id="body">
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
<!--==========================
    Top Bar
  ============================-->
	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-info float-right">
			  			<ul class="nav-menu">
							<li class="menu-active">
								<a href="/o-kompanii/">О компании</a>
							</li>
							<li class="menu-active">
								<a href="/novosti/">Мир упаковки</a>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="#about">contact@aruna.com</a>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								+7 999 00 00 000
							</li>
			  			</ul>  
					</div>
				</div>
			</div>
		</div>
	</section>
<!--==========================
    Header
  ============================-->
	<header id="header">
    	<div class="container">
    		<div class="row">
				<div class="col-md-2">
					<div id="logo" class="pull-left">
        				<h1>
        					<a href="/" class="scrollto">АРУН<span>А</span></a>
        				</h1>
     				</div>
     			</div>
				<div class="col-md-10">
      				<nav id="nav-menu-container" >
						<div id="top-menu">
        					<div id="top-menu-inner">
								<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_aruna", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top2level",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu_aruna"
	),
	false
);?>
					        </div>
						</div>
					</nav>
				</div> 
			</div>
		</div>
	</header>