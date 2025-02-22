<?php
// Start a session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Ndaya Bus</title>
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="indexSheet.css">
  <link rel="stylesheet" href="contactUs.css">
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
  // Displaying success or error messages
  if (isset($_SESSION['success'])) {
    echo "<div style='text-align: center; margin: 20px 0;'>
            <p style='color: green; font-weight: bold; font-size: 18px;'>" . htmlspecialchars($_SESSION['success']) . "</p>
          </div>";
    unset($_SESSION['success']); // Clear the success message
  }

  if (isset($_SESSION['error'])) {
    echo "<div style='text-align: center; margin: 20px 0;'>
            <p style='color: red; font-weight: bold; font-size: 18px;'>" . htmlspecialchars($_SESSION['error']) . "</p>
          </div>";
    unset($_SESSION['error']); // Clear the error message
  }
  ?>

  <!-- Logo -->
  <header style="text-align: center; margin: 20px 0;">
    <img src="./image/buslogo2.JPG" alt="Ndaya Bus Logo" style="max-width: 150px; border-radius:50%;">
  </header>

  <!-- Heading -->
  <section style="text-align: center; margin-bottom: 30px;">
    <h1>Get In Touch!</h1>
    <p>Here are a few ways to get in touch with us. We'd love to hear from you!</p>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <!-- Contact Info -->
    <div class="contact-info">
      <div>
        <i class="fa fa-building" style="font-size: 2rem;"></i>
        <p>Ndaya Bus Ltd.<br>Unit 3, BallyKelly<br>Rosemount Business Park<br>Dublin 20</p>
      </div>
      <div style="margin: 20px 0;">
        <i class="fa fa-phone" style="font-size: 2rem;"></i>
        <p><strong>08********1</strong></p>
      </div>
      <div>
        <i class="fa fa-share-alt" style="font-size: 2rem;"></i>
        <div style="margin-top: 10px;">
          <a href="https://www.facebook.com/"><img src="./image/facebook-icon.png" alt="Facebook" style="width: 50px; margin: 0 5px;"></a>
          <a href="https://x.com/"><img src="./image/x-icon.png" alt="Twitter" style="width: 30px; margin: 0 5px;"></a>
          <a href="https://www.linkedin.com/"><img src="./image/linkedin-icon.png" alt="LinkedIn" style="width: 30px; margin: 0 5px;"></a>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
      <form action="contact_process.php" method="POST" id="contactForm">
        <h3 style="margin-bottom: 20px;">Send us a message</h3>
        <label for="fullname">Name</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </div>
  </section>

  <?php include './footer.php'; ?>
  <script>
    // Wait for the DOM to fully load before attaching the event listener
    // document.addEventListener('DOMContentLoaded', function() {
    //   const form = document.getElementById('contactForm');
    //   const successMessage = document.getElementById('successMessage');

    //   // Attach a submit event listener to the form
    //   form.addEventListener('submit', function(event) {
    //     // Prevent the form from submitting normally (page reload)
    //     event.preventDefault();

    //     // Show the success message
    //     successMessage.style.display = 'block';

    //     // clear the form fields after successful submission
    //     form.reset();
    //   });
    // });
  </script>
</body>

</html>