<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理网站</title>
</head>

<body>
<?php			require 'public_function.php';
 				dbInit();
				require 'cookieyz.php';
				if($yzz['gm']!=1){
							header("location:index.php");
							}
				echo '<br/>';
				echo '<br/>&nbsp;&nbsp;<a>欢迎管理员登陆<br/><br/><br/></a>';
				if($yzz['gm']==1){
							echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="上传书籍.php"><input type="button" value="上传书籍"/></a><br/><br/>';
							echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="书籍.php"><input type="button" value="书籍信息"/></a><br/><br/>';
							echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="用户.php"><input type="button" value="管理用户"/></a><br/><br/>';
				}else{ header("location:index.php");} ?>
                
</body>
</html>