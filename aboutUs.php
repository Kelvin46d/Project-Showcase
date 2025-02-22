<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ndaya Bus</title>
    <link rel="stylesheet" href="aboutUs.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="indexSheet.css">
</head>

<body>
    <?php include './header.php'; ?>
    <?php
    echo '<div class="account-quote"> 
    <a href="./signUp.php" class="fixed-top-right">Account</a>
    <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>';
    ?>

    <div class="container">
        <!-- About Us Section -->
        <section class="about-us">
            <h1>About Us</h1>
            <img src="./image/busPicture.jpg" alt="Express Bus Picture">
            <div>
                <p>
                    Ndaya Bus is a family-owned charter bus and coach company and has been providing superior charter transport rental services since 2008. We are proud to offer our services to a wide variety of clients, including VIP shuttle service, business travel, tour charter bus operators, athletic bus charters, school bus rentals, civic group transportation, weddings, churches, conventions, and many more.
                </p>
                <p>
                    Ndaya Bus is one of the largest privately owned charter bus and coach companies within Ireland, with a nationwide network of charter bus and coach service facilities. This network allows us to be highly responsive in potential rare cases, no matter where you are located.
                </p>
            </div>
        </section>

        <!-- Safety Section -->
        <section class="safety">
            <h2>Proven Safety and Punctuality</h2>
            <p>
                We are in the top 3% within Ireland for our safety record, and Express Bus is the nation's only charter and transportation company to offer an <strong>On-Time Promise: "One Minute Late & You Don’t Pay A Cent"</strong>.
            </p>
        </section>

        <!-- Milestones Section -->
        <section class="milestones">
            <h2>Exceptional Milestones</h2>
            <p>
                Over the past three years, our charter buses have traveled over <strong>200,000 kilometers per month</strong> with minimal mechanical interruptions. Our experienced team is committed to handling your transportation needs with the highest level of efficiency and professionalism.
            </p>
        </section>

        <!-- Awards Section -->
        <section class="awards">
            <h2>Recognition and Awards</h2>
            <p>Ndaya Bus has earned recognition from prominent organizations, showcasing our dedication to excellence and service:</p>

            <div class="award">
                <img src="./image/Optimus-logo-web.gif" alt="Optimus Logo">
                <strong>Optimus</strong> - Achieving Business Excellence
            </div>

            <div class="award">
                <img src="./image/logo_Tourism_Ireland-e1518293408192.png" alt="Tourism Ireland Logo">
                <strong>Tourism Ireland</strong> - Marketing the Island of Ireland
            </div>

            <div class="award">
                <img src="./image/chamber-of-comerce-1024x538.jpg" alt="Dublin Chamber of Commerce Logo">
                <strong>Dublin Chamber of Commerce</strong>
            </div>
        </section>
    </div>

    <?php include './footer.php'; ?>
</body>

</html>