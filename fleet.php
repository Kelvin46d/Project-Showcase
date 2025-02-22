<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Fleet | NDAYA Hire</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./fleet.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./indexSheet.css">
</head>

<body>
    <!-- Header Section -->
    <?php include './header.php'; ?>

    <!-- Account and Quote Links -->
    <div class="account-quote">
        <a href="./signUp.php" class="fixed-top-right">Account</a>
        <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>

    <!-- Fleet Header -->
    <header class="header-fleet">
        <h1><span>Our Fleets</span></h1>
        <p>
            Our <strong>fleets Nationwide</strong> comprises a diverse range of well-maintained vehicles, including coaches and minibuses, 
            ready to cater to your transportation needs with utmost reliability and comfort. 
            Embark on a journey of comfort and elegance with <strong>NDAYA Hire</strong>.
        </p>
    </header>

    <!-- Fleet Container -->
    <section class="fleet-container">
        <!-- Mini Bus -->
        <div class="fleet-card">
            <img src="./image/bus1.png" alt="14-seater minibus" />
            <h2>Mini Bus</h2>
            <div class="capacity">Capacity: 14 Passengers</div>
            <p>
                Our <strong>14-seater minibus</strong> is ideal for school transport services, day trips, business trips, and extended touring. 
                This vehicle offers all the modern features of quality and safety.
            </p>
            <a class="view-link" href="./image/minibus.jpg">View Details</a>
        </div>

        <!-- Midi Bus -->
        <div class="fleet-card">
            <img src="./image/MiniBus.png" alt="26-seater midi bus" />
            <h2>Midi Bus</h2>
            <div class="capacity">Capacity: 26 Passengers</div>
            <p>
                This <strong>26-seater Mercedes</strong> purpose-built coach is perfect for school bus services or small groups in the city or exploring the roads of Ireland. 
                Also suitable for incentive groups or family tours.
            </p>
            <a class="view-link" href="./image/bus.jpg">View Details</a>
        </div>

        <!-- Repeated Fleet Cards -->
        <div class="fleet-card">
            <img src="./image/MidiBus_Expressbus.png" alt="26-seater midi bus" />
            <h2>Midi Bus</h2>
            <div class="capacity">Capacity: 26 Passengers</div>
            <p>
                This <strong>26-seater Mercedes</strong> purpose-built coach is perfect for school bus services or small groups in the city or exploring the roads of Ireland. 
                Also suitable for incentive groups or family tours.
            </p>
            <a class="view-link" href="./image/bus.jpg">View Details</a>
        </div>

        <!-- Coach -->
        <div class="fleet-card">
            <img src="./image/portfolio_03.jpg" alt="50-seater coach" />
            <h2>Coach</h2>
            <div class="capacity">Capacity: 50 Passengers</div>
            <p>
                Our <strong>50-seater coach</strong> is perfectly suited for school transport services, group tours, and incentive transportation. 
                These vehicles are top-of-the-range models with air conditioning.
            </p>
            <a class="view-link" href="./image/bus.jpg">View Details</a>
        </div>

        <!-- Double Decker -->
        <div class="fleet-card">
            <img src="./image/bus6.jpg" alt="74-seater double-decker bus" />
            <h2>Double Decker</h2>
            <div class="capacity">Capacity: 74 Passengers</div>
            <p>
                Our <strong>74-seater double-decker coach</strong> is ideal for large groups or school bus services. 
                With a PA system, safety, and entertainment features, it's suited for tours and special events.
            </p>
            <a class="view-link" href="./image/bus.jpg">View Details</a>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include './footer.php'; ?>
</body>

</html>
