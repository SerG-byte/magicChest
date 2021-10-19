<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">


    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header_popup.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Регистрация</title>
</head>
<body>
<?php require "header.php"?>

    <div class="reg__window">
        <div class="content__registration">
            <div class="content__head">
                <h2>Регистрация</h2>                
            </div>
            <div class="content__body">
                <form action="" class="reg__form">
                    <div class="reg_text">Имя пользователя</div>                    
                    <input type="text" name="" id="" placeholder="login" required>
                    <div class="reg_text">Email aдрес</div>   
                    <input type="email" name="" id="email" placeholder="email" required>
                    <div class="reg_text">Номер телефона</div>   
                    <input type="text" name="" id="phone" placeholder="phone">
                    <div class="reg_text">Пароль</div>   
                    <input type="password" name="" id="" placeholder="password" required>
                    <div class="reg_text">Подтвердите пароль</div>   
                    <input type="password" name="" id="" placeholder="repeat password" required>
                    

                    <input type="submit" value="Создать аккаунт">
                    <div class="reg_text"><a href="">Забыли пароль?</a></div> 
                </form>
            </div>
            
        </div>
    </div>


    <?php require "footer.php "?>

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="js/plagins/jquery.maskedinput.min.js"></script>
    <script src="js/burgerScript.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/popup.js"></script>

</body>
</html>