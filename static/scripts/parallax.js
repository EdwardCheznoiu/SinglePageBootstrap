heros = document.querySelectorAll(".hero");
hero_container = document.querySelector(".hero-container");

 
hero_container.addEventListener("mousemove", function(e){
    for(let i = 2; i < heros.length; i++){
        const speed = heros[i].getAttribute('data-speed')
        const x = (window.innerWidth - e.pageX * speed) / 200
        const y = (window.innerHeight - e.pageY * speed) / 200
        heros[i].style.transform = `translateX(${x*-1}px) translateY(${y}px)`
    }
});

window.addEventListener("resize", function(e){
    const width = window.innerWidth; 
    console.log(width);
});
 
