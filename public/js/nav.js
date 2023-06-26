
/*Menu Burger*/
let navigation_bar = document.querySelector('.navigation');
let menu_btn = document.querySelector('.menubtn');
let close_btn = document.querySelector('.closebtn');

menu_btn.addEventListener('click', function() {
    navigation_bar.classList.add('active2')
});

close_btn.addEventListener('click', function() {
    navigation_bar.classList.remove('active2')
});