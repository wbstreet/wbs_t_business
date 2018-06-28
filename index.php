<?php
// Must include code to stop this file being accessed directly
if (!defined('SYSTEM_RUN')) {header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found'); echo '404 File not found'; flush(); exit;}

//Lets fetch some content for the slider from given page_ids:

include(WB_PATH.'/templates/'.TEMPLATE."/config_template.php");
if (file_exists(WB_PATH."/modules/wbs_core/core/functions.php")) include(WB_PATH."/modules/wbs_core/core/functions.php");


$aObj = null;
if (file_exists(WB_PATH."/modules/wbs_portal/lib.class.portal.php")) {
    include(WB_PATH."/modules/wbs_portal/lib.class.portal.php");
    $_clsModPortal = new _ModPortal('wbs_portal', null, null);
    $aObj = $_clsModPortal->_get_obj();
}


$slider_page_ids = '3,4,5,6';
$slider_image_base = WB_URL.'/media/slides/slide'; // added: number + .jpg

$top_grids_page_ids = '7,8,9';

$topics_picture_directory = WB_URL.'/media/grids';	


/* Из стандартного шаблона */   

if (!function_exists('LangPadeId')) {function LangPadeId(){return $iPageId;}}
$iMultiLang = 0;$sMultiLang = ''; if (function_exists('language_menu')){$sMultiLang = language_menu('png',false); $iMultiLang = intval(!empty($sMultiLang) ? 1 : 0);}

$sPageLang    = strtolower(isset($wb->page) || ($wb instanceof frontend) ? $wb->page['language'] : 'EN');


?><!DOCTYPE html>
<html lang="<?php echo $sPageLang; ?>">
<head>
<?php
if(function_exists('simplepagehead')) {
	simplepagehead(); 
} else { ?>
    <title><?php page_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else { echo 'utf-8'; }?>" />
    <meta name="description" content="<?php echo $aObj ? $aObj['seo_description'] : page_keywords(); ?>" />
    <meta name="keywords" content="<?php echo $aObj ? $aObj['seo_keywords'] : page_keywords(); ?>" />
    <?php }
     if(function_exists('register_frontend_modfiles')) {
	    register_frontend_modfiles('css');
	    register_frontend_modfiles('jquery');
	    register_frontend_modfiles('js');
    } ?>

    <script src="<?php echo TEMPLATE_DIR; ?>/js/jquery.min.js"></script>
    <link href="<?php echo TEMPLATE_DIR; ?>/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo TEMPLATE_DIR; ?>/editor.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo TEMPLATE_DIR; ?>/template.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo TEMPLATE_DIR; ?>/mobile.css" rel="stylesheet" type="text/css" media="screen" />


    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />

    <?php if(function_exists('wbs_core_include')) wbs_core_include(['functions.js', 'windows.js', 'windows.css', 'effects.css']); ?>
    <?php require_once(WB_PATH.'/include/captcha/captcha.php'); ?>
</head>

<script>
    var WB_URL = '<?php echo WB_URL ?>';
    var PAGE_ID = '<?php echo PAGE_ID ?>';
</script>

<?php 
	ob_start();		
	page_content(1);
	$page_content_1 = ''.ob_get_contents();
	ob_end_clean();
	
	if(defined('TOPIC_BLOCK2') AND TOPIC_BLOCK2 != '') { 
		 	$page_content_2 = TOPIC_BLOCK2; 
	} else {
		ob_start();
		page_content(2);
		$page_content_2 = ''.ob_get_contents();
		ob_end_clean();
	}
	
	if($page_content_2 == '') {$page_content_2 = '<img class="img-responsive" src="'.TEMPLATE_DIR.'/img/about.jpg" title="'.WEBSITE_TITLE.'" alt="" />';}
	
	
	ob_start(); 
	//show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL, '<li class="[class]"><a href="[url]">[menu_title]</a>', "</li>", '<ul>', '</ul>', true, '<ul class="dropdown-menu" role="menu">');
//	show_menu2(1, SM2_ROOT, SM2_START, SM2_TRIM, '<li class="[class]"><a href="[url]">[menu_title]</a>', "</li>", '<ul>', '</ul>', true, '<ul>');
//	$topnav = ob_get_contents();
//	$topnav = str_replace('menu-current','active',$topnav);
	ob_end_clean();
	
?>
<body>

<!-- header -->
<div class="header" id="topnav">
	<div class="container">	
		<!-- logo -->
		<div class="logo" id="logo">
			<a href="<?php echo WB_URL; ?>"><img height="100px" src="<?php echo WB_URL; ?>/media/common_img/logo.png" title="<?php echo WEBSITE_TITLE; ?>" alt="" /></a>
		</div>
		<div class="logo-right">
                    <?php if(trim($sMultiLang)!=''){ echo $sMultiLang; } ?>
		    <p><img style="margin-bottom: 4px;" height="35px" src="<?php echo WB_URL; ?>/media/common_img/phone.png">+7 (999)  999-99-99</p>
		    <p><img style="margin-bottom: 4px;" height="35px" src="<?php echo WB_URL; ?>/media/common_img/phone.png">+7 (999) 888-88-88</p>
		</div>

          	<div class="top-nav" id="topnav2">
			<span class="menu"> </span>						
			<!--<?php //echo $topnav; ?>-->
			<?php	include('snippets/nav.php');	?>
		</div>
		<!-- top-nav -->
		<!-- script-for-nav -->
		<script>
			$(document).ready(function(){
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(300);
				});
			});
		</script>
		<!-- script-for-nav -->
		<div class="clearfix"> </div>
	</div>
</div><!-- end header -->

<?php  

if (!isset($page_id)) { //extra for WB.at
	include('snippets/bigslider.php');
	include('frontteaser.php');
	include('snippets/2col-content.php');
	include('snippets/top-grids.php');
} else {
	echo show_breadcrumbs($sep = ' - ',$level = 1, $links = true, $depth = -1, $title = '<a href="'.WB_URL.'">Главная</a> - ');
	include('frontteaser.php');
	include('snippets/2col-content.php');
	include('snippets/top-grids.php');
}

//include('snippets/bottomgrid_topics.php'); 
//include('snippets/footer-grids.php'); 
include('snippets/footer-claim.php'); 

echo "<div class='windowBody' id='feedback' data-text_title='Написать нам'>";
include(__DIR__.'/snippets/form.php');
echo "</div>";

?>		
        <script src="<?php echo TEMPLATE_DIR; ?>/js/bootstrap.min.js"></script>

<script>
window.onscroll = function () {
    /*var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    var tn = document.getElementById('topnav');
    h = parseInt(getComputedStyle(document.getElementById('topnav2')).marginTop);
    if (scrolled > h) {scrolled = h; document.getElementById('topnav2').style.position = 'fixed';}
    else {document.getElementById('topnav2').style.position = 'static';}
    tn.style.top = '-'+scrolled+'px';*/
}
    <?php if ($config_template['icon_submenu']) { ?>
   /* подстановка картинок в подпункты меню */
    var li = document.querySelectorAll('.teaser-menu>li');
    for (var i=0; i<li.length; i++) {
        li[i].innerHTML = "<img style='height: 50px ;cursor:pointer;' data-toggle='dropdown' src='<?=WB_URL?>/media/menu/"+li[i].dataset.id+".png'><br>" + li[i].innerHTML;
        //li[i].querySelector('a').setAttribute('aria-expanded', false);
    }
    var li = document.querySelectorAll('.teaser-menu2');
    for (var i=0; i<li.length; i++) {
        li[i].areExpand=true;
    }
	<?php } ?>
    let g = new Gallery(document.querySelectorAll('.fm'));
    if (W.zi) W.zi.add(document.getElementById('topnav'), 'top');
</script>

<style>
   <?php if (!$config_template['icon_submenu']) { ?>
   /* подпункты меню выравниваются вертикально */
	.top-nav ul li {
        display: block;
        border-bottom: 1px solid #cccbcb;
	}
	.teaser-menu>li {
      width: 100%;
      text-align: left;
       margin-top: 0;
	}
	
	.dropdown-menu {
	    min-width: 300px;
	}
	
	.teaser-menu {
       width: initial;
	}
	.navbar-nav > li > .dropdown-menu {
    padding-bottom: 0;
    }
    .top-nav ul ul li a {
        padding-bottom: 5px;
        padding-top: 10px;
        display: block !important;
    }
   <?php } ?>   

   <?php if ($config_template['fixed_desktop_menu']) { ?>
    .header {position: fixed; top: 0;}
    body {margin-top: 200px;}
    @media (max-width: 790px) {
        .header {position: static;}
    }
    <?php } ?>
</style>

<?php register_frontend_modfiles_body('js'); ?>

	</body>
</html>