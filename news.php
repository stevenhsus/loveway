<!DOCTYPE HTML>
<html lang="zh-tw">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalabe=0" />
	<meta name="author" content="網頁作者">
	<meta name="keywords" content="返老還童關懷委員會,溪頭">
	<meta name="description" content="返老還童關懷委員會">	
	<title>最新消息</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loveway.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="bookmark" href="images/favicon.ico" />
	<link rel="manifest" href="manifest.json">
	<link rel="stylesheet" href="css/animate.css">
</head>

<body>
	<!-- 導覽列 -->
	<?php include_once "nav.php";?>
		
	<!-- 側邊選單  -->
	<div class="container" style="padding:100px 0 20px 0">
		<div class="container">
			<div class="row bg-3">
				<div class="col-md-2" style="padding:15px 30px 0 0">
					<ul style="list-style-type: none">
						<li><a  class="rounded button button--winona button--border-thin button--text-thick button--inverted" data-text="最新消息" href="news.php" style="text-decoration:none;color:#25992D">最新消息</a></li>
<!-- 						<li><a  class="rounded button button--winona button--border-thin button--text-thick button--inverted" data-text="宣導公告" href="propagate.php" style="text-decoration:none;color:#25992D">宣導公告</a></li> -->
						<li><a  class="rounded button button--winona button--border-thin button--text-thick button--inverted" data-text="活動花絮" href="event.php" style="text-decoration:none;color:#25992D">活動花絮</a></li>
					</ul>
				</div>
				
				<!-- 訊息區  -->
				<div class="col-md-10" style="margin-bottom:100px">
					<h3 class="text-left text-center text-success"><i class="fas fa-crow"></i>&nbsp;最新消息</h3>
					<hr>
					<h5 class="text-success">2019-02-25<br>從愛出發-溪頭之旅　籌備會議2</h5>
					<p class="text-secondary">開會時間：107年2月25日（星期ㄧ）下午6時30分。<br>
											開會地點：協會</p>
					<hr>
					<h5 class="text-success">2018-12-07<br>從愛出發-溪頭之旅　籌備會議1</h5>
					<p class="text-secondary">開會時間：107年12月7日（星期五）下午6時30分。<br>
											開會地點：〔古早傳說〕飲食雜誌館–新莊市新莊區中正路649號</p>

				</div>
			</div>
		</div>
	</div>

	<?php
		include_once "footer.php";
	?>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-notify.min.js"></script>

	<!-- TOP btn -->
	<button class="btn btn-warning text-white position-fixed" style="bottom:130px; right:25px; display:none" id="topbtn">
		<i class="fas fa-arrow-up"></i>
	</button>	

	<!-- 啟動TOP btn -->
	<script>
		$(window).scroll(function(){
			//console.log("垂直捲動距離" + $(this).scrollTop() )

			if( $(this).scrollTop() > 66){
				$("#topbtn").fadeIn();
			}
			else{
				$("#topbtn").fadeOut();
			}
		})
		
		$("#topbtn").click(function(){
			//$(window).scrollTop(0);
			$("html").animate({scrollTop:0}, 300);
		})
	</script>
</body>

</html>