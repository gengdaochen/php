<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
<?php
$link = @mysqli_connect('localhost','root','a1043323','php2017');
if($link){
	echo "DB Connected!";
}
else{
	echo "DB Connection Failed";
}


$uname=@$_POST["uname"];
$aco=@$_POST["input1"];
$pwd=@$_POST["input2"];
$gender=@$_POST["gender"];
$city=@$_POST["input3"];
$phone=@$_POST["input4"];
$interest=@$_POST["mycheckbox"];
$list=@$_POST["list"];

$sql2="INSERT INTO hw0413 (name,aco,pwd,gender,city,phone,interest,list) VALUES ('$uname','$aco','$pwd','$gender','$city','$phone','$interest','$list')";
$result=mysqli_query($link,$sql2);
$result=mysqli_query($link,"SELECT * FROM hw0413");

echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["aco"];
	echo "</td><td>";
	echo $row["pwd"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["city"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["interest"];
	echo "</td><td>";
	echo $row["list"];
	echo "</td>";
}
echo "<table>";

mysqli_close($link);
?>
</body>
</html>
