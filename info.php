<?php
$okCoinBtc = ""

function getBtcFromOkcoin() {
    $url='https://www.okcoin.cn/api/v1/ticker.do?symbol=btc_cny';
    $html = file_get_contents($url);
    // echo $html;
    // $obj=json_decode($html);
    // printf($obj->ticker->buy)
    $okCoinBtc = $html
}
?>