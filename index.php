<?php  // Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDAYA HIRE</title>

    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="./indexSheet.css">

</head>

<body>

    <?php
    include './header.php';
    ?>

    <div class="background-image">
        <h1>Leading Mini Bus Hire & Transfers Across The Nation</h1>
        <p class="para">Whether it's a special event, a concert, or transfers to the airport, we have got you covered.</p>
        <div class="account-quote">
            <a href="./signUp.php" class="fixed-top-right">Account</a>
            <a href="./quickQuote.php" class="top-left">Get A Quote</a>
        </div>
    </div>

    <main class="mainContainer">
        <h2>We Make Your Journey Easier And Comfortable</h2>
        <p>
            NDAYA HIRE is a leading transportation service provider offering a wide range of transportation options for
            all occasions. From airport transfers to city tours, weddings, and corporate events, our fleet is equipped
            with modern amenities and handled by experienced drivers. We pride ourselves on safety, reliability, and
            affordable pricing.
        </p>

        <section class="hero">
            <div class="hero-content">
                <h1>INDUSTRY LEADER</h1>
                <p>IN PASSENGER TRANSPORTATION</p>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-container">
            <button id="prev" class="nav-button">Prev</button>
            <div class="gallery" id="gallery">
                <div class="gallery-item"><img src="./image/image1.jpg" alt="Gallery Image 1"></div>
                <div class="gallery-item"><img src="./image/image2.jpg" alt="Gallery Image 2"></div>
                <div class="gallery-item"><img src="./image/image3.jpg" alt="Gallery Image 3"></div>
                <div class="gallery-item"><img src="./image/image4.jpg" alt="Gallery Image 4"></div>
                <div class="gallery-item"><img src="./image/image5.jpg" alt="Gallery Image 5"></div>
            </div>
            <button id="next" class="nav-button">Next</button>
        </section>

        <!-- Fleet section -->
        <section class="fleet-section">
            <div class="fleet-header">
                <h2>Our Fleets</h2>
                <p>Travel In Comfort & Style</p>
                <p>
                    We lead the way in transportation, offering various sizes like mini bus, midi bus, coach, and
                    double-decker hire services to schools, businesses, and the general public.
                </p>
            </div>

            <div class="fleet-grid">
                <div class="fleet-item">
                    <img src="./image/bus1.png" alt="Mini Bus">
                    <h3>Mini Bus</h3>
                    <p><strong>Capacity:</strong> 14 Passengers</p>
                    <a href="http://localhost/Signup/Project/transportation/quickQuote.php" target="_blank">
                        <button class="btn-book">Book Now</button>
                    </a>
                </div>
                <div class="fleet-item">
                    <img src="./image/MidiBus_Expressbus.png" alt="Midi Bus">
                    <h3>Midi Bus</h3>
                    <p><strong>Capacity:</strong> 26 Passengers</p>
                    <a href="http://localhost/Signup/Project/transportation/quickQuote.php" target="_top">
                        <button class="btn-book">Book Now</button>
                    </a>
                </div>
                <div class="fleet-item">
                    <img src="./image/bus3.png" alt="Double Decker">
                    <h3>Double Decker</h3>
                    <p><strong>Capacity:</strong> 74 Passengers</p>
                    <a href="http://localhost/Signup/Project/transportation/quickQuote.php" target="_self">

                        <button class="btn-book">Book Now</button>

                    </a>
                </div>
            </div>

            <div class="fleet-icons">
                <div class="icon-item">
                    <img src="./image/time-left.png" alt="On-Time">
                    <p>ON TIME PROMISE</p>
                </div>
                <div class="icon-item">
                    <img src="./image/safety-belt.png" alt="Safety">
                    <p>SUPERIOR SAFETY</p>
                </div>
                <div class="icon-item">
                    <img src="./image/spanner-wrench.png" alt="Maintenance">
                    <p>ELITE MAINTENANCE</p>
                </div>
            </div>
        </section>

        <!-- Promise Section -->
        <section class="promise-section">
            <div class="promise-content">
                <h2>Our Promise</h2>
                <h3>One Minute Late You Don't Pay A Cent"</h3>
                <p>
                    NDAYA Bus is the only transport charter company in Ireland to offer an on-time promise to our customers. We understand how important your schedule is, and that is why we take our on-time performance very seriously. We constantly monitor and track our on-time performance to ensure excellence and continuity of service.
                    Last year, Express Bus operated at over 97% with our on-time performance record. Poor road conditions, bad weather, or non-accounted-for delays outside of our control were not taken into consideration with these stats, suggesting an even higher average on a normal day-to-day activity.
                </p>
            </div>
            <div class="promise-image">
                <video width="420" height="240" controls>
                    <source src="video.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <h2>Our Services</h2>
            <div class="services-container">
                <div class="service-card">
                    <img src="./image/Group-19.png" alt="Airport">
                    <h3>Airport Transfers</h3>
                </div>
                <div class="service-card">
                    <img src="./image/Group-20.png" alt="Wedding">
                    <h3>Wedding Bus Hire</h3>
                </div>
                <div class="service-card">
                    <img src="./image/Group-21.png" alt="School Trips">
                    <h3>School Trips</h3>
                </div>
                <div class="service-card">
                    <img src="./image/Group-23.png" alt="Corporate">
                    <h3>Sports bus hire</h3>
                </div>
                <div class="service-card">
                    <img src="./image/Group-22.png" alt="Corporate">
                    <h3>Dublin city & rental tours</h3>
                </div>
                <div class="service-card">
                    <img src="./image/Group-22.png" alt="Corporate">
                    <h3>Corporate Coaches</h3>
                </div>
            </div>
        </section>

        <section class="testimonial-section">
            <h2>Our Happy Client's Review</h2>
            <div class="testimonial-carousel">
                <?php include 'testimonialsDB.php'; ?>
            </div>
        </section>

    </main>
    <button id="backToMainBtn">Back to Main Page</button>
    <script>
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
    </script>

    <?php include './footer.php'; ?>

</body>

</html>