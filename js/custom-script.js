
var currentIndex = 0;
var images = document.querySelectorAll('.column img');
var expandImg = document.getElementById("expandedImg");
var imgText = document.getElementById("imgtext");

function startSlideshow() {
    setTimeout(showNextImage, 3000); // Change the interval as needed (3000 milliseconds = 3 seconds)
}

function showNextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    expandImg.src = images[currentIndex].src;
    imgText.innerHTML = images[currentIndex].alt;
    setTimeout(showNextImage, 3000); // Continue the slideshow
}

function stopSlideshow() {
    currentIndex = 0;
    expandImg.parentElement.style.display = "none";
}

function myFunction(imgs) {
    stopSlideshow(); // Stop the slideshow when a user clicks on an image
    currentIndex = Array.from(images).indexOf(imgs);
    expandImg.src = images[currentIndex].src;
    imgText.innerHTML = images[currentIndex].alt;
    expandImg.parentElement.style.display = "block";
}

// Start the slideshow initially
startSlideshow();
