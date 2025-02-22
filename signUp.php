<?php
// Start the session to access session variables
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Sign Up Page</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="./signUp.css">
    <link rel="stylesheet" href="./indexSheet.css">
</head>

<body>
    <?php
    include './header.php';
    ?>
    <?php
    echo '<div class="account-quote"> 
        <a href="./signUp.php" class="fixed-top-right">Account</a>
        <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>';
    ?>

    <div class="main-container">
        <div class="signUp-container">
            <div class="logo-container">
                <img src="./image/buslogo4.jpg" alt="Logo for NDaya website">
            </div>

            <div class="header-container-1">
                <h1>Sign Up Page</h1>
            </div>

            <!-- Display success or error message if any -->
            <?php if (isset($_SESSION['error'])): ?>
                <div class="error-container">
                    <ul>
                        <li style="color: red;"><?php echo $_SESSION['error']; ?></li>
                    </ul>
                </div>
                <?php unset($_SESSION['error']); // Clear error after displaying ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="success-container">
                    <ul>
                        <li style="color: green;"><?php echo $_SESSION['success']; ?></li>
                    </ul>
                </div>
                <?php unset($_SESSION['success']); // Clear success message after displaying ?>
            <?php endif; ?>

            <form class="signUp-form" action="signUp_insert_data.php" method="post">
                <label for="fname">Full Name</label>
                <input id="fname" type="text" name="fullname" required>

                <label for="email">Email</label>
                <input id="email" type="text" name="email" required>

                <label for="pass">Password:</label>
                <input id="pass" type="password" name="password" required minlength="8">

                <label for="confirm-password">Re-Type-Password</label>
                <input id="confirm-password" type="password" name="re-type-password" required minlength="8">

                <!-- Inline password mismatch message -->
                <div id="password-mismatch-message" style="display: none;">
                    Passwords do not match. Please re-type password.
                </div>

                <button id="signUP-button" type="submit" name="submit" disabled>Sign UP</button>

                <div>
                    <div>Already have an account?
                        <a href="./myAccount.php">Log-in</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include './footer.php'; ?>

    <!-- External JS File -->
    <script src="signUP.js"></script>
</body>

</html>
