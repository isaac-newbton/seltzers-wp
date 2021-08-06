(function(){
    document.addEventListener('DOMContentLoaded', function(){
        const navMenu = document.getElementById('header_menu'), navMenuToggle = document.getElementById('header_menu_toggle');
        if(navMenu && navMenuToggle){
            navMenuToggle.addEventListener('click', function(){
                navMenu.classList.toggle('active');
            });
        }
    })
}());