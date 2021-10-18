<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/banner.css">
    
    <title>Magic-Chest</title>
</head>
<body>
    <?php require "header.php "?>

    <div id="main_container">

        <!-- banner's block --> 
        <div class="banner-content">
            <div class="swiper-container">
                <div class="banner-catolog">
                    <div class="banner-slide" style="display: none;">
                        <a href="https://www.google.ru/">
                            <picture>
                                <source media="(max-width: 1022px)" srcset="img/bners/mob_iphone.jpg">
                                <img src="img/bners/big_iphone.jpg" alt="iphone sales">
                            </picture>
                        </a>
                    </div>
                    <div class="banner-slide" style="display: none;">
                        <a href="https://www.google.ru/">
                            <picture>
                                <source media="(max-width: 1022px)" srcset="img\bners\mob_autumn.jpg">
                                <img src="img\bners\big_autumn.jpg" alt="autumn sales">
                            </picture>
                        </a>
                    </div>
                    <div class="banner-slide" style="display: none;">
                        <a href="https://www.google.ru/">
                            <picture>
                                <source media="(max-width: 1022px)" srcset="img\bners\mob_food.jpg">
                                <img src="img\bners\big_food.jpg" alt="food sales">
                            </picture>
                        </a>
                    </div>
                    <div class="banner-slide" style="display: none;">
                        <a href="https://www.google.ru/">
                            <picture>
                                <source media="(max-width: 1022px)" srcset="img\bners\mob_oral.jpg">
                                <img src="img\bners\big_oral.jpg" alt="oral sales">
                            </picture>
                        </a>
                    </div>
                    <div class="banner-slide" style="display: none;">
                        <a href="https://www.google.ru/">
                            <picture>
                                <source media="(max-width: 1022px)" srcset="img\bners\mob_philips.jpg">
                                <img src="img\bners\big_philips.jpg" alt="philips sales">
                            </picture>
                        </a>
                    </div>
                </div>
                <button class="swiper-button prev">&#10094;</button>
                <button class="swiper-button next">&#10095;</button>
            </div>
            <ul class="swiper-pagination">
                <li class="swiper-pagination-bullet" style="left: 0px;">1</li>
                <li class="swiper-pagination-bullet" style="left: 0px;">2</li>
                <li class="swiper-pagination-bullet" style="left: 0px;">3</li>
                <li class="swiper-pagination-bullet" style="left: 0px;">4</li>
                <li class="swiper-pagination-bullet" style="left: 0px;">5</li>
            </ul>
        </div>
    </div>
    <?php require "footer.php "?>
    
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!--<script src="js/plagins/jquery.maskedinput.min.js"></script>-->
    <script src="js/burgerScript.js"></script>
    <!-- <script src="js/sliderNews.js"></script> -->
    <script src="js/popup.js"></script>
    
</body>
</html>