<?php
    include('cfg.php');
    $user = addslashes($_REQUEST['username']);
    $pass = addslashes($_REQUEST['password']);
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $res = mysql_query($sql);
    $result = @mysql_fetch_array($res);
    if(!empty($result)){
    	setcookie("username", "$user", time()+3600);
        setcookie("password", "$pass", time()+3600);
		header('Location: index.php');
    }else{
    	header('Location: index.php');		
    }
    
    ?>