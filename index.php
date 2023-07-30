<!DOCTYPE html>
<html lang="en">

<?php require "templates/head.php" ?>

<body>
    <!--Menu Section Bar Start-->
    <?php require "templates/menu.php" ?>
    <!--Menu Section Bar END-->

    <!-- Header Section Begin -->
    <?php require "templates/header.php" ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Транс Металл Профиль</h1>
                        <p>Откройте для себя воплощение прочности и надежности с нашим выбором металлических стеллажей,
                            шкафов, сейфов и медицинского оборудования премиум-класса.</p>
                        <a href="../pages/about-us.php" class="primary-btn">Узнать больше</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1" id="form-access">
                    <div class="booking-form">
                        <h3>Обратный звонок</h3>
                        <form action="/internal/telegram.php" method="POST">
                            <div class="check-date">
                                <label for="date-in">Имя:</label>
                                <input name="name" type="text" class="text" id="date-in">
                            </div>
                            <div class="check-date">
                                <label for="date-out">Номер телефона:</label>
                                <input name="phone" type="text" class="text" id="date-out">
                            </div>
                            <?php
                            if ($_COOKIE['telegram'] == 'yes'):
                                ?>
                                <h5>Запрос успешно отправлен!</h5>
                            <?php endif; ?>
                            <button type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/10.jpeg"></div>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>О нас</span>
                            <h2>Компания</h2>
                        </div>
                        <p class="f-para"><b>"Транс Металл Профиль"</b> реализует качественную металлическую мебель,
                            охватывая весь цикл — от замера до его доставки к покупателю. </p>
                        <p class="s-para">Наши изделия формируют удобные рабочие и общественные пространства, радуя
                            своей функциональностью, надежностью и внешним видом.</p>
                        <a href="../pages/about-us.php" class="primary-btn about-btn">Узнать больше</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="../img/about/1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="../img/about/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad" id="category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Все товары</span>
                        <h2>Категории</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="../pages/stelagy.php">
                        <div class="service-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-inboxes" viewBox="0 0 16 16">
                                <path
                                    d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6zM3.809.563A1.5 1.5 0 0 1 4.981 0h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066z" />
                            </svg>
                            <h4>Стеллажи</h4>
                            <p>От тяжелых промышленных стеллажей до гладких и универсальных домашних систем хранения.
                                Увеличьте свое пространство и держите свои вещи в порядке с помощью наших прочных
                                стеллажей.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="../pages/medical.php">
                        <div class="service-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-clipboard-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z" />
                                <path
                                    d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z" />
                                <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z" />
                            </svg>
                            <h4>Медицинская мебель</h4>
                            <p>Мы понимаем исключительную важность надежного медицинской мебели в сфере здравоохранения.
                                Поэтому мы предлагаем широкий спектр медицинской мебели.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="../pages/metal.php">
                        <div class="service-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-archive" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <h4>Металлические шкафы</h4>
                            <p>Наши высококачественные шкафы обеспечивают как безопасность, так и удобство, что делает
                                их
                                идеальными для офисных помещений, мастерских и жилых помещений.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="../pages/safe.php">
                        <div class="service-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-safe2" viewBox="0 0 16 16">
                                <path
                                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h12A1.5 1.5 0 0 1 16 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 1 14.5V14H.5a.5.5 0 0 1 0-1H1V9H.5a.5.5 0 0 1 0-1H1V4H.5a.5.5 0 0 1 0-1H1v-.5zM2.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-12z" />
                                <path
                                    d="M5.035 8h1.528c.047-.184.12-.357.214-.516l-1.08-1.08A3.482 3.482 0 0 0 5.035 8zm1.369-2.303 1.08 1.08c.16-.094.332-.167.516-.214V5.035a3.482 3.482 0 0 0-1.596.662zM9 5.035v1.528c.184.047.357.12.516.214l1.08-1.08A3.482 3.482 0 0 0 9 5.035zm2.303 1.369-1.08 1.08c.094.16.167.332.214.516h1.528a3.483 3.483 0 0 0-.662-1.596zM11.965 9h-1.528c-.047.184-.12.357-.214.516l1.08 1.08A3.483 3.483 0 0 0 11.965 9zm-1.369 2.303-1.08-1.08c-.16.094-.332.167-.516.214v1.528a3.483 3.483 0 0 0 1.596-.662zM8 11.965v-1.528a1.989 1.989 0 0 1-.516-.214l-1.08 1.08A3.483 3.483 0 0 0 8 11.965zm-2.303-1.369 1.08-1.08A1.988 1.988 0 0 1 6.563 9H5.035c.085.593.319 1.138.662 1.596zM4 8.5a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0zm4.5-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <h4>Сейфы</h4>
                            <p>Защитите свои ценные вещи, важные документы с помощью сейфов премиум-класса. Наши сейфы
                                обеспечат душевное спокойствие, необходимое в сегодняшнем мире.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6 cpoint">
                        <div class="hp-room-item set-bg" data-setbg="../img/room/1.jpg">
                            <div class="hr-text">
                                <h3>Стеллажи</h3>
                                <a href="../pages/stelagy.php" class="primary-btn">Все товары</a>
                                <br><br>
                                <a href="../download/Металлическая мебель ПРАКТИК (брошюра А5).pdf" class="primary-btn"
                                    download>Скачать документацию</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cpoint">
                        <div class="hp-room-item set-bg" data-setbg="../img/room/2.jpg">
                            <div class="hr-text">
                                <h3>Медицинская мебель</h3>
                                <a href="../pages/medical.php" class="primary-btn">Все товары</a>
                                <br><br>
                                <a download href="../download/Медецинская мебель HILFE.pdf" class="primary-btn">Скачать
                                    документацию</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cpoint">
                        <div class="hp-room-item set-bg" data-setbg="../img/room/3.jpg">
                            <div class="hr-text">
                                <h3>Металлическая мебель</h3>
                                <a href="../pages/metal.php" class="primary-btn">Все товары</a>
                                <br><br>
                                <a href="../download/Металлическая мебель ПРАКТИК (брошюра А5).pdf" class="primary-btn"
                                    download>Скачать документацию</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 cpoint">
                        <div class="hp-room-item set-bg" data-setbg="../img/room/4.jpg">
                            <div class="hr-text">
                                <h3>Сейфы</h3>
                                <a href="../pages/safe.php" class="primary-btn">Все товары</a>
                                <br><br>
                                <a href="../download/Сейфы Промет (брошюра А5).pdf" class="primary-btn" download>Скачать
                                    документацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Галерея</span>
                        <h2>Использование широкого ассортимента</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="../img/blog/1.jpg">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="../img/blog/2.jpg">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="../img/blog/3.jpg">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="../img/blog/4.jpg">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="../img/blog/5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php require "templates/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php require "templates/pluginsjs.php" ?>
</body>

</html>