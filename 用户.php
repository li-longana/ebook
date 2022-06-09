<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户</title><style type="text/css">

.div{ margin:0 auto}
.body{ margin:0 auto}</style>
<?php	require 'public_function.php';
 				dbInit();
				require 'cookieyz.php';
				echo '<br/>';
				if($yzz['gm']!=1){
							header("location:index.php");
							} 
		
		$sql='select * from user;';
		$row=fetchAll($sql);
							
		?>
</head>

<body><h1 align="center" >站内用户账号信息</h1>	<table border="1" style=" border-color:#0CF; border-collapse:collapse;margin:0 auto">

			<tr style="background:#CCC">
            	<th>id</th><th>用户名</th><th>密码</th><th>登录验证码</th><th>最近登录时间</th><th>权限</th><th>操作</th>
            </tr>
            <?php //遍历结果集获取用户信息
			if(!empty($row)){
				foreach($row as $v){
		 ?>
            <tr>
            
            	<td>&nbsp;&nbsp;<?php echo $v['user_id']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['name']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['psw']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['id_m']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $v['tim_id']?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php  if($v['gm']==1){echo '管理员';}else{echo '普通用户';}?>&nbsp;&nbsp;</td>
                <td><div>&nbsp;<input type="button" value="编辑">&nbsp;&nbsp;<input type="button" value="删除"/>&nbsp;</div></td>
            </tr>
            <?php }?>
            <?php }else{?>
            	<tr><td>暂无用户信息！</td></tr>
            <?php }?>
		</table>
        
        
     
</body>
</html>