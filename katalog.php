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
    <link rel="stylesheet" href="css/katalogSelect.css">
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
                        <?php require "katalogCategories.php"?>
                    </div>
                </div>
                <div class="katalog__main">
                    <div class="katalog__sort">
                        <div class="katalog__sort_line">
                            <span>Сортировать по:</span>                        
                            <input type="button" value="Популярности">
                            <input type="button" value="Рейтингу">
                            <input type="button" value="Цене">
                            <input type="button" value="Скидке">
                        </div>
                        <div class="katalog__sort_select">
                            <select name="" id="">
                                <option value="">По популярности</option>
                                <option value="">По рейтингу</option>
                                <option value="">По цене</option>
                                <option value="">По скидке</option>
                            </select> 
                            <div class="katalog__sort__burger"></div>
                        </div>
                        
                    </div>
                    <div class="katalog__goods">
                        <?php 
                        
                        for ($i=0; $i < 10; $i++) { 
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
                        <input class="btn__page" type="button" value="1">
                        <input class="btn__page" type="button" value="2">
                        <input class="btn__page" type="button" value="3">
                        ...
                        <input class="btn__page" type="button" value="4">
                        <input class="btn__page" type="button" value=">">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="katalog__sort__burger__menu">
        <div class="katalog__sort__burger__menu_exit"></div>
        <span class="name__katalog__categories__burgher">Фильтры</span>
        <div class="katalog__categories__burgher">            
        <?php require "katalogCategories.php"?>
        </div>
    </div>

    <?php require "footer.php "?>
    

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="js/burgerScript.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/katalogSelect.js"></script>
</body>
</html>