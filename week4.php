<?php

$input1=$_GET["input1"];
$input2=$_GET["input2"];
$input3=$_GET["input3"];
$city=$_GET["city"];
$gender=$_GET["gender"];
$interest=$_GET["interest"];
$list=$_GET["list"];
$tel=$_GET["tel"];



echo "您輸入的名字是:".$input1."<br/>";
echo "您輸入的帳號是:".$input2."<br/>";
echo "您輸入的密碼是:".$input3."<br/>";
if(is_numeric($input2)&&is_numeric($input3)){

	echo $input2*$input3."<br/>";
}
else{

	echo "請輸入數字，請回上一頁重新輸入!<br/>";
	echo "<a href='week4.html'>back</a><br/>";
}

echo "您選填的性別是:".$gender."<br/>";
if($gender=="male"){
	
	echo "你的性別是男性<br/>";
	echo "<body bgcolor='yellow'>";
}
else{

	echo "妳的性別是女性<br/>";
	echo "<body bgcolor='pink'>"; 

}

echo "你居住的城市是:".$city."<br/>";

echo "您的電話是:".$tel."<br/>";

echo "你的興趣:";
foreach($interest as $data){
	echo " ".$data;
}
echo "<br/>";
for($i=0;$i<count($interest);$i++){
	echo $interest[$i];
}
echo "<br/>";

echo "你的年級是:".$list."<br/>";



?>