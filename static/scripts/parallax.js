heros = document.querySelectorAll(".hero");
hero_container = document.querySelector(".hero-container");

 
hero_container.addEventListener("mousemove", function(e){
    for(let i = 2; i < heros.length; i++){
        const speed = heros[i].getAttribute('data-speed')
        const x = (window.innerWidth - e.pageX * speed) / 100
        const y = (window.innerHeight - e.pageY * speed) / 100
        heros[i].style.transform = `translateX(${x*-1}px) translateY(${y}px)`
    }
});

window.addEventListener("resize", function(e){
    const width = window.innerWidth; 
    if(width < 1600){
        hero_container.innerHTML = "";
        hero_container.innerHTML = "<image class='hero-static' src='static/imgs/hero parallax_2/hero section.png'>" +
                                    "<div class='hero-info'>" +
                                    "<div id='post-title'>Anual learning module 2023</div>" +
                                    "<div id='hero-title'>Best programming practice</div>" +
                                    "<div id='hero-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>"
                                    "<div id='hero-reg'>Sign up</div></div>";
    }
    if(width < 900){
        let hero_static = document.querySelector(".hero-static");
        console.log(hero_static.src);
        hero_static.src="static/imgs/hero parallax_2/hero section-6.png"
    }
});


window.addEventListener("load", function(e){
    const width = window.innerWidth; 
    if(width < 1600){
        hero_container.innerHTML = "";
        hero_container.innerHTML = "<image class='hero-static' src='static/imgs/hero parallax_2/hero section.png'>";
    }
    if(width < 900){
        let hero_static = document.querySelector(".hero-static");
        console.log(hero_static.src);
        hero_static.src="static/imgs/hero parallax_2/hero section-6.png"
    }
});


window.addEventListener("scroll", function(e){
    const height = window.innerHeight;
    let top_container = document.querySelector(".top-level-container");
    let wasChanged = false;
    console.log(window.scrollY);
    if(((window.scrollY) >= height * 0.2) && wasChanged == false){
        top_container.classList.remove(".top-level-container");
        top_container.classList.add("top-level-container-scroll");
        wasChanged = true;
    }
    else if(((window.scrollY) < height * 0.2)){
        top_container.classList.remove("top-level-container-scroll");
        top_container.classList.add("top-level-container");
        wasChanged = false;
    }
});
 
