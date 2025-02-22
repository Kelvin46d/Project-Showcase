


// function navigateToProject(url) {
//     window.location.href = url;
// }



// }




// // Function to navigate to a project and store the current URL in sessionStorage
// function navigateToProject(url) {
//     // Log the current URL
//     console.log("Navigating to project:", window.location.href);
    
//     // Store the current page URL in sessionStorage before navigating
//     sessionStorage.setItem('lastVisitedPage', window.location.href);
    
//     // Navigate to the project page
//     window.location.href = url;
// }



// Check if the last visited page exists in sessionStorage
window.onload = function() {
    const lastPage = sessionStorage.getItem('lastVisitedPage');

    // If the last visited page exists, set up the back button click event
    if (lastPage) {
        document.getElementById('backToMainBtn').onclick = function() {
            // Redirect the user to the last visited page (main page)
            window.location.href = lastPage;
        };
    } else {
        console.log("No last visited page found.");
    }
};

// Function to navigate to a project and store the current URL in sessionStorage
function navigateToProject(url) {
    console.log("Navigating to project:", window.location.href);
    sessionStorage.setItem('lastVisitedPage', window.location.href);
    window.location.href = url;
}

// // Check for last visited page and display a back button if on a project page
// window.onload = function () {
//     const lastPage = sessionStorage.getItem('lastVisitedPage');
//     console.log("Last visited page:", lastPage);

//     if (lastPage && window.location.href.includes('Project')) {
//         if (!document.getElementById('backToMainBtn')) {
//             const backButton = document.createElement('button');
//             backButton.id = 'backToMainBtn';
//             backButton.innerHTML = 'Back to Main Page';
//             backButton.style.position = 'fixed';
//             backButton.style.top = '10px';
//             backButton.style.left = '10px';
//             backButton.style.padding = '10px 20px';
//             backButton.style.backgroundColor = '#007BFF';
//             backButton.style.color = '#fff';
//             backButton.style.border = 'none';
//             backButton.style.cursor = 'pointer';
//             backButton.style.zIndex = '1000';
//             backButton.onclick = function () {
//                 console.log("Redirecting to:", lastPage);

//                 window.location.href = lastPage;
//             };

//             document.body.appendChild(backButton);
//         }
//     } else {
//         console.log("No last visited page found or not on a project page.");
//     }
// };