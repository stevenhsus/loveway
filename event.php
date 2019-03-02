<!DOCTYPE HTML>
<html lang="zh-tw">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalabe=0" />
	<meta name="author" content="網頁作者">
	<meta name="keywords" content="返老還童關懷委員會,溪頭">
	<meta name="description" content="返老還童關懷委員會">
	<title>活動花絮</title>
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
						<!-- <li><a  class="rounded button button--winona button--border-thin button--text-thick button--inverted" data-text="宣導公告" href="propagate.php" style="text-decoration:none;color:#25992D">宣導公告</a></li> -->
						<li><a  class="rounded button button--winona button--border-thin button--text-thick button--inverted" data-text="活動花絮" href="event.php" style="text-decoration:none;color:#25992D">活動花絮</a></li>
					</ul>
				</div>
                
				<!-- 訊息區  -->
			    <div class="col-md-10" style="margin-bottom:230px">
				    <h3 class="text-left text-success"><i class="far fa-images"></i>&nbsp;活動花絮</h3>
                    <hr>
                         <h1 style="color:purple">建 置 中  ......</h1>
                <!--大圖-->
               <div class="col-md-10" style="margin:auto">                 
                <div id="event01" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event01.jpg"  class="img-thumbnail" alt="event01" onclick="show('Mountains')">
                        <p>賞櫻季</p>
                    </div>
                </div>
                <div id="event02" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event02.jpg"  class="img-thumbnail" alt="event02" onclick="show('Lights')">
                        <p>賞櫻季</p>
                    </div>
                </div>
                <div id="event03" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event03.jpg"  class="img-thumbnail" alt="event03" onclick="show('Nature')">
                        <p>青背山雀</p>
                    </div>
                </div>
                <div id="event04" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event04.jpg"  class="img-thumbnail" alt="event04" onclick="show('Dessert')">
                        <p>賞櫻季</p>
                    </div>                                                           
                </div>
                <div id="event05" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event05.jpg"  class="img-thumbnail" alt="event05" onclick="show('Dessert')">
                        <p>鳳蝶</p>
                    </div>                                                           
                </div>
                <div id="event06" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event06.jpg"  class="img-thumbnail" alt="event06" onclick="show('Dessert')">
                        <p>賞櫻季</p>
                    </div>                                                           
                </div>
                <div id="event07" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event07.jpg"  class="img-thumbnail" alt="event07" onclick="show('Dessert')">
                        <p>落羽松</p>
                    </div>                                                           
                </div>
                <div id="event08" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event08.jpg"  class="img-thumbnail" alt="event08" onclick="show('Dessert')">
                        <p>落羽松</p>
                    </div>
                </div>
                <div id="event09" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event09.jpg"  class="img-thumbnail" alt="event09" onclick="show('Dessert')">
                        <p>賞楓季</p>
                    </div>                                                           
                </div>
                <div id="event10" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event10.jpg"  class="img-thumbnail" alt="event10" onclick="show('Dessert')">
                        <p>賞楓季</p>
                    </div>                                                           
                </div>
                <div id="event11" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event11.jpg"  class="img-thumbnail" alt="event11" onclick="show('Dessert')">
                        <p>調整池畔夕陽</p>
                    </div>                                                           
                </div>
                <div id="event12" class="expandedBlock">
                    <div style="width:80%; margin:auto">
                        <img src="images/album/event12.jpg"  class="img-thumbnail" alt="event12" onclick="show('Dessert')">
                        <p>賞螢季</p>
                    </div>                                                           
                </div>
                                                                                             
                
                <!--小圖-->
                <h6 class="text-secondary"><i class="fas fa-search-plus"></i>點圖放大照片</h6>                                                                         
                        <img src="images/album/event01.jpg" class="img-thumbnail" alt="event01" style="width:15%; height:auto" onclick="show('event01')">
                        <img src="images/album/event02.jpg" class="img-thumbnail" alt="event02" style="width:15%; height:auto" onclick="show('event02')">
                        <img src="images/album/event03.jpg" class="img-thumbnail" alt="event03" style="width:15%; height:auto" onclick="show('event03')">
                        <img src="images/album/event04.jpg" class="img-thumbnail" alt="event04" style="width:15%; height:auto" onclick="show('event04')">
                        <img src="images/album/event05.jpg" class="img-thumbnail" alt="event05" style="width:15%; height:auto" onclick="show('event05')">
                        <img src="images/album/event06.jpg" class="img-thumbnail" alt="event06" style="width:15%; height:auto" onclick="show('event06')">
                        <img src="images/album/event07.jpg" class="img-thumbnail" alt="event07" style="width:15%; height:auto" onclick="show('event07')">
                        <img src="images/album/event08.jpg" class="img-thumbnail" alt="event08" style="width:15%; height:auto" onclick="show('event08')">
                        <img src="images/album/event09.jpg" class="img-thumbnail" alt="event09" style="width:15%; height:auto" onclick="show('event09')">
                        <img src="images/album/event10.jpg" class="img-thumbnail" alt="event10" style="width:15%; height:auto" onclick="show('event10')">
                        <img src="images/album/event11.jpg" class="img-thumbnail" alt="event11" style="width:15%; height:auto" onclick="show('event11')">
                        <img src="images/album/event12.jpg" class="img-thumbnail" alt="event12" style="width:15%; height:auto" onclick="show('event12')">                       
                    </div>
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
	
	<!--啟動登入-->
	<script>
		$("#sign").click(function(e){
			e.preventDefault();
			$(".navbar-collapse").collapse("hide");

		})
	</script>

	<!-- 啟動相簿 -->
    <script>
      /*
        1.onclick時讓對應的隱藏區塊顯示(none => block)
        2.撰寫一個需帶入指定id的函式，id的內容就是隱藏區塊的id
        3.需要處理每次點擊時其它區塊的狀態
      */
    show('event01');
    function show(id){
      let bigs=document.getElementsByClassName('expandedBlock')
      for(i=0;i<bigs.length;i++){
        bigs[i].style.display="none";
      }
       document.getElementById(id).style.display="block";
    } 
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