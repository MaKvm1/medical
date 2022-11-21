<?php 
include_once __DIR__."/admin/db.php";

// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" AND isset($_GET["id_class"]))
{
    $class = $_GET["id_class"];
$stmt = $dbh->prepare("SELECT * FROM `services` JOIN classification ON services.id_classification = classification.id_class WHERE id_classification = :class");
$stmt->bindValue(":class", $class);
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Медицинский центр</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <div class="container-header"> 
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li class="menu-item">
                            <img src="images/time.png" alt="time" style="width: 19px; height: 16px;"> 
                            <a href="#">ПН-ПТ с 8:00 - 20:00 </a>
                        </li>
                        <li class="menu-item">
                            <img src="images/geo.png" alt="geo">
                            <a href="#">г.Иркутск ул.Ленина, 5а</a>
                        </li>
                        <li class="menu-item">
                            <img src="images/phone.png" alt="phone">
                            <a href="#">+7(899)298-88-88</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <header class="header">
            <div class="container">
                
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                
                <nav class="menu">
                    <ul>
                        <li class="menu-item">
                            <a href="index.php">О нас</a>
                        </li>
                        <li class="menu-item">
                            <a href="service.php">Услуги и цены</a>
                        </li>
                        <li class="menu-item">
                            <a href="doctors.php">Врачи</a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Отзывы</a>
                        </li>
                        <li class="menu-item">
                            <a href="contacts.php">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <button class="button">
                    Записаться на приём
                </button>

            </div>
        </header>
        <section class="service">
            <div class="conteiner">
                <h2 class="sub-title"> Медицинский центр в Иркутске </h2>
                
                <?php if(count($array) >0){?>
                <div class="carts">
                <?php  foreach ($array as $row): ?>
                    <div class="cart">
                        <div class="cart-image">
                            <img src="images/logo.png" alt="Image 1">
                        </div>
                        <div class="cart-title"><?= $row['name_serv'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php } else{?>
                    <hr>
                    <h3> Услуг в данном направлении еще нет. </h3>
                    <?php }?>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="logo">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <div class="rights">Все права защищены</div>
            </div>
        </footer>
    </body>
</html>

<?php } ?>