<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>所以照片</title>
</head>

<body>
<h1>所以照片</h1>
<a href="index.html">上傳照片</a>
<?php
$IP = "localhost";
$user = "root";
$password = "";
$DB = "imageDB";


//連結MySQL Server
$dbnum=mysqli_connect($IP,$user,$password);
//選取資料庫
mysqli_select_db($dbnum, $DB);

 //組合查詢字串
 $SQLSTR="select filename from imageTB";
 //
 $cur=mysqli_query($dbnum, $SQLSTR);
 
//取出資料
echo "<table border=1>";
echo "<th>檔案名稱</th><th>照片</th>";
while($data=mysqli_fetch_array($cur)){
	echo "<tr>";
	echo "<td>$data[0]</td>";
	echo "<td><a href=\"showpic.php?filename=$data[0]\"><img src='showpic.php?filename=$data[0]' width=200/></a></td>";
	echo "</tr>";	
	
}
echo "</table>";
?>

</body>
</html>
