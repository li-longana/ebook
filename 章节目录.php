<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require 'public_function.php';
	dbInit();
	require 'cookieyz.php';
		if(isset($_GET['ys'])){
			$ys=$_GET['ys'];
			}else{$ys=1;}
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select *from sjj  where sjj.id=$id ";
		$xsxx=fetchRow($sql);
		echo "<title>《".$xsxx['name']."》章节目录</title>";
		}
	
	 ?>
</head>

<body style="margin:0 auto">
<?php echo '<h1>'.$xsxx['name'].'</h1><br/>';
		echo '<div><div style=" border-top:10px;"><div style=" border-left:10px;width:100px; height:125px; background:#999; float:left;">';
		 $file_exists="jpg/".$xsxx['id'].".jpg";
		 if(file_exists($file_exists)){
			echo '<img src="jpg\\'.$xsxx['id'].'.jpg"; width="100px"; height="125px;"/>';
			}else{
			echo '<img src="jpg\0.jpg"; width="100px"; height="125px;"/>';
				};
		 
	echo '</div>
    <div style=" background:#CCC; width:93.41%; height:125px;margin:0 auto;">';
    	
		//书名 作者简介 类型时间
		echo '&emsp;《'.$xsxx['name'].'》<br/>';
		echo '&emsp;作者:&emsp;'.$xsxx['作者'].'<br/>';
		echo '&emsp;类别:&emsp;'.$xsxx['类别'].'<br/>';
		echo '&emsp;简介:&emsp;'.$xsxx['简介'].'<br/>';
		echo '&emsp;更新时间:&emsp;'.$xsxx['时间'].'<br/>';   echo '</div></div><br/>';
		echo '<h1>章节目录</h1>';
		echo '<div style="margin:0 auto;">';
			$zys=ceil($xsxx['章节']/20);
		echo '总页数'.$zys.'页<br/>';
		if($ys>=1&&$ys<=$zys){
			}else $ys=$zys; ?>
            <a href="章节目录.php?id=<?php echo $id ?>&ys=1">首页</a>&nbsp;&nbsp;
         <a href="章节目录.php?id=<?php echo $id ?>&ys=<?php if($ys>1) {echo ($ys-1);}else echo 1; ?>">上一页</a>&nbsp;&nbsp;
         <a href="章节目录.php?id=<?php echo $id ?>&ys=<?php if($ys<$zys) echo ($ys+1) ?>">下一页</a>&nbsp;&nbsp;
         <a href="章节目录.php?id=<?php echo $id ?>&ys=<?php echo $zys; ?>">尾页</a>&nbsp;&nbsp;
         <br /><form enctype="multipart/form-data" action="章节目录.php?" method="get"><input type="hidden" name="id" value="<?php echo $id; ?>" />&nbsp;&nbsp;跳转：<input placeholder="请输入页数：1~<?php echo $zys; ?>" type="text" name="ys" /><input type="submit" value="GO" />
         </form>
            
            
<?php	echo '<table border="1" style=" border-color:#0CF; border-collapse:collapse;margin:0 auto">';	
		echo '第'.$ys.'页<br/>';
		
		for($a=($ys*20)-20;$a<=($ys*20)&&$a<=$xsxx['章节'];$a++){//$xsxx['章节']
			echo '<tr></tr>';
			echo '<td style="width:10%;background:#6FF;">&nbsp;&nbsp;<a href="阅读器.php?id='.$id.'&zj='.$a.'">第'.$a.'章</a>&nbsp;&nbsp;</td>';
			$filePath='txt/'.$_GET['id'].'/'.$a.'.txt';
			if(file_exists($filePath)){
			$file = fopen($filePath, "r");
			echo '<td style="width:89%; background:#5ff"><a href="阅读器.php?id='.$id.'&zj='.$a.'">'.$itemStr = fgets($file).'</a><br/>';//取出一行
		    fclose($file);
			echo '</td>';
				}
			}
		echo '</table></div>';


 ?>
 		 
</body>
</html>