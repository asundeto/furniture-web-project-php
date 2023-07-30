<!DOCTYPE html>
<html lang="zxx">

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
                        <h2>Медицинское оборудование</h2>
                        <div class="bt-option">
                            <a href="/">Главная</a>
                            <span>Мед. оборудование</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <?php
                for ($i = 1; $i < 7; $i++) {
                    $result .= '<div class="col-lg-4 col-md-6">';
                    $result .= '<div class="room-item">';
                    $result .= '<img src="../img/medical/' . $i . '.jpg" alt="">';
                    $result .= '<div class="ri-text">';
                    $result .= '<a href="https://wa.me/77762210578" class="primary-btn">Связяться с нами</a>';
                    $result .= '</div>';
                    $result .= '</div>';
                    $result .= '</div>';
                }
                echo $result;
                ?>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <?php require "../templates/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php require "../templates/pluginsjs.php" ?>
</body>

</html>