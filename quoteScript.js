// Select all radio buttons for the journey options
let journeyButtons = document.getElementsByName("journey");
let form = document.querySelector(".form-quote-container");

// Function to toggle visibility of the return date fields based on the journey selection
for (const journey of journeyButtons) {
    journey.addEventListener("change", () => {
        let selectedJourney = document.querySelector('input[name="journey"]:checked');
        let spunmeDiv = document.getElementById("spunme");

        if (selectedJourney && selectedJourney.id === "return") {
            spunmeDiv.removeAttribute("hidden"); // Show return date fields
        } else {
            spunmeDiv.setAttribute("hidden", ""); // Hide return date fields
        }
    });
}

// Function to validate email format
function isValidEmail(email) {
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

// Function to validate phone number format (digits, +, -, spaces)
function isValidPhone(phone) {
    let phonePattern = /^[\d\+\-\(\)\ ]{7,15}$/;
    return phonePattern.test(phone);
}

// Function to show error messages next to fields
function showError(input, message) {
    const errorElement = document.getElementById(input.id + '-error');
    errorElement.textContent = message;
    input.classList.add('error'); // Add an error class for styling
}

// Function to clear error messages next to fields
function clearError(input) {
    const errorElement = document.getElementById(input.id + '-error');
    errorElement.textContent = '';
    input.classList.remove('error'); // Remove error class
}

// Main form validation function
function validateForm(event) {
    // Prevent form submission to allow validation
    event.preventDefault();

    // Get all input values
    let fullname = document.getElementById("name-1");
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");
    let eventType = document.getElementById("event-select");
    let passengers = document.getElementById("number-of-Passgers");
    let journey = document.querySelector('input[name="journey"]:checked');
    let travelDate = document.getElementById("date-of-travel");
    let travelTime = document.getElementById("timeOfTravel");

    // Clear previous error messages
    clearError(fullname);
    clearError(email);
    clearError(phone);
    clearError(eventType);
    clearError(passengers);

    // Validation logic
    let isValid = true; // Tracks form validity

    if (!fullname.value.trim()) {
        showError(fullname, "Please enter your full name.");
        isValid = false;
    }
    if (!isValidEmail(email.value.trim())) {
        showError(email, "Please enter a valid email address.");
        isValid = false;
    }
    if (!isValidPhone(phone.value.trim())) {
        showError(phone, "Please enter a valid phone number (at least 7 characters).");
        isValid = false;
    }
    if (!eventType.value.trim()) {
        showError(eventType, "Please select an event type.");
        isValid = false;
    }
    if (isNaN(passengers.value) || passengers.value <= 0) {
        showError(passengers, "Please enter a valid number of passengers.");
        isValid = false;
    }
    if (!journey) {
        alert("Please select a journey type."); // Optionally show an alert for radio buttons
        isValid = false;
    }
    if (!travelDate.value.trim()) {
        showError(travelDate, "Please select a travel date.");
        isValid = false;
    }
    if (!travelTime.value.trim()) {
        showError(travelTime, "Please select a travel time.");
        isValid = false;
    }

    // If all fields are valid, submit the form
    if (isValid) {
        form.submit();
    }
}

// Attach the validation function to the form's submit event
form.addEventListener("submit", validateForm);
