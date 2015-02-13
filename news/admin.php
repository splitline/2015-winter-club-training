<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> OAO </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body>
		<div class="jumbotron">
			<div style="padding-left:100px">
			<h2>登入頁面OAO</h2>
			<p>奇怪的地方哦哦哦</p>
			</div>
		</div>
		<?php
		include('cfg.php');
		if(isset($_POST['username'])&&isset($_POST['password'])){
			$account = $_POST['username'];
			$pass = $_POST['password'];
			$password = md5($pass);
			$sql = "SELECT * FROM admin WHERE usr = '$account' AND pwd = '$password'";
			$res = mysql_query($sql);
			$result = @mysql_fetch_array($res);
			if(!empty($result)){
				$_SESSION['username']=$account;
				header('Location: admin.php');
			}
			else{
				header('Location: index.php');
			}
		}
		else{
			$usr=@$_SESSION['username'];
			$sql = "SELECT * FROM admin WHERE usr = '$usr'";
			$res = mysql_query($sql);
			$result = @mysql_fetch_array($res);
			if(!empty($result)){
			?>
			<div class="container">
			    <div class="row">
			        <div class="col-md-6 col-md-offset-3">
			        	<h3>快樂的新聞<span style="color:red;">編輯&新增</span>列表：</h3>
			        	<div class="list-group">
			        		<a href="#" onclick="javascript:$('.new').show()" class="btn btn-primary" role="button">我也要寫新聞啦(`･ω･´)ノ</a><hr>
			        		<div class="new" style="display:none">
			        			<form class="form-horizontal" role="form" method='POST' action='add.php'>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">標題</label>
								    <div class="col-sm-10">
								      <input name="title" type="text" class="form-control" placeholder="Title">
								    </div>
								  </div>
								  <div class="form-group">
								  	<label class="col-sm-2 control-label">內容(可加HTML)</label>
								  	<div class="col-sm-10">
								  		<textarea name="content" class="form-control" rows="3" placeholder="Content"></textarea>
								  	</div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-default">送出</button>
								    </div>
								  </div>
								</form>
			        		</div>
							<?php
							include('cfg.php');
							$sql="SELECT * FROM `news` WHERE 1";
							$result = mysql_query($sql);
							while($row = mysql_fetch_row($result)){
								echo "<a href=\"#\" class=\"list-group-item\">#$row[0]&nbsp&nbsp&nbsp&nbsp$row[1]</a>";
							}
							?>
						</div>
			        </div>   
			    </div>
			</div>
			<?php
			}
			else{?>
				<div class="row">
				    <div class="col-md-6 col-md-offset-3">
				        <div class="account-wall">
				            <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
				                <form class="form-signin" method='POST' action='admin.php'>
				                <input name="username" class="form-control" placeholder="Username" required autofocus>
				                <input type='password' name="password" class="form-control" placeholder="Password" required>
				                <input class="btn btn-lg btn-primary btn-block" type="submit" value='登入'>
				                </form>
				                <br> 
				            </div>
				        </div>
				    </div>
		<?php
			}
		}
		?>
		<center>
			<a href="./">回首頁</a>
		</center>
	</body>
</html>