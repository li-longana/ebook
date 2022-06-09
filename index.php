<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ebook书城</title>
<?php require 'public_function.php';  ?>
	<?php require 'cssjs.php';?>


</head>

<body>
	<?php require 'divt.php';?>
    
     <div style="width:100%; height:800px; background:#FFF;margin:0 auto;">
    	<div id="syy" style=" z-index:1; position: absolute;top:230px; width:100%; height:860px; background:#FFF;">
       <?php require '书籍外显示模板.php';?> 
       <div style=" width:100%; position:absolute; bottom:0px;">
        	email:930614591@qq.com
        </div>
       </div>
    	
        
        
        <div id="shy" style=" z-index:-1;position: absolute;top:230px;width:100%; height:100%; background:#FFF;">
       
       <?php require '神话模板.php';?> </div>
        
        
        
    	<div id="wxy" style=" z-index:-1;position: absolute;top:230px;width:100%; height:100%; background:#FFF;">
        
       <?php require '武侠模板.php';?> </div>
        
        
        
    	<div id="kby" style=" z-index:-1;position: absolute;top:230px;width:100%; height:100%; background:#FFF;">
        
       <?php require '恐怖模板.php';?> </div>
        
        
        
    	<div id="khy" style=" z-index:-1;position: absolute;top:230px;width:100%; height:100%; background:#FFF;">
        
       <?php require '科幻模板.php';?> </div>
        
        
        
    	<div id="qty" style=" z-index:-1;position: absolute;top:230px;width:100%; height:100%; background:#FFF;">
        
       <?php require '其他模板.php';?> </div>
        
    </div>
</body>
</html>