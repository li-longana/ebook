<html>
<head>
<title>支持文件上传的HTML表单</title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="POST">
上传此文件：<input name="myfile" type="file" />
<input type="submit" value="提交上传" />
</form>
</body>
<?php
//echo sys_get_temp_dir().'<br/>';

echo '文件名:'.$_FILES['myfile']['name'].'<br/>';
echo '<br/>临时文件位置：'.$_FILES['myfile']['tmp_name'];
//$zzz='C:\Users\Shinelon\AppData\Roaming\Microsoft\Windows\Recent\\'.$_FILES['myfile']['name'];
//$ffff='D:\\';
echo $_FILES['myfile']['error'];
//move_uploaded_file($_FILES['myfile']['tmp_name'],$ffff);
//$dest_file = $upload_path.basename($_FILES['myfile']['name']);
//echo $upload_path.basename($_FILES['myfile']['name']);
//echo $dest_file;
$fff=$_FILES['myfile']['tmp_name'];
//echo $fff;
$file = fopen($fff, "r");
		 while(!feof($file)) {//开始分章节创建文件
		                $itemStr = fgets($file); //fgets()函数从文件指针中读取一行
						echo $itemStr.'<br/>';
						}
//if(move_uploaded_file($_FILES['myfile']['tmp_name'],$dest_file)){
 //         echo "文件已上传至服务器根目录的upload目录下";
		  
//}else{
//          echo "上传错误".$_FILES['myfile']['error'];
//}
?>
</html>