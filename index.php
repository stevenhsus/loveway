<?php
    include "base.php";
?>
<!DOCTYPE HTML>
<html lang="zh-tw">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalabe=0" />
	<meta name="author" content="網頁作者">
	<meta name="keywords" content="返老還童關懷委員會,溪頭">
	<meta name="description" content="返老還童關懷委員會">
	<title>返老還童關懷委員會</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/loveway.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="bookmark" href="images/favicon.ico"/>
	<link rel="manifest" href="manifest.json">
</head>

<body>
	
	<!-- 導覽列 -->
	<?php include_once "nav.php";?>

	<!-- 載入畫面 -->
 	<div class="bg-white" id="loading" style="width: 100vw; height: 100vh; position: fixed; z-index:1029; display: table" >
			<div class="d-table-cell d-table align-middle text-center">
					<svg class="lds-comets" width="50%" height="50%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><g transform="scale(-1,1) translate(-100,0)"><g transform="rotate(340.979 50 50)">
							<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" values="360 50 50;240 50 50;120 50 50;0 50 50" keyTimes="0;0.333;0.667;1" dur="1s" keySplines="0.7 0 0.3 1;0.7 0 0.3 1;0.7 0 0.3 1" calcMode="spline"></animateTransform>
							<path fill="#334fff" d="M91,74.1C75.6,98,40.7,102.4,21.2,81c11,9.9,26.8,13.5,40.8,8.7c7.4-2.5,13.9-7.2,18.7-13.3 c1.8-2.3,3.5-7.6,6.7-8C90.5,67.9,92.7,71.5,91,74.1z"></path>
							<path fill="#9933ff" d="M50.7,5c-4,0.2-4.9,5.9-1.1,7.3c1.8,0.6,4.1,0.1,5.9,0.3c2.1,0.1,4.3,0.5,6.4,0.9c5.8,1.4,11.3,4,16,7.8 C89.8,31.1,95.2,47,92,62c4.2-13.1,1.6-27.5-6.4-38.7c-3.4-4.7-7.8-8.7-12.7-11.7C66.6,7.8,58.2,4.6,50.7,5z"></path>
							<path fill="#ff3339" d="M30.9,13.4C12,22.7,2.1,44.2,7.6,64.8c0.8,3.2,3.8,14.9,9.3,10.5c2.4-2,1.1-4.4-0.2-6.6 c-1.7-3-3.1-6.2-4-9.5C10.6,51,11.1,41.9,14.4,34c4.7-11.5,14.1-19.7,25.8-23.8C37,11,33.9,11.9,30.9,13.4z"></path></g></g></svg>
			</div>
		
	</div>

	<!-- 輪播區 -->
	<div class="container-fluid bg-light shadow">	
	<div class="container" style="padding:81px 0 20px 0">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner rounded">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>步  道</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>大 學 池</h1>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h2>溪頭青年活動中心</h2>
					</div>
				</div>
			</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
	</div>

	<!-- 主題區  -->
	<div class="container-fluid">
		<div class="container" >
			<div class="row" style="padding:20px 0 20px 0">	
				<div class="col-12 col-lg-7 pictext">
					<div class="d-table h-100">
						<div class="d-table-cell align-middle text-center py-2">
							<h1 style="color:purple">從愛出發 - 溪頭之旅</h1>
							<br>
							<h3 style="color:red">愛心起航 ; 讓夢飛翔</h3>
						</div>
					</div>							
				</div>
			
				<div class="col-12 col-lg-5 picimg">
					<img src="images/forlove.png" class="w-100 rounded">
				</div>
			</div>
		</div>
	</div>

	<!-- 訊息區  -->
	<div class="container-fluid" style="padding:20px 0 20px 0">
		<div class="container">
			<h3 class="text-center text-success"><i class="fas fa-crow"></i> &nbsp;最新消息</h3>
			<!-- 使用後台資料庫 <?php  
			// LIMIT 5 顯示幾則消息
 				$sql="select * from news where sh=1 ORDER BY `on_date` DESC LIMIT 5";
				$rows=$pdo->query($sql)->fetchAll();
				foreach($rows as $row){

							$time = strtotime($row['on_date']);

							$newformat = date('Y-m-d',$time);

						echo '<hr>';
						echo '<h5 class="text-success">'.$newformat.'</h5>';
						echo '<a class="text-secondary" href="news.php">'.mb_substr($row['title'],0,50,'utf8').'</a>';
				}     
         	 ?> -->   
			<hr>
			<h5 class="text-success">2019-02-25<br>從愛出發-溪頭之旅　籌備會議2</h5>
			<p class="text-secondary">開會時間：107年2月25日（星期ㄧ）下午6時30分。<br>
			 						開會地點：協會</p>

				<div class="row" style="padding:20px 0 20px 0">	
					<div class="col-12 col-lg-6 picimg">
						<img src="images/dateing2_1.jpg" class="w-100 rounded">
					</div>
					<div class="col-12 col-lg-6 pictext py-2">
						<img src="images/dateing2_2.jpg" class="w-100 rounded">					
					</div>
				</div>
				<div class="row" style="padding:20px 0 20px 0">					
					<div class="col-12 col-lg-6 picimg">
						<img src="images/dateing2_3.jpg" class="w-100 rounded">
					</div>
					<div class="col-12 col-lg-6 pictext py-2">
						<img src="images/dateing2_4.jpg" class="w-100 rounded">					
					</div>
				</div>
								
			<hr>
			<h5 class="text-success">2018-12-07<br>從愛出發-溪頭之旅　籌備會議1</h5>
			<p class="text-secondary">開會時間：107年12月7日（星期五）下午6時30分。<br>
									開會地點：〔古早傳說〕飲食雜誌館–新莊市新莊區中正路649號</p>
		</div>
	</div>
	<!-- 頁尾版權 -->
	<?php
		include_once "footer.php";
	?>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>

	<script>
		// 當網頁讀取完畢時(連圖片也載入時)
		$(window).on("load", function () {
			setTimeout('$("#loading").fadeOut()', 600);
		})
	</script>

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