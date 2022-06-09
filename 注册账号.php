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
				width: 40%;
				padding-bottom: 15px;
				display: inline-block;
				text-align: right;
			}
			.bottom{
				padding-bottom: 15px;
			}
		</style>
 
			
        
        
	</head>
	<body>

		<form action="注册账号.php" method="post">
			
			<div id="main" class="main">
				<h3>
					请输入用户名
				</h3>
				<div>
					<label><div class="leftbar">请输入用户名：</div><input type="text" name="userName" /></label>
					<label><div class="leftbar">请输入密码：</div><input type="password" name="userPassword" /></label>
                    <label><div class="leftbar">请确认密码：</div><input type="password" name="userPassword2" /></label>
				</div>
				<div class="bottom">
					<div class="leftbar"></div>
					
					
				</div>
				<div class="bottom">
					<div class="leftbar"></div><input type="submit" name="zhuce" value="注册" />
				</div>
			<br/><a href="dlyz.php">已经有账号了？点这里登录</a><br/><br/><a href="index.php">不登陆了，点这里游客访问</a>	
			</div>
			
		</form>	
        
       
	</body>
    <?php require 'public_function.php';
			dbInit();
			if(isset($_POST['userName'])||isset($_POST['userPassword'])||isset($_POST['userPassword2'])){
				$user=$_POST['userName'];
				$psw1=$_POST['userPassword'];
				$psw2=$_POST['userPassword2'];
				//查询用户名是否存在
				$sql="select * from user where name='$user'";
				$wro1=fetchRow($sql);
				if(isset($wro1['name'])){
					echo '用户名已存在，请换一个！';
					}else{
					$sql="insert into user (name,psw) values('$user','$psw1');";
					query($sql);
					$sql="select * from user where name='$user'";
					$wro1=fetchRow($sql);echo '&nbsp;&nbsp;用户'.$user.'注册成功！';
					echo '&nbsp;&nbsp;用户id：'.$wro1['user_id'].'&nbsp;&nbsp;';
						
					}
			}else{
				echo '请输入正确的用户名、密码、确认密码、';
					
					
				}
			
			 ?>
    
</html>
