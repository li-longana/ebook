   <?php 	require 'public_function.php';
   			dbInit();
				require 'cookieyz.php';
				echo "<br/>"; 
				if($yzz['gm']!=1){
							header("location:index.php");
							}
							set_time_limit(0);//程序特殊，运行时间不设限制
							
		$name=$_POST['name'];
		$作者=$_POST['zz'];
		$类别=$_POST['类型'];
		$简介=$_POST['jj'];
		//$封面=$_POST['jpg'];
		$rktime=$_POST['时间'];
		$filePath = $_FILES['txt']['tmp_name'];
		$封面 = $_FILES['jpg']['tmp_name'];
		if(isset($name)&&isset($filePath)){//存在名字和路径则进行存储
			 $file = fopen($filePath, "r"); // 以只读的方式打开文件
		//xian先获取一个新的id，在写入数据库小说信息
		$sql="select * from sjj order by id desc limit 1; ";//倒序查询最后一个id
		$row=fetchRow($sql);
		//$sql="insert into `emp_info` (e_name,e_dept,date_of_birth,date_of_entry) values('$e_name','$e_dept','$edate_of_birth','$date_of_entry');";
		$sql="insert into sjj (id,name,作者,类别,简介,时间) values('".($row['id']+1)."','$name','$作者','$类别','$简介','$rktime');";
		query($sql);
		echo '小说id分配成功！id:'.($row['id']+1);
		//小说上传
		//$fff='';
		//move_uploaded_file($_FILES['jpg']['tmp_name'],$ffff);//保存临时文件
		//存储jpg封面
		$mb='jpg/'.($row['id']+1).'.jpg';
		if(file_exists($mb)||!file_exists($封面)){
			//目标文件不存在，或已在目标文件夹存在
			echo '目标文件不存在，或已在目标文件夹';
			}else{
			@rename($封面,$mb)?'封面成功':'失败';	
			}
		$i = 0;
		$zz=0;
		$cflj=$row['id']+1;
		
		//输出文本中所有的行，直到文件结束为止。
		//创建存放小说的文件夹
		$dir=iconv("utf-8","gbk","txt/$cflj");//路径
		if(!file_exists($dir)){
		    mkdir ($dir,0777,true);
		    echo '创建小说存放区域成功，开始分割章节：';
		    
		    while(!feof($file)) {//开始分章节创建文件
		        $itemStr = fgets($file); //fgets()函数从文件指针中读取一行
		        //echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$itemStr.'<br/>';
		        if(strstr($itemStr,'第')&&strstr($itemStr,'章')){
		            $zz++;
					$sql="update sjj set 章节='".$zz."' where id='".$cflj."';";
					query($sql);
		            echo '开始为第'.$zz.'章分配空间!<br/>';
					
		        }
				echo $itemStr.'<br/>';
		        $xrdz="txt/$cflj/$zz.txt";
		        $xr=fopen("$xrdz","a");
		        fwrite($xr,$itemStr)or die("无法打开文件!");
		        fclose($xr);
		        
		    }
		    echo '写入结束';
		    fclose($file);
		    
		    
		}
		else{
		    echo '需要创建的文件夹已存在！';
		}
			
		}else echo '请输入小说名和文件路径';
		
		 /*function readNLP(&$errorCode,&$errorMessage)
    {
        try{
            // $_SERVER["DOCUMENT_ROOT"]，获取当前运行脚本所在文档根目录。$filePath为.txt文件所在路径
            $filePath = $_SERVER["DOCUMENT_ROOT"] . "/txt/1.txt";
            $file = fopen($filePath, "r"); // 以只读的方式打开文件
            if(empty($file)){
                $errorCode = 201;
                $errorMessage = "file not found";
                return;
            }
            $i = 0;
            //输出文本中所有的行，直到文件结束为止。
            while(!feof($file)) {
                $itemStr = fgets($file); //fgets()函数从文件指针中读取一行
                $itemArray = explode("\t",$itemStr); // 将tab分割的各部分内容提取出来
                $itemArray = array_filter($itemArray); // 对itemArray进行校验
                $textDB = new Text();
                if($textDB->findItemByText($itemArray[3]) === false){ // 数据库中不存在该item，insert
                    $addResult = $textDB->addNewItem($itemArray[3],$itemArray[4]);
                    if($addResult === false){
                        $errorCode = 201;
                        $errorMessage = "insert new item failed";
                        return "currentIndex: " . $i . " , " . $itemArray[3];
                    }
                }
                ++$i;
            }
            fclose($file);
        }catch (Exception $exception){
            $errorCode = $exception->getCode();
            $errorMessage = $exception->getMessage();
        }
        return true;
    }*/
	?>
 