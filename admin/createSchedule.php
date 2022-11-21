<?php 
include_once __DIR__."/db.php";

$stmt = $dbh->prepare("SELECT * FROM `cabinet`");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $dbh->prepare("SELECT * FROM `users` WHERE id_post = 2");
$stmt->execute();
$arrays = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Медицинский центр</title>
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
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
        <h2 class="sub-title"> Добавление записи в расписание </h2>
        <?php
            if (isset($_POST["data_w"]) AND isset($_POST["time_on"]) AND isset($_POST["time_off"]) AND isset($_POST["id_cabinet"]) AND isset($_POST["id_worker"])) {
                
                try {
                   
                    $sql = "INSERT INTO work_schedule (data_w, time_on, time_off, id_cabinet, id_worker) VALUES (:data_w, :time_on, :time_off, :id_cabinet, :id_worker)";
                    // определяем prepared statement
                    $stmt = $dbh->prepare($sql);
                    // привязываем параметры к значениям
                    $stmt->bindValue(":data_w", $_POST["data_w"]);
                    $stmt->bindValue(":time_on", $_POST["time_on"]);
                    $stmt->bindValue(":time_off", $_POST["time_off"]);
                    $stmt->bindValue(":id_cabinet", $_POST["id_cabinet"]);
                    $stmt->bindValue(":id_worker", $_POST["id_worker"]);
                    // выполняем prepared statement
                    $affectedRowsNumber = $stmt->execute();
                    // если добавлена как минимум одна строка
                    if($affectedRowsNumber > 0 ){
                        header('Refresh: 2; url=schedule.php');  
                    }
                }
                catch (PDOException $e) {
                    echo "Database error: " . $e->getMessage();
                }
            }
            ?>
            <form class="form" method="post">
                <p>Дата:
                <input type="date" name="data_w" /></p>
                <p>Начало приема:
                <input type="time" name="time_on" /></p>
                <p>Окончание приема:
                <input type="time" name="time_off" /></p>
                <label for="exampleInputEmail1">Кабинет</label>
                <select class="form-select" name="id_cabinet">
                    <option> Выберите кабинет </option>
                    <?php foreach ($array as $row): ?>
                    <option value=<?php echo $row['id_cabinet']?>><?php echo $row['name']?></option>
                    <?php endforeach; ?>
                </select>
                <label for="exampleInputEmail1">Врач</label>
                <select class="form-select" name="id_worker">
                    <option> Выберите врача </option>
                    <?php foreach ($arrays as $row): ?>
                    <option value=<?php echo $row['id']?>><?php echo $row['full_name']?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Добавить">
            </form>
    </div>
</section>
