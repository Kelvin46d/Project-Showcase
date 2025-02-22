// Contact button event listener
// document.getElementById('contactBtn').addEventListener('click', () => {
//   alert("Contact form will be available soon!");
// });


// Toggle the visibility of the contact form
document.addEventListener("DOMContentLoaded", function () {
  const contactBtn = document.getElementById("contactBtn");
  const contactForm = document.getElementById("contactForm");
  const closeFormBtn = document.getElementById("closeFormBtn");
  const backToMainBtn = document.getElementById("backToMainBtn");

  // Show the contact form when "Contact Me" button is clicked
  contactBtn.addEventListener("click", function () {
    contactForm.style.display = "block";
  });

  // Hide the contact form when the "X" button is clicked
  closeFormBtn.addEventListener("click", function () {
    contactForm.style.display = "none";
  });

  // Check if the last visited page exists in sessionStorage
  const lastPage = sessionStorage.getItem("lastVisitedPage");

  // Redirect back to the main page or alert if no previous page exists
  backToMainBtn.addEventListener("click", function () {
    if (lastPage) {
      // Redirect to the stored page
      window.location.href = lastPage;
    } else {
      // Default fallback action if no last visited page exists
      alert("No previous page found. Redirecting to the homepage.");
      window.location.href = "main.php";
    }
  });
});
