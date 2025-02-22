// // Hardcoded weather data for 5 cities
// const weatherData = [
//   {
//     city: "New York",
//     temp: 18,
//     description: "Cloudy",
//     icon: "04d",
//     forecast: [
//       { date: "2024-10-23", temp: 17, icon: "04d" },
//       { date: "2024-10-24", temp: 16, icon: "01d" },
//       { date: "2024-10-25", temp: 15, icon: "03d" },
//       { date: "2024-10-26", temp: 14, icon: "02d" },
//       { date: "2024-10-27", temp: 12, icon: "04d" },
//     ],
//   },

//   {
//     city: "London",
//     temp: 12,
//     description: "Rainy",
//     icon: "09d",
//     forecast: [
//       { date: "2024-10-23", temp: 11, icon: "09d" },
//       { date: "2024-10-24", temp: 12, icon: "10d" },
//       { date: "2024-10-25", temp: 14, icon: "04d" },
//       { date: "2024-10-26", temp: 13, icon: "03d" },
//       { date: "2024-10-27", temp: 11, icon: "09d" },
//     ],
//   },
//   {
//     city: "Tokyo",
//     temp: 20,
//     description: "Sunny",
//     icon: "01d",
//     forecast: [
//       { date: "2024-10-23", temp: 22, icon: "01d" },
//       { date: "2024-10-24", temp: 21, icon: "01d" },
//       { date: "2024-10-25", temp: 19, icon: "02d" },
//       { date: "2024-10-26", temp: 18, icon: "03d" },
//       { date: "2024-10-27", temp: 20, icon: "01d" },
//     ],
//   },
//   {
//     city: "Sydney",
//     temp: 25,
//     description: "Sunny",
//     icon: "01d",
//     forecast: [
//       { date: "2024-10-23", temp: 26, icon: "01d" },
//       { date: "2024-10-24", temp: 25, icon: "01d" },
//       { date: "2024-10-25", temp: 24, icon: "02d" },
//       { date: "2024-10-26", temp: 23, icon: "03d" },
//       { date: "2024-10-27", temp: 22, icon: "01d" },
//     ],
//   },
//   {
//     city: "Paris",
//     temp: 15,
//     description: "Partly Cloudy",
//     icon: "02d",
//     forecast: [
//       { date: "2024-10-23", temp: 14, icon: "02d" },
//       { date: "2024-10-24", temp: 13, icon: "03d" },
//       { date: "2024-10-25", temp: 12, icon: "04d" },
//       { date: "2024-10-26", temp: 15, icon: "01d" },
//       { date: "2024-10-27", temp: 16, icon: "02d" },
//     ],
//   },

//   {
//     city: "Dublin",
//     temp: 15,
//     description: "Partly Cloudy",
//     icon: "02d",
//     forecast: [
//       { date: "2024-10-23", temp: 14, icon: "02d" },
//       { date: "2024-10-24", temp: 13, icon: "03d" },
//       { date: "2024-10-25", temp: 12, icon: "04d" },
//       { date: "2024-10-26", temp: 15, icon: "01d" },
//       { date: "2024-10-27", temp: 16, icon: "02d" },
//     ],
//   },
// ];

// // Event listener for the search button
// document.getElementById("search-btn").addEventListener("click", () => {
//   const city = document.getElementById("city-input").value.trim();
//   if (city) {
//     displayWeatherData(city);
//   }
// });

// //Function to display weather data based on the hardcoded array
// function displayWeatherData(city) {
//   const cityWeather = weatherData.find(
//     (data) => data.city.toLowerCase() === city.toLowerCase()
//   );

//   if (cityWeather) {
//     updateWeatherUI(cityWeather);
//     updateForecastUI(cityWeather.forecast);
//   } else {
//     alert("City not found in hardcoded data!");
//   }
// }

// // Function to update the weather information on the UI
// function updateWeatherUI(data) {
//   document.getElementById("city-name").textContent = data.city;
//   document.getElementById("temperature").textContent = `${data.temp}°C`;
//   document.getElementById("description").textContent = data.description;
//   document.getElementById(
//     "weather-icon"
//   ).src = `http://openweathermap.org/img/wn/${data.icon}@2x.png`;
// }

// // Function to update the 5-day forecast on the UI
// function updateForecastUI(forecast) {
//   const forecastContainer = document.getElementById("forecast-container");
//   forecastContainer.innerHTML = ""; // Clear previous forecast data

//   forecast.forEach((day) => {
//     const forecastEl = document.createElement("div");
//     forecastEl.classList.add("forecast-day");

//     forecastEl.innerHTML = `
//             <p>${day.date}</p>
//             <img src="http://openweathermap.org/img/wn/${day.icon}@2x.png" alt="Weather Icon">
//             <p>${day.temp}℃</p>
//         `;

//     forecastContainer.appendChild(forecastEl);
//   });
// }
// Set up event listener for the search button
// Event listener for the search button

// document.getElementById('search-btn').addEventListener('click', async function () {
//     const city = document.getElementById('city-input').value.trim();
//     const errorMessage = document.getElementById('error-message');
//     const loadingSpinner = document.getElementById('loading-spinner');
//     const weatherIcon = document.getElementById('weather-icon');

//     // Show loading spinner and apply animation to weather icon
//     loadingSpinner.style.display = "block";
//     weatherIcon.classList.add('spinning');

//     if (city === "") {
//         errorMessage.textContent = "Please enter a city name.";
//         loadingSpinner.style.display = "none"; // Hide spinner on error
//         weatherIcon.classList.remove('spinning');
//         return;
//     }

//     // Clear error message
//     errorMessage.textContent = "";

//     try {
//         const weatherData = await fetchWeatherData(city);
//         if (weatherData) {
//             displayWeatherData(weatherData);
//         } else {
//             errorMessage.textContent = "City not found. Please try again.";
//         }
//     } catch (error) {
//         console.error(error);
//         errorMessage.textContent = "Unable to fetch weather data. Please try again later.";
//     } finally {
//         loadingSpinner.style.display = "none"; // Hide spinner
//         weatherIcon.classList.remove('spinning'); // Stop icon spinning
//     }
// });

// // Fetch weather data from OpenWeatherMap API
// async function fetchWeatherData(city) {
//     const apiKey = "06255a07291b6b524896e70cbfffec3b"; // Replace with your API key
//     try {
//         const weatherRes = await fetch(
//             `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`
//         );
//         const forecastRes = await fetch(
//             `https://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&appid=${apiKey}`
//         );

//         if (!weatherRes.ok || !forecastRes.ok) return null;

//         const currentWeather = await weatherRes.json();
//         const forecastData = await forecastRes.json();

//         return { currentWeather, forecastData };
//     } catch (err) {
//         console.error("Error fetching data:", err);
//         return null;
//     }
// }

// // Display weather and forecast data
// function displayWeatherData(data) {
//     const current = data.currentWeather;
//     const forecast = data.forecastData.list.slice(0, 5);

//     // Update current weather
//     document.getElementById('city-name').textContent = current.name;
//     document.getElementById('temperature').textContent = `${Math.round(current.main.temp)}°C`;
//     document.getElementById('description').textContent = current.weather[0].description;
//     const iconUrl = `http://openweathermap.org/img/wn/${current.weather[0].icon}@2x.png`;
//     const icon = document.getElementById('weather-icon');
//     icon.src = iconUrl;
//     icon.style.display = "block";

//     // Update forecast
//     const forecastContainer = document.getElementById('forecast-container');
//     forecastContainer.innerHTML = "";

//     forecast.forEach(day => {
//         const forecastElement = document.createElement('div');
//         forecastElement.classList.add('forecast-day');

//         forecastElement.innerHTML = `
//             <p>${new Date(day.dt_txt).toLocaleDateString()}</p>
//             <img src="http://openweathermap.org/img/wn/${day.weather[0].icon}@2x.png" alt="Weather Icon">
//             <p>${Math.round(day.main.temp)}°C</p>
//         `;

//         forecastContainer.appendChild(forecastElement);
//     });
// }
document.getElementById('search-btn').addEventListener('click', async function () {
    const city = document.getElementById('city-input').value.trim();
    const errorMessage = document.getElementById('error-message');
    const loadingSpinner = document.getElementById('loading-spinner');
    const weatherIcon = document.getElementById('weather-icon');

    // Show loading spinner and apply animation to weather icon
    loadingSpinner.style.display = "block";
    weatherIcon.classList.add('spinning');

    if (city === "") {
        errorMessage.textContent = "Please enter a city name.";
        loadingSpinner.style.display = "none"; // Hide spinner on error
        weatherIcon.classList.remove('spinning');
        return;
    }

    // Clear error message
    errorMessage.textContent = "";

    try {
        const weatherData = await fetchWeatherData(city);
        if (weatherData) {
            displayWeatherData(weatherData);
        } else {
            errorMessage.textContent = "City not found. Please try again.";
        }
    } catch (error) {
        console.error(error);
        errorMessage.textContent = "Unable to fetch weather data. Please try again later.";
    } finally {
        loadingSpinner.style.display = "none"; // Hide spinner
        weatherIcon.classList.remove('spinning'); // Stop icon spinning
    }
});

// Fetch weather data from OpenWeatherMap API
async function fetchWeatherData(city) {
    const apiKey = "80442178e4497c8e8cd2bd86d35bcfac"; // Replace with your API key
    try {
        const weatherRes = await fetch(
            `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`
        );
        const forecastRes = await fetch(
            `https://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&appid=${apiKey}`
        );

        if (!weatherRes.ok || !forecastRes.ok) return null;

        const currentWeather = await weatherRes.json();
        const forecastData = await forecastRes.json();

        return { currentWeather, forecastData };
    } catch (err) {
        console.error("Error fetching data:", err);
        return null;
    }
}

// Update body background class based on weather condition
function updateBackgroundBasedOnWeather(weatherCondition) {
    const body = document.body;

    // Remove any existing weather classes
    body.classList.remove('sunny', 'rainy', 'cloudy');

    // Add the appropriate class based on the weather condition
    if (weatherCondition.includes("clear")) {
        body.classList.add('sunny');
    } else if (weatherCondition.includes("rain") || weatherCondition.includes("drizzle") || weatherCondition.includes("thunderstorm")) {
        body.classList.add('rainy');
    } else if (weatherCondition.includes("cloud")) {
        body.classList.add('cloudy');
    }
}

// Display weather and forecast data
function displayWeatherData(data) {
    const current = data.currentWeather;
    const forecast = data.forecastData.list;  // All 3-hour intervals for the next 5 days

    // Update current weather
    document.getElementById('city-name').textContent = current.name;
    document.getElementById('temperature').textContent = `${Math.round(current.main.temp)}°C`;
    document.getElementById('description').textContent = current.weather[0].description;
    const iconUrl = `http://openweathermap.org/img/wn/${current.weather[0].icon}@2x.png`;
    const icon = document.getElementById('weather-icon');
    icon.src = iconUrl;
    icon.style.display = "block";

    // Dynamically update background based on weather condition
    const weatherCondition = current.weather[0].description.toLowerCase();
    updateBackgroundBasedOnWeather(weatherCondition);

    // Update 5-day forecast
    const forecastContainer = document.getElementById('forecast-container');
    forecastContainer.innerHTML = "";

    // Group forecasts by day to ensure each day only appears once
    let daysForecast = {};
    forecast.forEach(day => {
        const date = new Date(day.dt_txt);
        const dayString = date.toLocaleDateString(); // Use the date string to group by day

        // Only store the first entry for each date (i.e., first forecast of the day)
        if (!daysForecast[dayString]) {
            daysForecast[dayString] = day;
        }
    });

    // Now display the forecast for each unique day (up to 5 days)
    const dayEntries = Object.values(daysForecast).slice(0, 5); // Limit to 5 days

    dayEntries.forEach(day => {
        const forecastElement = document.createElement('div');
        forecastElement.classList.add('forecast-day');

        const date = new Date(day.dt_txt);

        // Format date to include weekday, month, day, and year
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = date.toLocaleDateString('en-US', options);

        // Insert date, weather icon, and temperature
        forecastElement.innerHTML = `
            <p>${formattedDate}</p>
            <img src="http://openweathermap.org/img/wn/${day.weather[0].icon}@2x.png" alt="Weather Icon">
            <p>${Math.round(day.main.temp)}°C</p>
        `;
        
        forecastContainer.appendChild(forecastElement);
    });
}
