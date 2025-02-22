<?php
// Start a session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUICK QUOTE</title>
    <link rel="stylesheet" href="./quote.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./indexSheet.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;
0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;
0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
</head>

<body>
    <?php include './header.php'; ?>

    <?php
    echo '<div class="account-quote"> 
    <a href="./signUp.php" class="fixed-top-right">Account</a>
    <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>';
    ?>

    <?php

    if (isset($_SESSION['success'])) {
        echo '<div class="success">' . $_SESSION['success'] . '</div>';
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']); // 
    }
    ?>

    <div class="main-wrapper">
        <main class="main-container">
            <div>
                <div class="get-quote-header-container">
                    <h1>Get A Quote</h1>
                </div>
                <form class="form-quote-container" action="./submitQuote.php" method="post">
                    <div class="div-form-container">
                        <label class="push-down" for="name-1">Name</label>
                        <input id="name-1" type="text" name="fullname" placeholder="Full Name" required>
                        <span id="name-1-error" style="color: red;"></span>

                        <div class="email-phone-container">
                            <div>
                                <label class="push-down" for="email">Email</label>
                                <input id="email" type="text" name="email" placeholder="Email" required>
                                <span id="email-error" style="color: red;"></span>
                            </div>
                            <div>
                                <label class="push-down" for="phone">Phone No</label>
                                <input id="phone" type="text" name="phone" placeholder="Phone no:" required>
                                <span id="phone-error" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="divEvent">
                            <label  for="event-type">Event Type</label><br>
                            <div class="select-Event">
                                <select name="event" id="event-select" required>
                                    <option value="">Select Your Event Type</option>
                                    <option value="corporate">Corporate</option>
                                    <option value="school">School</option>
                                    <option value="airporttransfer">Airport Transfer</option>
                                    <option value="partybus">Party Bus</option>
                                    <option value="concert">Concert/Festival</option>
                                    <option value="wedding">Wedding</option>
                                    <option value="citytravel">City Travel</option>
                                    <option value="roundcountrytrip">Round Country Trip</option>
                                    <option value="henstagparty">Hen/Stag Party</option>
                                    <option value="golftrip">Golf Trip</option>
                                </select>
                                <span id="event-select-error" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="div-Passgers-container">
                            <div>
                                <label  for="number-of-Passgers">No. Of Passengers </label><br>
                                <input id="number-of-Passgers" type="number" name="passengers" placeholder="No. Of Passengers" min="1" max="1000" required>
                                <span id="number-of-Passgers-error" style="color: red;"></span>
                            </div>

                            <div>
                                <label class="push-down" for="Journey">Journey</label>
                                <div>
                                    <input type="radio" id="return" name="journey" value="return" required>
                                    <label for="return">Return Trip</label>

                                    <input type="radio" id="one-Way" name="journey" value="oneway" required>
                                    <label for="one-Way">Just One Way</label>
                                </div>
                                <span id="journey-error" style="color: red;"></span>
                            </div>
                        </div>

                        <div class="dateofTravel-container">
                            <div>
                                <label class="push-down" for="date-of-travel">Date Of Travel</label>
                                <input id="date-of-travel" type="date" name="travel_date" required>
                            </div>
                            <div>
                                <label class="push-down" for="timeOfTravel">Time Of Travel</label>
                                <input id="timeOfTravel" type="time" name="travel_time" required>
                            </div>
                        </div>

                        <div class="depart-from-container">
                            <div>
                                <label class="push-down "  for="depart-from">Departing From</label>
                                <input id="depart-from" type="text" name="depart_from" placeholder="Departing From" required>
                            </div>
                            <div>
                                <label class="push-down" for="destination">Destination</label>
                                <input id="destination" type="text" name="destination" placeholder="Destination" required>
                            </div>
                        </div>

                        <div id="spunme" hidden>
                            <div class="return-date-container">
                                <div>
                                    <label class="push-down" for="return-date">Return Date</label>
                                    <input id="return-date" type="date" name="return_date">
                                </div>
                                <div>
                                    <label class="push-down" for="return-time">Return Time</label>
                                    <input id="return-time" type="time" name="return_time">
                                </div>
                            </div>
                        </div>

                        <button type="submit">Request Quote</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <?php include './footer.php'; ?>
    <script src="quoteScript.js"></script>
</body>

</html>