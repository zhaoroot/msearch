
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="all" />
<meta name="author" content="zhaowenyu" />
<meta name="keywords" content="baidu,google,yahoo,sougou,搜索引擎,搜索,引擎,多引擎,赵文宇,zhaowenyu,快速搜索">
<meta name="description" content="这时一个可以一次使用多个搜索引擎搜索内容的工具">
<title>多引擎搜索</title>
<link rel="stylesheet" href="./css/add.css">
</head>
<body>
<?php 
     $keyword = $_GET['keyword'];
     $yahoo_url = "https://search.yahoo.com/search?p=$keyword";
     $yahoo_result =  file_get_contents($yahoo_url);
     file_put_contents('yahoo_result.html', $yahoo_result);
?>
<table class="tablecss">
	<tr class="trcss">
	<!--baidu start-->
		<td class="tdcss">
			<?php 
			echo '<iframe   width="100%" height="100%"  src="http://www.baidu.com/s?wd=' . $keyword . '"></iframe>';
			 ?>
		</td><!--baidu end-->
		<td class="tdcss">
			<?php 
				echo '<iframe  width="100%"  height="100%" src="yahoo_result.html"></iframe>';
			 ?>
		</td><!--yahoo end-->
		<td class="tdcss">
			<?php
			echo '<iframe width="100%" height="100%"  src="http://s.taobao.com/search?q=' . $keyword . '"></iframe>';
		?>
		</td><!--taobao end-->
	</tr>
</table>	
</body>
</html>