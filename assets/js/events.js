class MobileNavBar {
    constructor(mobileMenu, navList, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.navLinks.forEach((link, index) => {
        link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = 'navLinkFade 0.9s ease forwards 0.1s');
        });
    }

    handleClick(){
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }
    init() {
        if (this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavBar = new MobileNavBar(
    '.mobile-menu',
    '.nav-list',
    '.nav-list li',
);
mobileNavBar.init();


/* menu */



var buttonB = document.getElementById("action-btnB");

buttonB.addEventListener("click", function(){
    
    var containerB = document.getElementById("containerB");

    containerB.classList.toggle("hide");
})

var button = document.getElementById("action-btn");

button.addEventListener("click", function(){
    
    var container = document.getElementById("container");

    container.classList.toggle("hide");
})

/* SLIDE */

