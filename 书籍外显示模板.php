
<?php  
echo '<h2>本站最近更新</h2>';
		$sql='select * from sjj order by 时间 DESC limit 10;';
		//按照时间倒序，查找10个最近更改过的小说。
		$ssj=array();
		$ssj=fetchAll($sql);
		if(!empty($ssj)){
			
		
        
 foreach($ssj as $v){
			 
	echo '<a href="书籍简介模板.php?id='.$v['id'].'"><div style=" border-top:10px;"><div style=" border-left:10px;width:100px; height:125px; background:#999; float:left;">';
		 $file_exists="jpg/".$v['id'].".jpg";
		 if(file_exists($file_exists)){
			echo '<img src="jpg\\'.$v['id'].'.jpg"; width="100px"; height="125px;"/>';
			}else{
			echo '<img src="jpg\0.jpg"; width="100px"; height="125px;"/>';
				};
		 
	echo '</div>
    <div style=" float:left; background:#CCC; width:93.41%; height:125px;">';
    	
		//书名 作者简介 类型时间
		echo '&emsp;《'.$v['name'].'》<br/>';
		echo '&emsp;作者:&emsp;'.$v['作者'].'<br/>';
		echo '&emsp;类别:&emsp;'.$v['类别'].'<br/>';
		echo '&emsp;简介:&emsp;'.$v['简介'].'<br/>';
		echo '&emsp;更新时间:&emsp;'.$v['时间'].'<br/>';   echo '</div></div></a><br/>';}}?>
