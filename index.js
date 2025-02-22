const gallery = document.getElementById("gallery");
const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");
const items = document.querySelectorAll(".gallery-item");

let totalItems = items.length;
let currentIndex = 0; // Track current image index
let itemWidth = items[0].offsetWidth; // Get the width of each image

function updateGallery() {
    gallery.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
}

// Move to the next image
nextButton.addEventListener("click", () => {
    if (currentIndex < totalItems - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Reset to the first image when at the end
    }
    updateGallery();
});

// Move to the previous image
prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalItems - 1; // Go to the last image when at the start
    }
    updateGallery();
});

// Optionally, update gallery on window resize
window.addEventListener('resize', () => {
    itemWidth = items[0].offsetWidth; // Recalculate item width
    updateGallery();
});
