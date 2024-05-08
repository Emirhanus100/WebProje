// Resim Kaydırıcı

const Resimler = document.querySelectorAll(".sliderKuşResimleri img");
let slideIndex = 0;
let intervalId = null;

document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider(){
    if(Resimler.length > 0){
        Resimler[slideIndex].classList.add("displaySlide");
        intervalId = setInterval(nextSlide, 5000);
    }
}

function showSlide(index){
    if(index >= Resimler.length){
        slideIndex = 0;
    }
    else if(index < 0){
        slideIndex = Resimler.length - 1;
    }

    Resimler.forEach(resimliste => {
        resimliste.classList.remove("displaySlide");
    });
    Resimler[slideIndex].classList.add("displaySlide");
}

function OncekiSlide(){
    clearInterval(intervalId);
    slideIndex--;
    showSlide(slideIndex);
}

function SonrakiSlide(){
    slideIndex++;
    showSlide(slideIndex);
}

