<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<div class="sites">
    <dl>
        龙虎榜 (每隔一分钟跟新一次)
    </dl>

    <?php
        function my_sort($a,$b) {
            if ($a->mrate_percent == $b->mrate_percent) return 0;
            return ($a->mrate_percent < $b->mrate_percent) ? -1 : 1;
        }

        $url='http://data.bter.com/api2/1/marketlist';
        $html = file_get_contents($url);
        $obj=json_decode($html);

        // echo $obj->data;
        $dataArray = $obj->data;
        for ($i = 0; $i < count($dataArray); $i++) {
            $dataItem = $dataArray[$i];
            $dataItem->mrate_percent = (double)$dataItem->rate_percent;
        }
        usort($dataArray, "my_sort");

        for ($i = count($dataArray) - 1; $i >= 0; $i--) {
            $dataItem = $dataArray[$i];
            echo "<dl class=\"alt\">";
            echo "<dt>{$dataItem->symbol}</dt>";
            echo "<dd>{$dataItem->name_cn}</dd>";

            if ($dataItem->trend == "down") {
                echo "<dd>趋势：跌</dd>";
            } else {
                echo "<dd>趋势：涨</dd>";
            }
            if ($dataItem->mrate_percent >= 0) {
                echo "<dd>价格: <font color=\"#FF0000\">{$dataItem->rate}</font></dd>";
                echo "<dd>日涨幅: <font color=\"#FF0000\">{$dataItem->mrate_percent}%</font></dd>";
            } else {
                echo "<dd>价格: <font color=\"#00FF00\">{$dataItem->rate}</font></dd>";
                echo "<dd>日涨幅: <font color=\"#00FF00\">{$dataItem->mrate_percent}%</font></dd>";
            }

            echo "<dd></dd>";
            echo "<dd></dd>";
            echo "<dd></dd>";
            echo "</dl>";
        }
    ?>

</div>