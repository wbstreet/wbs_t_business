<!-- Start selecting settlement -->

<div style="display:inline-block;" id="main_settl">
    <span class="button_ss">Ваш город: <span id="settlementTitle"></span></span>
    <div style="position:absolute;width:250px;z-index:100;">
        <input class='form_ss' data-prev="" type='text' style="width:100%;">
        <div class="suggestions"></div>
    </div>
</div>

<script>
var settlement = <?php echo isset($_COOKIE['settlement']) ? preg_replace('/[^0-9]/', '', $_COOKIE['settlement']) : 'undefined'; ?>;

function setSetlT(settlement_id, self) {
    var res = self.id2settlementObj(settlement)
    document.getElementById('settlementTitle').textContent = self.obj2full_name(res, true)
    self.sets['button_ss'].title = self.obj2full_name(res) + " (нажмите, чтобы изменить)";
}
 
function set_global_settlement(settlement_id, self) {
    // очищаем текущее значение
    var date = new Date();
    date.setDate(date.getDate() - 1);
    document.cookie = 'settlement=; expires='+date.toUTCString()+'; path=/'

    // устанавливаем текщее значение
    if (settlement_id !== null) {
            date.setDate(date.getDate() + 365);
            document.cookie = 'settlement='+settlement_id+'; expires='+date.toUTCString()+'; path=/'
    }

    window.location = window.location;
}

settlement_obj = new Settlement(settlement, {
        'func_setSettlement': setSetlT,
        'func_after_setSettlement': set_global_settlement,
        'own_tag_inner':true,
        'tag':document.getElementById('main_settl')
});
settlement_obj.first_result = '<div onclick="settlement_obj.setSettlement(null, settlement_obj); window.location = window.location;">Вся Россия</div>';
</script>

<!-- End selecting settlement -->

<!--
    Standard for editing:
        <div id='estate_settlement'></div>
        <script>
                new Settlement(1, { tag: document.getElementById("estate_settlement")});
        </script>
-->