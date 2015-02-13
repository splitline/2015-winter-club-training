# 資安Demo@2015冬資戀

###簡介
>其實大部分的東西到 index.html 看就知道了XD

* /sqli 是測試萬能密碼所使用(前端是抄 Orange 大大的其實..)
* /news 是用來做SQL injection完整Demo的一個新聞系統，至於萬能密碼的洞有做防護
* /xss 顧名思義是XSS(Cross-site scripting)的Demo
* /stealer 是用來盜取cookie用的，其中steal.php是用來盜取cookie的php，而cookie.txt則記錄下所盜取的cookie以及其他相關資訊

###使用說明

1. 將hack.sql及xss.sql分別匯入兩個不同的MySQL資料庫

  >hack.sql是/sqli及/news所使用的資料庫；xss.sql是/xss所用的資料庫
 
2. 資料庫設定請分別至各目錄下的cfg.php進行設定

3. 教學Slide請至此網址觀看:[Link](http://www.slideshare.net/OuOwwwwww/talk2015)
