<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传书籍</title>
</head>

<body>	<?php require 'public_function.php';
				require 'cookieyz.php'; 
				if($yzz['gm']!=1){
							header("location:index.php");
							}
		?>
	<form enctype="multipart/form-data"  action="读取.php" method="post">
    <label>书籍名称：<input type="text" name="name" /></label><br /><br />
    <label>书籍作者：<input type="text" name="zz" /></label><br /><br />
    <label>书籍类型：<select name="类型">
    					<option id="类型" value="神话">神话</option>
                        <option id="类型" value="武侠">武侠</option>
                        <option id="类型" value="科幻">科幻</option>
                        <option id="类型" value="恐怖">恐怖</option>
                        <option id="类型" value="其他">其他</option>
                        
    				</select></label><br /><br />
    <label>书籍简介：<input type="text" name="jj" /></label><br /><br />             
    小说正文txt文件路径：<input name="txt" type="file" /><br /><br />
    小说封面jpg文件路径：<input name="jpg" type="file" /><br /><br />
    更新时间<input type="date" name="时间" /><br /><br />
    <input type="submit" value="上传文件" />
    </form>

</body>
</html>