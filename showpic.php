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
 $SQLSTR="select filepic,filetype from imageTB where filename='"
         . $_REQUEST["filename"] . "'";
 //
 $cur=mysqli_query($dbnum, $SQLSTR);
 //取出資料
 $data=mysqli_fetch_array( $cur );
 
//設定網頁資料格式
header("Content-Type: $data[1]");
// 輸出圖片資料
echo base64_decode($data[0]);
?>