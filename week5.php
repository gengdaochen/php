<?php
$month=$_GET["month"];
	switch ($month) {
	case "1月":
		echo "1月<br>";
		echo "<body background='http://www.misaki.rdy.jp/illust/kisetu/winter/title/sozai/1x103.jpg'>";
		break;
	case "2月":
		echo "2月<br>";
		echo "<body background='http://www.matsumoto-dental.biz/blog/images/2x303.jpg'>";
		break;
	case "3月":
		echo "3月<br>";
		echo "<body background='http://starclass-salon.com/blog/wp-content/uploads/2016/03/18968841095125.jpg'>";
		break;
	case "4月":
		echo "4月<br>";
		echo "<body background='http://ohsumi.sakura.ne.jp/osaki/wp/wp-content/uploads/2016/04/0545f138f0f61021efc3d3190d955015.jpg'>";
		break;
	case "5月":
		echo "5月<br>";
		echo "<body background='http://komae-kosodate.net/article/2016042100057/files/5.png'>";
		break;
	case "6月":
		echo "6月<br>";
		echo "<body background='http://japan.people.com.cn/NMediaFile/2015/0604/MAIN201506041344000384557796769.jpg'>";
		break;
	case "7月":
		echo "7月<br>";
		echo "<body background='http://misaki.rdy.jp/illust/kisetu/summer/title/sozai/7x203.jpg'>";
		break;
	case "8月":
		echo "8月<br>";
		echo "<body background='http://komae-kosodate.net/article/2016080100231/files/illust4292.png'>";
		break;
	case "9月":
		echo "9月<br>";
		echo "<body background='http://komae-kosodate.net/article/2016082200014/files/9.png'>";
		break;
	case "10月":
		echo "10月<br>";
		echo "<body background='http://www.2016年占い.jp/wp-content/uploads/10x103.jpg'>";
		break;
	case "11月":
		echo "11月<br>";
		echo "<body background='http://www.wanpug.com/illust/illust4298.png'>";
		break;

	default:
		echo "12月<br>";
		echo "<body background='http://www.ones-e.com/12x703.jpg'>";
		break;
		
}






$datetime = new Datetime("now",new DateTimeZone('Asia/Taipei')); 
$s_date="now";
$e_date="2017-12-31 24:0:0";

echo "現在的台灣時間:"."</br>";
echo $datetime->format("H:i:s")."</br>";
echo $datetime->format("T")."</br>";
echo "現在是幾年幾月幾日:"."</br>";
echo $datetime->format('Y-m-d')."</br>";






echo "2017年12月31日是世界末日，還距離現在相差:";
$second1=floor((strtotime($e_date)-strtotime($s_date)));
echo floor($second1/86400).'天';
echo floor(($second1%86400)/3600).'小時';
echo floor((($second1%86400)%3600)/60).'分鐘';
echo floor((($second1%86400)%3600)%60)."秒<br>";

?>








