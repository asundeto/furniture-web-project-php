<!DOCTYPE html>
<html lang="EN">

<?php require "../templates/head.php" ?>

<body>
    <!--Menu Section Bar Start-->
    <?php require "../templates/menu.php" ?>
    <!--Menu Section Bar END-->

    <!-- Header Section Begin -->
    <?php require "../templates/header.php" ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>О нас</h2>
                        <div class="bt-option">
                            <a href="/">Главная</a>
                            <span>О нас</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Транс Металл Профиль</h2>
                            <p>Компания
                                "Транс Металл Профиль" реализует качественную металлическую мебель, охватывая весь цикл
                                — от замера до его доставки к покупателю.

                                Наши изделия формируют удобные рабочие и общественные пространства, радуя своей
                                функциональностью, надежностью и внешним видом.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> Широкий ассортимент</li>
                            <li><i class="icon_check"></i> Быстрая и безопасная доставка</li>
                            <li><i class="icon_check"></i> Хорошая удовлетворенность клиентов</li>
                            <li><i class="icon_check"></i> Совет эксперта</li>
                            <li><i class="icon_check"></i> Бесплатная консультация</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="../img/about/3.jpg">
                            <!-- <div class="api-text">
                                <h3>Restaurants Services</h3>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="../img/about/4.jpg">
                            <!-- <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="../img/about/5.jpg">
                            <!-- <div class="api-text">
                                <h3>Event & Party</h3>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Footer Section Begin -->
    <?php require "../templates/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php require "../templates/pluginsjs.php" ?>
</body>

</html>