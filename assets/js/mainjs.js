
    const carrusel = document.querySelector(".carrusel");
    
    let intervalo = null;
    let maxScrollLeft = carrusel.scrollWidth -  carrusel.clientWidth;
    let step = 1;

    const start = () =>{
        intervalo = setInterval(function(){
            carrusel.scrollLeft  = carrusel.scrollLeft + step;
            if(carrusel.scrollLeft === maxScrollLeft){
                step = step * -1;
                console.log(carrusel.scrollLeft);

            }else if(carrusel.scrollLeft === 0){
                step = step * -1;
            }
        }, 10);
    }

    const stop = () => {
        clearInterval(intervalo);
    }

    carrusel.addEventListener("mouseover", () => { stop(); });
    carrusel.addEventListener("mouseout", () => { start(); });

    start();

