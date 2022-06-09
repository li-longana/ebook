<?php	
				if(isset($_COOKIE['user_id'])){
					//判断cookie是否存在
					$user_id=$_COOKIE['user_id'];
					$id_m=$_COOKIE['id_m'];
					$tim_id=$_COOKIE['tim_id'];
					$sql="SELECT *from user WHERE user_id='{$user_id}';";
					$yzz=fetchRow($sql);
					if($_COOKIE['id_m']==$yzz['id_m']&&$_COOKIE['tim_id']<=$yzz['tim_id']+(7*1000*60*60*24)){
						echo '<a href="index.php">欢迎来到Ebook书城！</a><a href=""><input  type="button" value="'.$yzz['name'].'"/></a>&nbsp;&nbsp;<a href="tcdl.php?id=1"><input  type="button" value="退出登录"/></a>';
						if($yzz['gm']==1){
							echo '<a href="管理网站.php"><input type="button" value="管理网站"/></a>';
							}
						}else{ $yzz['gm']=0; echo '<a href="index.php">欢迎来到Ebook书城！</a><a href="dlyz.php"><input  type="button" value="登录"/></a>&nbsp;&nbsp;  <a href="注册账号.php"><input  type="button" value="注册"/></a>';}
					}else{ $yzz['gm']=0;echo '<a href="index.php">欢迎来到Ebook书城！</a><a href="dlyz.php"><input  type="button" value="登录"/></a>&nbsp;&nbsp;  <a href="注册账号.php"><input  type="button" value="注册"/></a>';} ?>