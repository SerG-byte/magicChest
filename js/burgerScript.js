$(document).ready(function(){
    $('.header_burger,.burger_menu_exit').click(function(event){
        $('.header_burger,.burger_menu,.burger_menu_exit').toggleClass('active');
        $('body').toggleClass('lock');
    });
});


$(document).ready(function(){
    $('.katalog__sort__burger,.katalog__sort__burger__menu_exit').click(function(event){
        $('.katalog__sort__burger__menu,.katalog__sort__burger__menu_exit,.name__katalog__categories__burgher').toggleClass('active');
        $('body').toggleClass('lock');
    });
});



