<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Ban co vua </title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		.banco{
			width: 800px;
			height: 800px;
			margin: 0px auto;
			border: 1px solid black;
		}
		.oco{
			width: 100px;
			height: 100px;
			float: left;
		}
		.trang{
			background-color: white;			
		}
		.den{
			background-color: black;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="banco">
		<?php
		for($i = 1; $i <= 8; $i++){
			for($j = 1; $j <= 8; $j++){
				if(($i + $j) % 2 == 0){
					echo "<div class='oco trang'></div>";
				}
				else{
					echo "<div class='oco den'></div>";
				}
			}
		}		
		?>
		</div>
	</div>	

</body>
</html>