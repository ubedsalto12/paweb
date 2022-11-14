var tombolNav = $(".tombol-nav");
var menu = $("nav .navbar ul");

function klikNav(){
    tombolNav.click(function(){
        menu.toggle();
    });
    menu.click(function(){
        menu.toggle();
    });
}

$(document).ready(function(){
    var width = $(window).width();
    // alert('lebar' + width);
    if(width < 990){
        klikNav();
    }
})
$(window).resize(function(){
    var width = $(window).width();
    if(width> 989){
        menu.css("display", "block");

    }else{
        menu.css("display","none");
    }
    klikNav();
});

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}