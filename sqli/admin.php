<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HackMePlz...</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="row" style="padding-top:100px">
        <div class="col-md-6 col-md-offset-3">
    <?php
    include('cfg.php');
    $account = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $password = md5($pass);
    $sql = "SELECT * FROM sqli WHERE username = '$account' AND password = '$pass'";
    $res = mysql_query($sql) or die(mysql_error());
    $result = @mysql_fetch_array($res);
    
    if(!empty($result)){
      echo'
      <div class="well well-lg">
        <h2>你居然登入了OAOO</h2>
        <h2>你...你是大黑客 σ(oдolll)</h2>
      <code>'.$sql.'</code>
      </div>
      ';
    }else{
      echo'
      <div class="well well-lg">
      <h2>帳號密碼錯了啦ww</h2>
      <h2>你是白癡ヾ(*´∀&nbspˋ*)ﾉ</h2>
      <code>'.$sql.'</code>';
    }
    
    ?>
      </div>
    </div>
  </body>
</html>
