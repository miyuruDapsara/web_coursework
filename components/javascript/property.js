let propertyFloorContent = document.querySelectorAll(".property-floor-content");

for (let i = 0; i < propertyFloorContent.length; i++) {
    propertyFloorContent[i].addEventListener("click", (e) => {

        propertyFloorContent.forEach((element) => {
            element.classList.remove("active");
        });
        e.currentTarget.classList.add("active");

    });
}


let images = document.querySelectorAll(".property-header-image img");
let currentImageIndex = 0;
let intervalId;

images[currentImageIndex].classList.add("active");

function slideShow() {
    images.forEach((img) => {
        img.classList.remove("active");
    });

    currentImageIndex = (currentImageIndex + 1) % images.length;
    images[currentImageIndex].classList.add("active");
}

function startSlideShow() {
    intervalId = setInterval(slideShow, 3000); 
}

function stopSlideShow() {
    clearInterval(intervalId);
}

document.querySelector(".property-arrow-right").addEventListener("click", () => {
    stopSlideShow();
    slideShow();
    startSlideShow();
});

document.querySelector(".property-arrow-left").addEventListener("click", () => {
    stopSlideShow();
    images[currentImageIndex].classList.remove("active");
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    images[currentImageIndex].classList.add("active");
    startSlideShow();
});

document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") {
        stopSlideShow();
        slideShow();
        startSlideShow();
    } else if (e.key === "ArrowLeft") {
        stopSlideShow();
        images[currentImageIndex].classList.remove("active");
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        images[currentImageIndex].classList.add("active");
        startSlideShow();
    }
});

startSlideShow();
