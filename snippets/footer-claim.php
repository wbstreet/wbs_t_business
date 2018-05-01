<?php
if(!defined('WB_URL')) { header('Location: ../../../index.php'); exit(0); }
?>
<!-- footer-claim -->
<!--<div style="height:236px; background: url('<?=WB_URL?>/media/img/bg.png');"></div>-->
<div class="footer-claim-caption">
	<!--<div class="container">-->
    <div class="footer-claim-caption-left">
        <h3 style="color:#fff; padding-left:10px; font-weight: 200;">СТРОИТЕЛЬНАЯ КОМПАНИЯ</h3><br>
        <p>Телефон: 8 (86132) 1-1-1, +7 928 111 11 11, +7 111 111 11 11</br>Адрес: ул. Киевская, 6, офис 4, минск, Краснодарский край, 353690<p>
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