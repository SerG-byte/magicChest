<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/katalog.css">
    <title>Каталог</title>
</head>
<body>
    <?php require "header.php "?>

    <div class="main__katalog__container">
        <div class="katalog_container">
            <div class="katalog__title">Каталог</div>
            <div class="katalog__content">
                <div class="katalog__navigation">
                    <div class="katalog__search">
                    <input type="text" name="" id="search" placeholder="Поиск">
                    </div>
                    <div class="katalog__categories">
                        <p>categories</p>
                        <p>categories</p>
                        <p>categories</p>
                        <p>categories</p>
                        <p>categories</p>
                        <p>categories</p>
                    </div>
                </div>
                <div class="katalog__main">
                    <div class="katalog__sort">
                        Сортировать по:
                        <a>Популярности</a>
                        <a>Рейтингу</a>
                        <a>Цене</a>
                        <a>Скидке</a>
                    </div>
                    <div class="katalog__goods">
                        <?php 
                        
                        for ($i=0; $i < 100; $i++) { 
                            echo"
                            <div class=\"product\">
                            
                            <div class=\"product__wallpaper\">
                                <img src=\"img/pruduct/ProductBackground.jpg\" width=\"100%\" height=\"200px\">
                            </div>
                            <div class=\"product__sell\">
                                4000руб
                            </div>
                            <div class=\"product__name\">
                                Альбом \"Сказка\"
                            </div>
                            <div class=\"product__score\">
                                &#9733;&#9734;&#9734;&#9734;&#9734; 1
                            </div>
                            <div class=\"product__buttons\">
                                <input type=\"button\" value=\"В корзину\" class=\"product_btn\">
                                <input type=\"button\" value=\"♥\" class=\"product_btn btn-r\">
                            </div> 
                            </div>
                            ";
                        }
                        
                        ?>
                        <div class="product">
                            
                            <div class="product__wallpaper">
                                <img src="img/pruduct/ProductBackground.jpg" width="80%" height="200px">
                            </div>
                            <div class="product__sell">
                                4000руб
                            </div>
                            <div class="product__name">
                                Альбом "Сказка"
                            </div>
                            <div class="product__score">
                                &#9733;&#9734;&#9734;&#9734;&#9734; 1
                            </div>
                            <div class="product__buttons">
                                <input type="button" value="В корзину" class="product_btn">
                                <input type="button" value="♥" class="product_btn btn-r">
                            </div> 
                        </div>
                        




                    </div>
                    <div class="katalog__pages">
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        ...
                        <a href="">-></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <?php require "footer.php "?>
    

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="js/burgerScript.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>