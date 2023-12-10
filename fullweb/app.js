const page = document.querySelector('.page');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click',()=> {
    page.classList.add('active');
    });
loginLink.addEventListener('click', ()=> {
    page.classList.remove('active');
});
btnPopup.addEventListener('click', ()=> {
    page.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    page.classList.remove('active-popup');
});



