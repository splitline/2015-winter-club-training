<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> 這是新聞版喔OuO </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body>
		<div class="jumbotron">
			<div style="padding-left:100px">
			<h2>理論上是新聞公告系統</h2>
			<p>奇怪的地方哦哦哦</p>
			</div>
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-md-6 col-md-offset-3">
						<?php
						include('cfg.php');
						$id=$_GET['id'];
						$sql="SELECT * FROM `news` WHERE id=$id";
						$result = mysql_query($sql);
						$row = mysql_fetch_row($result);
						echo'
						<div class="panel panel-default">
						  <div class="panel-heading">'.$row[1].'</div>
						  <div class="panel-body">'.
						    $row[2].'
						  </div>
						</div>
						';
						?>
		        </div>   
		    </div>
		</div>
	</body>
</html>