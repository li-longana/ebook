<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站内书籍信息</title><style type="text/css">

.div{ margin:0 auto}
.body{ margin:0 auto}</style>
<?php	require 'public_function.php';
 				dbInit();
				require 'cookieyz.php';
				echo '<br/>';
				if($yzz['gm']!=1){
							header("location:index.php");
							} 
		
		$sql='select * from sjj;';
		$row=fetchAll($sql);
							
		?>
</head>

<body><h1 align="center" >站内书籍信息</h1>	<table border="1" style=" border-color:#0CF; border-collapse:collapse;margin:0 auto">

			<tr style="background:#CCC">
            	<th>ID</th><th>封面</th><th>书名</th><th>作者</th><th>类别</th><th>简介</th><th>更新时间</th><th>章节</th><th>操作</th>
            </tr>
            <?php //遍历结果集获取用户信息
			if(!empty($row)){
				foreach($row as $v){
		 ?>
            <tr>
            	<td>&nbsp;&nbsp;<?php echo $v['id']?>&nbsp;&nbsp;</td>
            	<td style="width:100px;"><?php echo '<a href="书籍简介模板.php?id='.$v['id'].'"><div style=" border-top:10px;"><div style=" border-left:10px;width:100px; height:125px; background:#999; float:left;">';
		 $file_exists="jpg/".$v['id'].".jpg";
		 if(file_exists($file_exists)){
			echo '<img src="jpg\\'.$v['id'].'.jpg"; width="100px"; height="125px;"/>';
			}else{
			echo '<img src="jpg\0.jpg"; width="100px"; height="125px;"/>';
				};?></td>
                <td>&nbsp;&nbsp;《<?php echo $v['name']?>》&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['作者']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['类别']?>&nbsp;&nbsp;</td>
                <td style="width:50%;">&nbsp;&nbsp;<?php echo $v['简介']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php  echo $v['时间']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php  echo $v['章节']?>&nbsp;&nbsp;</td>
                <td><div>&nbsp;<input type="button" value="编辑">&nbsp;&nbsp;<input type="button" value="删除"/>&nbsp;</div></td>
            </tr>
            <?php }?>
            <?php }else{?>
            	<tr><td>暂无用户信息！</td></tr>
            <?php }?>
		</table>
        
        
     
</body>
</html>