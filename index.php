<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">

    <link rel="stylesheet" href="css/index.css">
    
    <title>Magic-Chest</title>
</head>
<body>
    <?php require "header.php "?>

    <div class="slider-conteiner">
        <div class="slideNews fade">
            <a href=""><img src="./news/oneNews.jpg" class="banner"></a>
            <div class="textNews">Caption One</div>
        </div>
        <div class="slideNews fade">
            <a href=""><img src="./news/twoNews.jpg" style="width: 100%;"></a>
            <div class="textNews">Caption Two</div>
        </div>
        <div class="slideNews fade">
            <a href=""><img src="./news/threeNews.jpg" style="width: 100%;"></a>
            <div class="textNews">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
        <a class="next" onclick="plusSlide(1)">&#10095;</a>
    </div>
    <br>
    <div style="border: solid 1px green;">
        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    
    <?php require "footer.php "?>

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="js/plagins/jquery.maskedinput.min.js"></script>
    <script src="js/burgerScript.js"></script>
    <script src="js/sliderNews.js"></script>
    <script src="js/popup.js"></script>
    
</body>
</html>