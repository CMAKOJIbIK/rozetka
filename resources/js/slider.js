let temp = -100;
let start_interval = 0;
let is_slider = false;

const slider = document.querySelector(".slider");
const list = slider.querySelector(".slider_list");
const slide_default = list.querySelectorAll(".card");
const first_slide = slide_default[0].cloneNode(true);
const last_slide = slide_default[slide_default.length - 1].cloneNode(true);

list.appendChild(first_slide);
list.prepend(last_slide);

window.slider = (coordination = 0) => {
    if(is_slider){
        console.log(is_slider);
        return 0;
    }

    const slide = list.querySelectorAll(".card");


    if (coordination === 2) {
        temp += 100;
        clearInterval(start_interval);

    } else if (coordination === 1) {
        temp -= 100;
        clearInterval(start_interval);

    } else {
        temp -= 100;

    }
    if (temp === 0) {

        list.style.left = temp + "%";
        is_slider = true;
        setTimeout(()=>{
            temp = (slide.length - 2) * -100;
            list.style.transitionDuration = "0s";
            list.style.left = temp + "%";
            is_slider = false;
        },1000)

    } else if (temp === (slide.length -1) * -100 ) {
        list.style.left = temp + "%";
        is_slider = true;

        setTimeout(()=>{
            temp = -100 ;
            list.style.transitionDuration = "0s";
            list.style.left = temp + "%";
            is_slider = false;
        },1000)
    }


    // дз переход без аним.


    list.style.left = temp + "%";
    list.style.transitionDuration = "1s";
}


//Не лезть
function StartInterval() {
    start_interval = setInterval(() => {
        slider()
    }, 5000)
}

StartInterval();

//




