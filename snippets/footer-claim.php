<?php
if(!defined('WB_URL')) { header('Location: ../../../index.php'); exit(0); }
?>
<!-- footer-claim -->
<!--<div style="height:236px; background: url('<?=WB_URL?>/media/img/bg.png');"></div>-->
<div class="footer-claim-caption">
	<!--<div class="container">-->
    <div class="footer-claim-caption-left">
        <a href="<?=WB_URL?>" target="_blank"><img src="http://eps-m.ru/media/img/logo-f.png" height="50px" hspace="5" alt="" /></a>
        <h3 style="color:#fff; padding-left:10px; font-weight: 200;">СТРОИТЕЛЬНАЯ КОМПАНИЯ</h3><br>
        <p>Телефон: 8 (86132) 5-03-48, +7 928 430 15 45, +7 961 582 39 23</br>Адрес: ул. Киевская, 6, офис 4, Ейск, Краснодарский край, 353690<p>
    </div>
    <div class="footer-claim-caption-right">
                <?php if (defined('CUSTOMSETTINGS_COUNTERS')) echo CUSTOMSETTINGS_COUNTERS; ?>
                <a class="footer-claim-btn" onclick="W.open('feedback', {create_method:'clone'})">Написать нам</a>
		<?php if (function_exists('echo_creator')) echo_creator();?>
	</div>

	<div class="clearfix"> </div>
	<!--</div>-->
</div>

<!-- end footer-claim -->