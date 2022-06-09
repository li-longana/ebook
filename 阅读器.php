<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	require 'public_function.php';
	dbInit();
	require 'cookieyz.php';
		if(isset($_GET['zj'])){
			$zj=$_GET['zj'];
			}else{$zj=0;}
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select *from sjj  where sjj.id=$id ";
		$xsxx=fetchRow($sql);
		echo "<title>《".$xsxx['name']."》章节目录</title>";
		}else{header("location:index.php");}
	
	 ?>
     
</head>

<body><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;<a href="阅读器.php?id=<?php echo $id; ?>&zj=<?php if($zj>0&&$zj<=$xsxx['章节']){echo ($zj-1);}else echo 0; ?>">上一章</a>
&nbsp;&nbsp;<a href="阅读器.php?id=<?php echo $id; ?>&zj=<?php if($zj>=0&&$zj<$xsxx['章节']){echo ($zj+1);}else{echo $xsxx['章节'];} ?>">下一章</a>
&nbsp;&nbsp;<a href="章节目录.php?id=<?php echo $id; ?>">目录</a>&nbsp;&nbsp;
<h1>

<?php 	echo '&nbsp;&nbsp;第'.$zj.'章&nbsp;&nbsp;';
			$filePath='txt/'.$id.'/'.$zj.'.txt';
			if(file_exists($filePath)){
			$file = fopen($filePath, "r");
			echo $itemStr = fgets($file).'<br/>';
			//取出一行
			} ?></h1>
            <div>
            <?php 
			while(!feof($file)) {//开始分章节创建文件
		        $itemStr = fgets($file); //fgets()函数从文件指针中读取一行
		        //echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$itemStr.'<br/>';
		        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$itemStr.'<br/>';
		        }
		        
		    echo '本章结束';
		    fclose($file);
		    
			
			?>
            </div>
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;<a href="阅读器.php?id=<?php echo $id; ?>&zj=<?php if($zj>0&&$zj<=$xsxx['章节']){echo ($zj-1);}else echo 0; ?>">上一章</a>
&nbsp;&nbsp;<a href="阅读器.php?id=<?php echo $id; ?>&zj=<?php if($zj>=0&&$zj<$xsxx['章节']){echo ($zj+1);}else{echo $xsxx['章节'];} ?>">下一章</a>
&nbsp;&nbsp;<a href="章节目录.php?id=<?php echo $id; ?>">目录</a>&nbsp;&nbsp;

</body>
</html>