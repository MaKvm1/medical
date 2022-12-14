<?php 
include_once __DIR__."/admin/db.php";

$stmt = $dbh->prepare("SELECT * FROM `services` JOIN classification ON services.id_classification = classification.id_class");
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
        <section class="main">
            <div class="container">
                <div class="info">
                    <div class="main-text">
                        Профессиональное обследование всего за 1000 рублей
                    </div>

                    <h1 class="main-title"> Программы комплексного обследования всего за 1000 рублей.</h1>

                    <div class="main-text">
                        Профессиональный программный комплекс обследования всего за 1000 рублей, вместо 3500 рублей 
                    </div>
                    <div class="main-action">
                        <button class="button">
                            Узнать подробно
                        </button>
                    </div>
                </div>
                <div class="info-image">
                    <img src="images/child.png" alt="child">
                </div>
            </div>
        </section>

        <section class="service">
            <div class="conteiner">
                <h2 class="sub-title"> Медицинский центр в Иркутске </h2>
                <p class="sub-text">Понимая, что ритм и уровень жизни активных и целеустремлённых людей меняется очень быстро, наши специалисты одни из первых в Иркутсе начали применять современные технологии в стоматологии.</p>
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
            </div>
        </section>
        <section class="price">
            <div class="conteiner">
                <h2 class="sub-title">Записаться на консультацию</h2>
                <hr>
                <form action="" class="price-form">
                    <input type="text" class="price-input-f" placeholder="Фамилия Имя Отчество"> <br>
                    <input type="tel" class="price-input" placeholder="Телефон">
                    <input type="email" class="price-input" placeholder="E-Mail">
                    <p class="price-input-chek"><input type="checkbox" name="a" value="politik"> Заполняя форму, вы соглашаетесь с нашей политикой конфиденциальности</p>
                    <button class="button">Узнать цену</button>
                </form>
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