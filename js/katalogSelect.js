$(function(){
    let selectHeader = document.querySelectorAll('.categories__select__header');
    selectHeader.forEach(item=>{
        item.addEventListener('click',function () {
            this.parentElement.classList.toggle('active')
        })
    }
    )
 });