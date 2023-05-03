let fabar = document.querySelector(".fa-bars");
let navbar = document.querySelector(".top-level-container");
let main_menu = document.querySelector(".main-menu");
let search_box = document.querySelector(".search-box");
let logo = document.querySelector(".logo");
let isFabBtnClicked = false; 
fabar.addEventListener("click", function() {
    isFabBtnClicked  = !isFabBtnClicked;
    if(isFabBtnClicked){
        navbar.classList.remove("nav-bar");
        navbar.classList.add("top-level-container-active");
        main_menu.classList.remove("main-menu");
        main_menu.classList.add("main-menu-active");
        search_box.classList.remove("search-box");
        search_box.classList.add("search-box-active");
        logo.classList.remove("logo");
        logo.classList.add("logo-active");
    }
    else{
        navbar.classList.add("nav-bar");
        navbar.classList.remove("top-level-container-active");
        main_menu.classList.add("main-menu");
        main_menu.classList.remove("main-menu-active");
        search_box.classList.add("search-box");
        search_box.classList.remove("search-box-active");
        logo.classList.add("logo");
        logo.classList.remove("logo-active");
    }
});