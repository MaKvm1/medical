<?php 
include_once __DIR__."/db.php";

$stmt = $dbh->prepare("SELECT * FROM `classification`");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Медицинский центр</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Медицинский центр</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin-panel.php">Главная</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="schedule.php">Расписание</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="cabinets.php">Кабинеты</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Управление услугами
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="classifications.php">Направления</a></li>
              <li><a class="dropdown-item" href="services.php">Услуги</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<section class="service">
            <div class="conteiner">
                <h2 class="sub-title"> Заголовок </h2>
                <div class="carts">
                
                </div>
            </div>
        </section>
