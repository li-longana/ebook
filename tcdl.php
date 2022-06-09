<?php 
	echo date('',time());
	if(1==$_GET['id']){
		
		setcookie("user_id","$user_id",time()+60*60*24*-7);
	setcookie("id_m","$id_m",time()+60*60*24*-7);
	setcookie("tim_id","$tim_id",time()+60*60*24*-7);
	echo '<script >
	self.location=document.referrer;</script>';//返回上一页并刷新
		
		}
?>