<!-- Страница авторизации пользователей системы -->

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Медицинский центр</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <style>
            body {
                font-family: Arial;
                background-color: #3498DB;
                padding: 50px;
            }
            input {
                text-align: center;
                background-color: #ECF0F1;
                border: 2px solid transparent;
                border-radius: 3px;
                font-size: 16px;
                font-weight: 200;
                padding: 10px 0;
                width: 250px;
                transition: border .5s;
            }
            
            input:focus {
                border: 2px solid #3498DB;
                box-shadow: none;
            }
            
            .btn {
                border: 2px solid transparent;
                background: #3498DB;
                color: #ffffff;
                font-size: 16px;
                line-height: 25px;
                padding: 10px 0;
                text-decoration: none;
                text-shadow: none;
                border-radius: 3px;
                box-shadow: none;
                transition: 0.25s;
                display: block;
                width: 250px;
                margin: 0 auto;
            }
            
            .btn:hover {
                background-color: #2980B9;
            }
        </style>
    </head>
    <body>
    <head>
    <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Авторизация</h1>
      </div>

      <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" value="" placeholder="Логин" id="login-name">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" value="" placeholder="Пароль" id="login-pass">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>

        <a class="btn btn-primary btn-large btn-block" href="#">Вход</a>
      </div>
    </div>
  </div>
    </head>
</html>