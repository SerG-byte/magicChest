const popupLink = document.querySelector('.popup_link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true;

const timeout = 500;

popupLink.addEventListener("mousedown",function(e){
    console.log("hello");
    const curentPopup = document.getElementById('popup');
    popupOpen(curentPopup);
    e.preventDefault();
});

function popupOpen(curentPopup){
    if (curentPopup && unlock) {
        
        bodyLock();
        $('body').toggleClass('lock');
        curentPopup.classList.add('open');
        curentPopup.addEventListener("mousedown", function(e){
            if (!e.target.closest('.popup_content')) {
                popupClose(e.target.closest('.popup'));
            }
        });
    }
}

const popupCloseIcon = document.querySelector('.close-popup');
popupCloseIcon.addEventListener("mousedown",function(e){
    popupClose(popupCloseIcon.closest('.popup'));
    e.preventDefault();
});

function popupClose(popupActive) {
    if (unlock) {
        bodyLock();
        popupActive.classList.remove('open');
    }    
}
function bodyLock() {
    unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
}
