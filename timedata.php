<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bi123-专业虚拟币导航网站</title>
    <style type="text/css">@import "./css/main.css"</style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

    <!--<script type="text/javascript" src="./js/jquery-1.9.0.js"></script>-->
</head>
<div class="sites">
    <dl>
        <dt>比特币(BTC)</dt>
    </dl>

    <dl class="alt">
        <?php
            $url='https://www.okcoin.cn/api/v1/ticker.do?symbol=btc_cny';
            $html = file_get_contents($url);
            $obj=json_decode($html);

            $last = round((double)$obj->ticker->last, 2);
            $high = round((double)$obj->ticker->high, 2);
            $low = round((double)$obj->ticker->low, 2);
            $buy = round((double)$obj->ticker->buy, 2);
            $sell = round((double)$obj->ticker->sell, 2);
            $vol = round((double)$obj->ticker->vol, 2);

            echo "<dt><a href=\"https://www.okcoin.cn/\" target=\"_blank\">OKCoin</a></dt>";
            echo "<dd>最新: <font color=\"#FFAA33\">{$last}</font></dd>";
            echo "<dd>最高: <font color=\"#FFAA33\">{$high}</font></dd>";
            echo "<dd>最低: <font color=\"#FFAA33\">{$low}</font></dd>";
            echo "<dd>买一: <font color=\"#FFAA33\">{$buy}</font></dd>";
            echo "<dd>卖一: <font color=\"#FFAA33\">{$sell}</font></dd>";
            echo "<dd>量: <font color=\"#FFAA33\">{$vol}</font></dd>";
        ?>
    </dl>
    <dl>
        <?php
            $url='https://data.btcchina.com/data/ticker?market=btccny';
            $html = file_get_contents($url);
            $obj=json_decode($html);

            $last = round((double)$obj->ticker->last, 2);
            $high = round((double)$obj->ticker->high, 2);
            $low = round((double)$obj->ticker->low, 2);
            $buy = round((double)$obj->ticker->buy, 2);
            $sell = round((double)$obj->ticker->sell, 2);
            $vol = round((double)$obj->ticker->vol, 2);

            echo "<dt><a href=\"https://www.btcchina.com/\" target=\"_blank\">比特币中国</a></dt>";
            echo "<dd>最新:<font color=\"#FFAA33\">{$last}</font></dd>";
            echo "<dd>最高:<font color=\"#FFAA33\">{$high}</font></dd>";
            echo "<dd>最低:<font color=\"#FFAA33\">{$low}</font></dd>";
            echo "<dd>买一:<font color=\"#FFAA33\">{$buy}</font></dd>";
            echo "<dd>卖一:<font color=\"#FFAA33\">{$sell}</font></dd>";
            echo "<dd>量:<font color=\"#FFAA33\">{$vol}</font></dd>";
        ?>
    </dl>
    <dl class="alt">
        <?php
            $url='https://api.btctrade.com/api/ticker?coin=btc';
            $html = file_get_contents($url);
            $obj=json_decode($html);

            $last = round((double)$obj->last, 2);
            $high = round((double)$obj->high, 2);
            $low = round((double)$obj->low, 2);
            $buy = round((double)$obj->buy, 2);
            $sell = round((double)$obj->sell, 2);
            $vol = round((double)$obj->vol, 2);

            echo "<dt><a href=\"http://www.btctrade.com\" target=\"_blank\">BTCTrade</a></dt>";
            echo "<dd>最新:<font color=\"#FFAA33\">{$last}</font></dd>";
            echo "<dd>最高:<font color=\"#FFAA33\">{$high}</font></dd>";
            echo "<dd>最低:<font color=\"#FFAA33\">{$low}</font></dd>";
            echo "<dd>买一:<font color=\"#FFAA33\">{$buy}</font></dd>";
            echo "<dd>卖一:<font color=\"#FFAA33\">{$sell}</font></dd>";
            echo "<dd>量:<font color=\"#FFAA33\">{$vol}</font></dd>";
        ?>
    </dl>

    <dl>
                <dt>莱特币(LTC)</dt>
            </dl>

            <dl class="alt">
                <?php
                    $url='https://www.okcoin.cn/api/v1/ticker.do?symbol=ltc_cny';
                    $html = file_get_contents($url);
                    $obj=json_decode($html);

                    $last = round((double)$obj->ticker->last, 2);
                    $high = round((double)$obj->ticker->high, 2);
                    $low = round((double)$obj->ticker->low, 2);
                    $buy = round((double)$obj->ticker->buy, 2);
                    $sell = round((double)$obj->ticker->sell, 2);
                    $vol = round((double)$obj->ticker->vol, 2);

                    echo "<dt><a href=\"https://www.okcoin.cn/\" target=\"_blank\">OKCoin</a></dt>";
                    echo "<dd>最新: <font color=\"#FFAA33\">{$last}</font></dd>";
                    echo "<dd>最高: <font color=\"#FFAA33\">{$high}</font></dd>";
                    echo "<dd>最低: <font color=\"#FFAA33\">{$low}</font></dd>";
                    echo "<dd>买一: <font color=\"#FFAA33\">{$buy}</font></dd>";
                    echo "<dd>卖一: <font color=\"#FFAA33\">{$sell}</font></dd>";
                    echo "<dd>量: <font color=\"#FFAA33\">{$vol}</font></dd>";
                ?>
            </dl>
            <dl>
                <?php
                    $url='https://data.btcchina.com/data/ticker?market=ltccny';
                    $html = file_get_contents($url);
                    $obj=json_decode($html);

                    $last = round((double)$obj->ticker->last, 2);
                    $high = round((double)$obj->ticker->high, 2);
                    $low = round((double)$obj->ticker->low, 2);
                    $buy = round((double)$obj->ticker->buy, 2);
                    $sell = round((double)$obj->ticker->sell, 2);
                    $vol = round((double)$obj->ticker->vol, 2);

                    echo "<dt><a href=\"https://www.btcchina.com/\" target=\"_blank\">比特币中国</a></dt>";
                    echo "<dd>最新:<font color=\"#FFAA33\">{$last}</font></dd>";
                    echo "<dd>最高:<font color=\"#FFAA33\">{$high}</font></dd>";
                    echo "<dd>最低:<font color=\"#FFAA33\">{$low}</font></dd>";
                    echo "<dd>买一:<font color=\"#FFAA33\">{$buy}</font></dd>";
                    echo "<dd>卖一:<font color=\"#FFAA33\">{$sell}</font></dd>";
                    echo "<dd>量:<font color=\"#FFAA33\">{$vol}</font></dd>";
                ?>
            </dl>
            <dl class="alt">
                <?php
                    $url='https://api.btctrade.com/api/ticker?coin=ltc';
                    $html = file_get_contents($url);
                    $obj=json_decode($html);

                    $last = round((double)$obj->last, 2);
                    $high = round((double)$obj->high, 2);
                    $low = round((double)$obj->low, 2);
                    $buy = round((double)$obj->buy, 2);
                    $sell = round((double)$obj->sell, 2);
                    $vol = round((double)$obj->vol, 2);

                    echo "<dt><a href=\"http://www.btctrade.com\" target=\"_blank\">BTCTrade</a></dt>";
                    echo "<dd>最新:<font color=\"#FFAA33\">{$last}</font></dd>";
                    echo "<dd>最高:<font color=\"#FFAA33\">{$high}</font></dd>";
                    echo "<dd>最低:<font color=\"#FFAA33\">{$low}</font></dd>";
                    echo "<dd>买一:<font color=\"#FFAA33\">{$buy}</font></dd>";
                    echo "<dd>卖一:<font color=\"#FFAA33\">{$sell}</font></dd>";
                    echo "<dd>量:<font color=\"#FFAA33\">{$vol}</font></dd>";
                ?>
            </dl>

    <dl>
        <p align="center">更新于2s前 | 技术支持：DriverCar</p>
    </dl>
</div>