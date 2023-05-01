// объявление переменных через var вместо let/const, 
// потому что использовать Babel и Webpack для 20 строк избыточно

document.addEventListener("DOMContentLoaded", function (event) {
    var text = document.querySelector('.text');
    var firstBtn = document.querySelector('.btn-first');
    var secondBtn = document.querySelector('.btn-second');
    var isBtnClicked = false;

    if (firstBtn) {
        firstBtn.addEventListener('click', function () {
            isBtnClicked = !isBtnClicked;
            firstBtn.classList.toggle("btn--clicked");
        })
    }

    if (secondBtn && text) {
        secondBtn.addEventListener('click', function () {
            if (isBtnClicked) {
                text.classList.toggle("text--hide");
            }
        })
    }
});