<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Dashboard</title>
    <link rel="stylesheet" href="weather_style.css">
</head>

<body>
       <!-- Loading Spinner -->
       <div id="loading-spinner" class="loading-spinner"></div>
    <div class="container">
        <h1>Weather Dashboard</h1>
        <div class="search-bar">
            <input type="text" id="city-input" placeholder="Enter city name">
            <button id="search-btn">Search</button>
        </div>
        <p id="error-message" style="color: red;"></p> <!-- Error message container -->
        <div id="weather-info">
            <h2 id="city-name"></h2>
            <div class="current-weather">
                <p id="temperature"></p>
                <p id="description"></p>
                <img id="weather-icon" src="weather.jpeg" alt="Weather Icon">
            </div>
        </div>
        <div id="forecast">
            <h3>5-Day Forecast</h3>
            <div id="forecast-container"></div>
        </div>
    </div>
    <button id="backToMainBtn">Back to Main Page</button>
    <script>
        // Check if the last visited page exists in sessionStorage
        window.onload = function () {
            const lastPage = sessionStorage.getItem('lastVisitedPage');

            // If the last visited page exists, set up the back button click event
            if (lastPage) {
                document.getElementById('backToMainBtn').onclick = function () {
                    // Redirect the user to the last visited page (main page)
                    window.location.href = lastPage;
                };
            } else {
                console.log("No last visited page found.");
            }
        };
    </script>
    <script src="weather_script.js"></script>
</body>

</html>