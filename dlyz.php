<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录界面</title>
        
		<style type="text/css">
			.main{
				margin: 0 auto;
				padding: 10px;
				width: 300px;
				
				background: cornflowerblue;
			}
			.leftbar{
				width: 30%;
				padding-bottom: 15px;
				display: inline-block;
				text-align: right;
			}
			.bottom{
				padding-bottom: 15px;
			}
		</style>
         

       
			<?php
				echo '<script type="text/javascript">
					 function dl(){';
 				require 'public_function.php';
				$name=$_POST['userName'];
				$password=$_POST['userPassword'];
 
                if($name==null||$password==null){
					echo '}</script>';
									//echo 'alert("请输入正确的账号密码！");';
					//header("location:dlyz.php");//直接打开该php文件，跳转到登录界面
				}else{								
					dbInit();
					$sql="SELECT *from user WHERE name='{$name}'AND psw='$password';";
					$userr=fetchRow($sql);
				
					if($name==$userr['name']){
						//echo '登陆成功！欢迎你'.$name;
						//用cookie保存登录状态
						$user_id=$userr['user_id'];
						//echo $user_id;
						$id_m=uniqid();
						//echo $id_m;
						$tim_id=date('Ymd',time());
						$sql="update user set id_m='$id_m',tim_id='$tim_id' where user_id='$user_id'";
						query($sql);//将登录id码发回服务器
						//存入cookie登录状态
						if($_POST['记住密码']==1){
							setcookie("user_id","$user_id",time()+60*60*24*7);
							setcookie("id_m","$id_m",time()+60*60*24*7);
							setcookie("tim_id","$tim_id",time()+60*60*24*7);
						}else{
							setcookie("user_id","$user_id");
							setcookie("id_m","$id_m");
							setcookie("tim_id","$tim_id");
						}
						echo '}</script>';
						echo '<meta http-equiv="refresh" content="0;url=index.php">';
					//echo 'window.loaction.href="www.book.book";';
					//header("location:index.php");
					}else{
						echo '
						alert("账号或密码错误！");
						}</script>
						';
					}
				}
						
?>
			
        
        
	</head>
	<body>

		<form action="dlyz.php" method="post">
			
			<div id="main" class="main">
				<h3>
					请输入用户名
				</h3>
				<div>
					<label><div class="leftbar">用户名：</div><input type="text" name="userName" /></label>
					<label><div class="leftbar">密码：</div><input type="password" name="userPassword" /></label>
				</div>
				<div class="bottom">
					<div class="leftbar"></div>
					<table width="200">记住密码：
					  <tr>
					    <td><label>
					      <input type="radio" name="记住密码" value="0" id="记住密码_0" checked>
					      不记住</label></td>
				      </tr>
					  <tr>
					    <td><label>
					      <input type="radio" name="记住密码" value="1" id="记住密码_1">
					      记住我一周</label></td>
				      </tr>
				  </table>
					
				</div>
				<div class="bottom">
					<div class="leftbar"></div><input type="submit" name="submit" value="登录" onClick="dl" />
				</div>
				<br/><a href="注册账号.php">没有账号？点这里注册</a><br/><br/><a href="index.php">不登陆了，点这里游客访问</a>
			</div>
			
		</form>	
       
	</body>
    
</html>
