<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>圖片檔案上傳</title>
</head><BODY><H3>圖檔存入相關資訊：<HR></H3>

<?php
      echo "<BLOCKQUOTE>";
      echo "檔案名稱：" . $_FILES["upfile"]["name"] . "<BR>";
      echo "檔案大小：" . $_FILES["upfile"]["size"] . "<BR>";
      echo "檔案類型：" . $_FILES["upfile"]["type"] . "<BR>";
      echo "暫存檔名：" . $_FILES["upfile"]["tmp_name"] . "<BR>";
      if ( $_FILES["upfile"]["size"] > 0 ) 
        {
         //開啟圖片檔
         $file = fopen($_FILES["upfile"]["tmp_name"], "rb");
         // 讀入圖片檔資料
         $fileContents = fread($file, filesize($_FILES["upfile"]["tmp_name"])); 
         //關閉圖片檔
         fclose($file);

         // 圖片檔案資料編碼
         $fileContents = base64_encode($fileContents);



		$IP = "localhost";
		$user = "root";
		$password = "";
		$DB = "imageDB";
				
		
		//連結MySQL Server
		$dbnum=mysqli_connect($IP,$user,$password);
		//選取資料庫
		mysqli_select_db($dbnum, $DB);
         //組合查詢字串
         $SQLSTR="Insert into imageTB (filename,filesize,filetype,filepic) values('"
                  . $_FILES["upfile"]["name"] . "',"
                  . $_FILES["upfile"]["size"] . ",'"
                  . $_FILES["upfile"]["type"] . "','"
                  . $fileContents . "')";
         //將圖片檔案資料寫入資料庫
         if(!mysqli_query($dbnum, $SQLSTR)==0)
           {
            echo "您所上傳的檔案已儲存進入資料庫<a href=\"showpic.php?filename="
                 . $_FILES["upfile"]["name"] . "\">"
                 . $_FILES["upfile"]["name"] . "</a>";
           }
         else
           {
            echo "您所上傳的檔案無法儲存進入資料庫";
           } 
        }
      else
        {
         echo "圖片上傳失敗";
        }
      echo "</BLOCKQUOTE>";
?>

<a href="listImage.php">所有照片</a>, <a href="index.html">上傳照片</a>

<HR></BODY></HTML>