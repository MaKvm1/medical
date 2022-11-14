<!-- Страница регистрации пользователей -->
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
    <form method="post" action="register.php">
            <div class="mb-3">
              <label for="username" class="form-label">Логин</label>
              <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Пароль</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Регистрация</button>
            </div>
          </form>
    </head>
</html>