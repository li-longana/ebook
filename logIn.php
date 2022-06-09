<?php
//插入连接数据库的相关信息
require 'public_function.php';
dbInit();

$error_msg = "";
//判断用户是否已经设置cookie，如果未设置$_COOKIE['user_id']时，执行以下代码
if(!isset($_COOKIE['user_id'])){
if(isset($_POST['submit'])){//判断用户是否提交登录表单，如果是则执行如下代码
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$user_username = mysqli_real_escape_string($dbc,trim($_POST['username']));
$user_password = mysqli_real_escape_string($dbc,trim($_POST['password']));

if(!empty($user_username)&&!empty($user_password)){
//MySql中的SHA()函数用于对字符串进行单向加密
            $query = "SELECT user_id, username FROM mismatch_user WHERE username = '$user_username' AND "."password = SHA('$user_password')";
//用用户名和密码进行查询
            $data = mysqli_query($dbc,$query);
//若查到的记录正好为一条，则设置COOKIE，同时进行页面重定向
            if(mysqli_num_rows($data)==1){
$row = mysqli_fetch_array($data);
setcookie('user_id',$row['user_id']);
setcookie('username',$row['username']);
$home_url = 'login.php';
header('Location: '.$home_url);
            }else{//若查到的记录不对，则设置错误信息
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
        }else{
$error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
    }
}else{//如果用户已经登录，则直接跳转到已经登录页面
    $home_url = 'login.php';
header('Location: '.$home_url);
}
?>
<html>
    <head>
        <title>Mismatch - Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Msimatch - Log In</h3>
        <!--通过$_COOKIE['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
        <?php
if(empty($_COOKIE['user_id'])){
echo '<p class="error">'.$error_msg.'</p>';
        ?>
        <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件 -->
        <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset  style="width:250px;">
                <legend>Log In</legend>

                <label for="username">Username:</label>
                <!-- 如果用户已输过用户名，则回显用户名 -->
                <input type="text" id="username" name="username"
                value="<?php if(!empty($user_username)) echo $user_username; ?>" />
                <br/>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"/>
            </fieldset>    
            <br/>
            <input type="submit" value="Log In" name="submit"/>
        </form>
        <?php
        }
        ?>
    </body>
</html>