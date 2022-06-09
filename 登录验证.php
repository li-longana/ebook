<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登录验证</title>
		<style type="text/css">
			.main{
				margin: 0 auto;
				width: 350px;
				height: 100px;
				background: cornflowerblue;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<?php
 
				$name=$_POST['userName'];
				$password=$_POST['userPassword'];
 
                                if($name==null||$password==null){
									alert('请输入正确的账号密码！');
					//header("location:登录.html");//直接打开该php文件，跳转到登录界面
				}
				
				
				require 'public_function.php';
				dbInit();
				$sql="SELECT *from user WHERE name='{$name}'AND psw='$password';";
				$userr=fetchRow($sql);
				
					if($name==$userr['name']){
						echo '登陆成功！欢迎你'.$name;
						//用cookie保存登录状态
						$user_id=$userr['user_id'];
						echo $_POST['记住密码'];
						echo $user_id;
						$id_m=uniqid();
						
						$tim_id=date('Ymd',time());
						$sql="update user set id_m='$id_m',tim_id='$tim_id' where user_id='$user_id'";
						query($sql);//将登录id码发回服务器
						//存入cookie登录状态
						if($_POST['记住密码']==1){
						setcookie("user_id","$user_id",time()+60*60*24*3);
						setcookie("id_m","$id_m",time()+60*60*24*3);
						setcookie("tim_id","$tim_id",time()+60*60*24*3);
						}else{
							setcookie("user_id","$user_id");
						setcookie("id_m","$id_m");
						setcookie("tim_id","$tim_id");
							}
						}else{
							echo '<script>
							alert("账号或密码错误！");
							
							</script>';
						}
					//history.go(-1);
		//		$db=dbInit();
		/*		$db->getConn();
			
					$db=@new mysqli('127.0.0.1','root','root');
					if ($db->connect_error)
					 die('链接错误: '. $db->connect_error);
					$db->select_db('ebook') or die('不能连接数据库');
			
					$sql='SELECT * FROM user WHERE name='."'{$name}'AND psw="."'$password';";
					$result=$db->query($sql);
					$num_users=$result->num_rows;//在数据库中搜索到符合的用户
					if($num_users!=0){//搜索到该用户
						echo "<h3>欢迎您&nbsp{$name}</h3>";
						echo "您上次的登录时间是：";
						$sqlTime='SELECT time FROM 用户登录表 WHERE name='."'{$name}';";
						$resultTime=$db->query($sqlTime);
						while($obj=$resultTime->fetch_object()){
							echo "{$obj->time}";
						}
						$sqlUpdate='UPDATE 用户登录表 SET time="'.date('y-m-d h:i:s',time()).'" WHERE name='."'{$name}';";
						$db->query($sqlUpdate);//更新登陆时间
					}
					else{
						echo "用户名或密码错误";
					}*/
			?>
		</div>
	</body>
</html>