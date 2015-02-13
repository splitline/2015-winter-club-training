<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>HackMePlz...</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script>
    $(function() {
        $('input[name$="username"]').keyup(function(){
            $('.username').text( $(this).val() );
        });
        $('input[name$="password"]').keyup(function(){
            $('.password').text( $(this).val() );
        });

        $('.username').text( $('input[name$="username"]').val() );
        $('.password').text( $('input[name$="password"]').val() );
    });
  </script>
  <style>
    .form-signin
    {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading, .form-signin .checkbox
    {
        margin-bottom: 10px;
    }
    .form-signin .checkbox
    {
        font-weight: normal;
    }
    .form-signin .form-control
    {
        position: relative;
        font-size: 26px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus
    {
        z-index: 2;
    }
    .form-signin input[type="text"]
    {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"]
    {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .account-wall
    {
        margin-top: 20px;
        padding: 50px 0px 20px 0px;
        
    }
    .profile-img
    {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .need-help
    {
        margin-top: 10px;
    }
    .new-account
    {
        display: block;
        margin-top: 10px;
    }

    .jumbotron {
      background-color: #111111;
    }

    .sql {
        max-width: 1024px;
    }

    .sql h2{
        font-weight: 100;
        letter-spacing: 0.1em;
        font-family: 'Helvetica Neue', 'Ubuntu Condensed', '&#24494;&#36575;&#27491;&#40657;&#39636;', '微軟正黑體','Microsoft JhengHei', sans-serif; 

    }

    .username, .password {
        color:red;
    }
  </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="account-wall">
                          <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method='POST' action='admin.php'>
                <input name="username" class="form-control" placeholder="Username" required autofocus>
                <input type='password' name="password" class="form-control" placeholder="Password" required>
                <input class="btn btn-lg btn-primary btn-block" type="submit" value='登入'>
                <a href="#" onclick="javascript:$('.sql').show()" class="pull-right need-help"> 開外掛！ </a><span class="clearfix"></span>
                </form>
                <br>
                <div class="sql col-md-12" align='center' style='display:none'>
                    <h3><div class="panel panel-default"><div class="panel-body">SELECT * FROM admin WHERE username = '<span class='username'></span>' AND password = '<span class='password'></span>'</div></div></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>