<?php
$name=@$_GET["name"];
$email=@$_GET["email"];
$tel=@$_GET["tel"];
$gender=@$_GET["gender"];
$bir=@$_GET["bir"];
$list=@$_GET["list"];
$list_country=@$_GET["list_country"];
$c1=@$_GET["c1"];
$c2=@$_GET["c2"];
$c3=@$_GET["c3"];
$c4=@$_GET["c4"];
$c5=@$_GET["c5"];
$c6=@$_GET["c6"];
$poster=@$_GET["poster"];
$internet=@$_GET["internet"];
$fb=@$_GET["fb"];
$others=@$_GET["others"];
$mes=@$_GET["mes"];

echo "姓名:" .$name."<br/>";
echo "<br/>";
echo "性別:" .$gender."<br/>";
echo "<br/>";
echo "生日:"  .$bir."<br/>";
echo "<br/>";
echo "電話:" .$tel. "<br/>";
echo "<br/>";
echo "信箱:" .$email ."<br/>";
echo "<br/>";
echo "年級".$list."<br/>";
echo "<br/>";
echo "住址:" .$list_country .$c1."鄉鎮市區".$c2."道路/街名".$c3."巷".$c4."弄".$c5."號".$c6."樓"."<br/>";
echo "<br/>";
echo "訊息來源:".$poster;
echo $internet=="" ? "":"&".$internet;
echo $fb=="" ? "":"&".$fb;
echo $others=="" ? "":"&".$others;
echo "<br/>";
echo "<br/>";
echo "想說的話:" .$mes. "<br/>";


?>