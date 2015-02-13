<?php
	include('cfg.php');
	$title=$_POST['title'];
	$content=$_POST['content'];
	$count=mysql_query('Select Count(*) from news');
	$rw=mysql_fetch_row($count);
	$sql = "insert into news (id,title,content) values ('$rw[0]','$title','$content')";
	echo $sql;
    if(mysql_query($sql)){
        header('Location: admin.php');
	}
	else{
		echo'GG';
		header('Location: admin.php');
	}
?>