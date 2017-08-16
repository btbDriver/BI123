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
<div>

<!-- 名站导航 -->
<?php include("website.php") ?>
<!-- 定时任务 -->
<div id="timeDataDiv">
</div>
<script type="text/javascript">
     setInterval(function(){
            $("#timeDataDiv").load("timedata.php");
        }, 2000);
</script>

<div class="footer">&copy;2017 DriveCar 版权所有   联系我们Q：1234567890</div>
</html>