$(document).ready(function(){
    $('.header_burger,.burger_menu_exit').click(function(event){
        $('.header_burger,.burger_menu,.burger_menu_exit').toggleClass('active');
        $('body').toggleClass('lock');
    });
});