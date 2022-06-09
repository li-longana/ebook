<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
            </div>
<?php 
	require 'cssjs.php';
	require 'public_function.php';
	$id=$_GET['id'];
	$sql="select *from sjj  where sjj.id=$id ";
	$sjxx=fetchRow($sql);
	 ?>
<title>《<?php echo $sjxx['name'] ?>》书籍详情</title>
</head>

<body style="margin:0 auto;">
	<div style=" text-align:center;width:100%; color:#FFF; height:50px; font-size:40px; background:#999; float:left;">
    	<div style="width:9%; float:left;"><input type="button" style="width:100%; height:50px; background:#999; font-size:40px; color:#FFF;margin:0;
			padding:0; text-align:center;" value="<" onclick="javascript:history.go(-1)"></div>
        <div style=" width:75%; float:left"><?php echo $sjxx['name']; ?></div>
        <div style=" width:15%; float:left; font-size:18px;"><?php	
				require 'cookieyz.php'; ?></div>
    </div>
<?php $file_exists="jpg/".$sjxx['id'].".jpg";
	echo '<div style=" border-top:10px;"><div style=" border-left:10px;width:100px; height:125px; background:#999; float:left;">';
	if(file_exists($file_exists)){
			echo '<img src="jpg\\'.$sjxx['id'].'.jpg"; width="100px"; height="125px;"/>';
			}else{
			echo '<img src="jpg\0.jpg"; width="100px"; height="125px;"/>';
				};
		echo '</div>
    <div style=" float:left; background:#CCC; width:93.41%; height:125px;">';
		echo '&emsp;《'.$sjxx['name'].'》<br/>';
		echo '&emsp;作者:&emsp;'.$sjxx['作者'].'<br/>';
		echo '&emsp;类别:&emsp;'.$sjxx['类别'].'<br/>';
		
		echo '&emsp;更新时间:&emsp;'.$sjxx['时间'].'<br/>';
		echo '</div></div><br/>'; ?>
        
        
        <?php echo '&emsp;简介:&emsp;'.$sjxx['简介'].'<br/>'; ?>
        <div style=" width:100%; position:absolute; bottom:0px;">
        	<a href="章节目录.php?id=<?php echo $_GET['id']; ?>"><input type="button" style="background:#0F0; width:50%; height:500px; font-size:30px; " value="章节目录"  /></a>
            <a href="阅读器.php?id=<?php echo $_GET['id']; ?>"><input type="button" style="background:#0F0; width:49.5%; height:500px; font-size:30px; " value="开始阅读" /></a>
        </div>
       
</body>
</html>