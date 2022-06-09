	<style type="text/css">
    	html{
			width:100%;
			margin:0px;
			padding:0;
			}
		body{
			margin:0px;
			padding:0;
			}
		div{
			margin:0px;
			padding:0;
			}
		
    </style>
    <script>
		
    	window.onload=function(){	
			
		//先获取各个页面的id
		var syy=document.getElementById("syy");//打开弹窗的js div的id
		var shy=document.getElementById("shy");//打开弹窗的js div的id
		var wxy=document.getElementById("wxy");//打开弹窗的js div的id
		var kby=document.getElementById("kby");//打开弹窗的js div的id
		var khy=document.getElementById("khy");//打开弹窗的js div的id
		var qty=document.getElementById("qty");//打开弹窗的js div的id
		//获取各个按钮的id
		var sy=document.getElementById("sy");//按钮的id
		var sh=document.getElementById("sh");//按钮的id
		var wx=document.getElementById("wx");//按钮的id
		var kb=document.getElementById("kb");//按钮的id
		var kh=document.getElementById("kh");//按钮的id
		var qt=document.getElementById("qt");//按钮的id
		//更改层数
		sy.onclick=function(){
  		 	syy.style.zIndex="1";//层数
			shy.style.zIndex="-1";//层数
			wxy.style.zIndex="-1";//层数
			kby.style.zIndex="-1";//层数
			khy.style.zIndex="-1";//层数
			qty.style.zIndex="-1";//层数
 		}
		sh.onclick=function(){
  		 	syy.style.zIndex="-1";//层数
			shy.style.zIndex="1";//层数
			wxy.style.zIndex="-1";//层数
			kby.style.zIndex="-1";//层数
			khy.style.zIndex="-1";//层数
			qty.style.zIndex="-1";//层数
 		}
		wx.onclick=function(){
  		 	syy.style.zIndex="-1";//层数
			shy.style.zIndex="-1";//层数
			wxy.style.zIndex="1";//层数
			kby.style.zIndex="-1";//层数
			khy.style.zIndex="-1";//层数
			qty.style.zIndex="-1";//层数
 		}
		kb.onclick=function(){
  		 	syy.style.zIndex="-1";//层数
			shy.style.zIndex="-1";//层数
			wxy.style.zIndex="-1";//层数
			kby.style.zIndex="1";//层数
			khy.style.zIndex="-1";//层数
			qty.style.zIndex="-1";//层数
 		}
		kh.onclick=function(){
  		 	syy.style.zIndex="-1";//层数
			shy.style.zIndex="-1";//层数
			wxy.style.zIndex="-1";//层数
			kby.style.zIndex="-1";//层数
			khy.style.zIndex="1";//层数
			qty.style.zIndex="-1";//层数
 		}
		qt.onclick=function(){
  		 	syy.style.zIndex="-1";//层数
			shy.style.zIndex="-1";//层数
			wxy.style.zIndex="-1";//层数
			kby.style.zIndex="-1";//层数
			khy.style.zIndex="-1";//层数
			qty.style.zIndex="1";//层数
 		}

		}
    </script>