// // Get modal element
// const modal = document.getElementById("myModal");
// // Get open button
// const openModalButton = document.getElementById("openModal");
// // Get close button
// const closeModalButton = document.querySelector(".close");

// // Open modal
// openModalButton.addEventListener("click", () => {
//     modal.style.display = "block";
// });

// // Close modal when "X" is clicked
// closeModalButton.addEventListener("click", () => {
//     modal.style.display = "none";
// });

// // Close modal when clicking outside the modal content
// window.addEventListener("click", (event) => {
//     if (event.target === modal) {
//         modal.style.display = "none";
//     }
// });

// Get modal elements
const modal = document.getElementById("myModal");
const openModalButton = document.getElementById("openModal");
const closeModalButton = document.querySelector(".close");
const actionButton = document.getElementById("actionButton");

// Function to open the modal
function openModal() {
    modal.style.display = "block";
    modal.setAttribute("aria-hidden", "false");
    closeModalButton.focus();
}

// Function to close the modal
function closeModal() {
    modal.style.display = "none";
    modal.setAttribute("aria-hidden", "true");
}

// Open modal event
openModalButton.addEventListener("click", openModal);

// Close modal event
closeModalButton.addEventListener("click", closeModal);

// Close modal when clicking outside the modal content
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

// Close modal with ESC key
window.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && modal.style.display === "block") {
        closeModal();
    }
});

// Example action button functionality
actionButton.addEventListener("click", () => {
    alert("Action button clicked!");
    closeModal();
});


// let popup=document.getElementById("popup");


// function openPopup(){
//     popup.classList.add("open-popup");

// }
// function closePopup(){
//     popup.classList.remove("open-popup");
// }

