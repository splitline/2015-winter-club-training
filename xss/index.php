<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>留言板</title>
		<link rel="stylesheet" type="text/css" href="../bootstrap.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body>
		<div class="jumbotron">
			<div style="padding-left:100px">
				<h2>這裡大概是留言板吧</h2>
			</div>
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-md-6 col-md-offset-3">
		        	<h3>快樂的留言板：</h3>
		        	<?php
					include('cfg.php');
		        	if(isset($_POST['content'])){
			        	$user=$_COOKIE['username'];
						$content=addslashes($_POST['content']);
						$sql = "insert into comment (user,content) values ('$user','$content')";
						echo $sql;
					    mysql_query($sql);
					    header('Location: index.php');
					}
		        	$usr=@$_COOKIE['username'];
		        	$pwd=@$_COOKIE['password'];
					$sql = "SELECT * FROM user WHERE username = '$usr' AND password = '$pwd'";
					$res = mysql_query($sql);
					if(!empty(mysql_fetch_array($res))){
						echo '身分:'.$usr;
						echo'<form class="form-horizontal" role="form" method="POST" action="index.php">
						  <div class="form-group">
						    <label  class="col-sm-2 control-label">內容：</label>
						    <div class="col-sm-10">
						      <textarea name="content" class="form-control" rows="3" placeholder="Content"></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">留言</button>
						    </div>
						  </div>
						</form>';
					}
					else{

		        		echo'<form class="form-horizontal" role="form" method="POST" action="login.php">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">帳號</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="username" placeholder="Username">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">密碼</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" name="password" placeholder="Password">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">登入</button>
						    </div>
						  </div>
						</form>	';
		        	
		        	}
		        	?>
		        	<div class="list-group">
						<?php
						include('cfg.php');
						$sql="SELECT * FROM `comment` WHERE 1";
						$result = mysql_query($sql);
						while($row = mysql_fetch_row($result)){
						?>
							<li class="list-group-item">
								<h4 class="list-group-item-heading"><?php echo '作者:'.$row[0]; ?></h4>
								<p class="list-group-item-text"><?php echo $row[1]; ?></p>
							</li>
						<?php
						}
						?>
					</div>
		        </div>   
		    </div>
		</div>
	</body>
</html>