<?php
//数据库连接函数
function dbInit(){
	//声明编码格式
	header('content-type:text/html;charset=utf-8');
	//连接数据库
	$link=mysqli_connect('localhost','root','root','ebook');
	//判断数据库连接是否成功
	if(!$link){
		die('数据库连接失败'.mysqli_error());
		}
	//设置字符集 选择数据库
	mysqli_select_db($link,'php');//选择数据库
	mysqli_set_charset($link,'utf8');//设置字符集
	}
	
	
//sql语句执行函数
function query($sql){
	$link=mysqli_connect('localhost','root','root','ebook');
	if($result=mysqli_query($link,$sql)){
		//执行成功
		return $result;
	}else{
		//执行失败，显示错误信息便于调试程序
		echo 'SQL执行失败！，错误的SQL语句为：<br>';
		echo $sql,'<br>';
		echo '错误代码为：',mysqli_errno(),'<br>';
		echo '错误的信息为：',mysqli_error(),'<br>';
	}
	}
	
	
//封装处理结果集中多条数据的函数
function fetchAll($sql){
	//执行query函数
	if($result=query($sql)){
		//执行成功，遍历结果集
		$rows=array();
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$rows[]=$row;
			}
			//shi释放结果集资源
			mysqli_free_result($result);
			return $rows;
		}else{
			//执行失败
			return flase;
		}
	}
	
	
//封装处理结果集中只有一条的数据的函数
function fetchRow($sql){
	//执行query函数
	if($result=query($sql)){
		//从结果集获取一次数据即可
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row;
	}else{
		return false;
	}
}


//封装安全性过滤函数
function safeHandle($data){
	//过滤有HTML的字符串
	$data=htmlspecialchars($data);
	//转义字符串中的SQL语句特殊字符
	//$data=mysqli_real_escape_string($data);
	//返回处理后数据
	return $data;
}
 ?>