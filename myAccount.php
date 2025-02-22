
<?php
session_start();
?>

<?php include './header.php'; ?>

<?php
echo '<div class="account-quote"> 
    <a href="./signUp.php" class="fixed-top-right">Account</a>
    <a href="./quickQuote.php" class="top-left">Get A Quote</a>
    </div>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login Page</title>
    <link rel="stylesheet" href="myAcount.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="./indexSheet.css">
</head>

<body>


    <?php
    if (isset($_SESSION['success'])) {
        echo '<p style="color: green;">' . $_SESSION['success'] . '</p>';
        unset($_SESSION['success']); // Clear the success message after displaying it
    }

    if (isset($_SESSION['error'])) {
        echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>

    <div class="login-main-container">
        <div class="log-in-container">
            <div class="logo-container">
                <img src="./image/buslogo4.JPG" alt="Logo for NDaya website">
            </div>
            <div class="header-container">
                <h1>Login</h1>
            </div>
            <form class="login-form" action="./myAccountValidate.php" method="post" novalidate>
                <label for="name">Username</label>
                <input id="name" type="text" name="fullname" placeholder="Enter your username" required>

                <label for="pwd">Password:</label>
                <input id="pwd" type="password" name="password" placeholder="Enter your password" required>

                <label for="check-me">
                    <input type="checkbox" id="check-me" name="remember-me">
                    Remember Me
                </label>

                <div class="b">
                    <div>
                        <a href="./forgottenPassword.php">Forgotten Password</a>
                    </div>
                    <div>
                        <button class="button" type="submit">Login</button>
                    </div>
                </div>
                <div id="error-message"></div>
            </form>
        </div>
    </div>

    <script src="myAccount.js"></script>
    <?php include './footer.php'; ?>
</body>

</html>