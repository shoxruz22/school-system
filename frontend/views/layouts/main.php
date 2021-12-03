<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<header>
        <div class = "header-top-info">
            <div class = "row container">
                <div>
                    <p class = "text">Sayt Test Rejimida Ishlamoqda!!!</p>
                    <span><i class = "fas fa-phone"></i>+998 99 083 76 04</span>
                    <span><i class = "fas fa-envelope"></i>Marlin Pierko</span>
                </div>

            </div>
        </div>

        <nav class = "navbar">
            <div class = "row container">
                <a href = "index.html" class = "navbar-brand">
                    <img src = "public/images/logo.png" alt = "site logo">
                    <span>Maktab-106</span>
                </a>
                <button type="button" class = "navbar-show-btn">
                    <i class = "fas fa-bars"></i>
                </button>
            </div>

            <div class = "navbar-collapse">
                <button type = "button" class = "navbar-hide-btn">
                    <i class = "fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li><a href = "index.html">Home</a></li>
                    <li><a href = "about.html">About</a></li>
                    <li><a href = "gallery.html">Gallery</a></li>
                    <li><a href = "#">Events</a></li>
                    <li><a href = "contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    <div class = "hero-content">
        <div class = "container">
            <div class = "hero-slider">
                <!-- item -->
                <div class= "hero-slider-item">
                    <h1 class = "hero-title">Ta'lim dunyoni o'zgartiradi va muvaffaqiyat keltiradi.</h1>
                    <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error velit quis eos quae, laborum quod magnam cumque, ut, odit eaque animi blanditiis amet quas. Beatae aliquid deserunt placeat repellat quam?</p>
                    <a href = "#" class = "btn hero-btn">Ko'proq</a>
                </div>
                <!-- end of item -->
                <!-- item -->
                <div class= "hero-slider-item">
                    <h1 class = "hero-title">Bilim dunyoni falokatdan qutqaradi.</h1>
                    <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error velit quis eos quae, laborum quod magnam cumque, ut, odit eaque animi blanditiis amet quas. Beatae aliquid deserunt placeat repellat quam?</p>
                    <a href = "#" class = "btn hero-btn">Ko'proq</a>
                </div>
                <!-- end of item -->
            </div>
        </div>
    </div>
</header>

<?= $content ?>

<footer class="footer">
    <footer>
        <div class = "row container">
            <div>
                <img src = "public/images/logo.png" alt = "">
                <p class = "text">Bu sayt maktabda sodir bo'layotgan ishlarni yoritish uchun yaratilgan!</p>
                <ul class = "footer-social-links">
                    <li class = "flex">
                        <a href = "#"><i class = "fab fa-facebook-f"></i></a>
                    </li>
                    <li class = "flex">
                        <a href = "#"><i class = "fab fa-twitter"></i></a>
                    </li>
                    <li class = "flex">
                        <a href = "#"><i class = "fab fa-instagram"></i></a>
                    </li>
                    <li class = "flex">
                        <a href = "#"><i class = "fab fa-google"></i></a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class = "lg-text">Malumotlar</h3>
                <div class = "footer-links">
                    <a href ="#">Registratsiya</a>
                    <a href ="#">O'qtuvchilar</a>
                    <a href ="#">O'quvchilar</a>
                    <a href ="#">Statistika</a>
                    <a href ="#">Rasmlar</a>
                </div>
            </div>

            <div>
                <h3 class = "lg-text">Information</h3>
                <div class = "footer-links">
                    <a href ="#">Business Administration</a>
                    <a href ="#">Arts & Humanities</a>
                    <a href ="#">Science & Technology</a>
                    <a href ="#">Economics & Finance</a>
                </div>
            </div>

            <div>
                <h3 class = "lg-text">Savollarga Murojaat?</h3>
                <div class = "footer-contact-info">
                    <div>
                        <span><i class = "fas fa-map-marker-alt"></i></span>
                        <span>Toshkent shahar. Uchtepa tuman. 106-maktab</span>
                    </div>
                    <div>
                        <span><i class = "fas fa-phone"></i></span>
                        <span>99 083 76 04</span>
                    </div>
                    <div>
                        <span><i class = "fas fa-paper-plane"></i></span>
                        <span>info@edcademy.com</span>
                    </div>
                </div>
            </div>
        </div>

        <p class = "footer-text">Created and Designed by <span>  Shoxruz Xasanov</span>. All Rights Reserved.</p>
    </footer>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
