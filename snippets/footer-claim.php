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
		<a class="footer-claim-btn" onclick="W.open('feedback', {create_method:'clone'})">Написать нам</a>
		<?php if (function_exists('echo_creator')) echo_creator();?>
	</div>

<!--<table width="100%" border="0" cellpadding="1" cellspacing="10">
    <tbody>
        <tr>
            <td width="40%">
            <div class="footer-claim-caption-left">
                <h4 style="text-align: left;">&#169;&nbsp;ООО &quot;ЕПС&quot;</h4>
                <a href="<?=WB_URL?>" target="_blank"><img src="http://eps-m.ru/media/img/logo-f.png" height="70px" hspace="5" alt="" /></a>
            </div></td>
            <td width="40%">
            <div class="footer-claim-caption-left"><h4>Мы в соцсетях</h4>
            </div></td>
            <td width="20%" style="text-align: center;" rowspan="3"><a class="footer-claim-btn" href="/pages/kontakty.php">Написать нам</a></td>
        </tr>
        <tr>
            <td>
            <div class="footer-claim-caption-left"><p>Строительная компания</p>
            </div></td>
            <td rowspan="2"><p><a href="http://vk.com/" target="_blank"><img src="http://vagvicts.bget.ru/mts/media/socseti/vk.png" width="40" height="40" hspace="5" alt="" /></a><a href="http://ok.ru/" target="_blank"><img src="http://vagvicts.bget.ru/mts/media/socseti/ok.png" width="40" height="40" hspace="5" alt="" /></a><a href="https://www.instagram.com/" target="_blank"><img src="http://vagvicts.bget.ru/mts/media/socseti/inst.png" width="40" height="40" hspace="5" alt="" /></a></p></td>
        </tr>
        <tr>
            <td><div class="footer-claim-caption-left"><p>Телефон: 8 (86132) 5-03-48, +7 928 430 15 45, +7 961 582 39 23</br>Адрес: ул. Киевская, 6, офис 4, Ейск, Краснодарский край, 353690<p></div></td>
        </tr>
    </tbody>
</table>-->
<!--		<div class="footer-claim-caption-left">
			<h4>ООО "Медтехсервис"</h4>
			<p>Продажа медицинского оборудования</p>
		</div>
		<div class="footer-claim-caption-right">
			<a class="footer-claim-btn" href="/pages/kontakty.php">Написать нам</a>
		</div>
-->
		<div class="clearfix"> </div>
	<!--</div>-->
</div>

<!-- end footer-claim -->