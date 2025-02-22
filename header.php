<header>

    <nav class="nav-header-container">
        <?php
        $links = array(
            "Home" => "./index.php",
            "Fleet" => "./fleet.php",
            // "Our Services" => "./ourServices.php",
            "About Us" => "./aboutUs.php",
            "Contact  Us" => "./contactUs.php",
            "Get Quote" => "./quickQuote.php"
        );

        foreach ($links as $name => $url) {

            echo "<a href=\"$url\">$name</a>";
        }

    
        // $links = array(
        //     "Home" => "./index.php",
        //     "Fleet" => "./fleet.php",
        //     "About Us" => "./aboutUs.php",
        //     "Contact Us" => "./contactUs.php",
        //     "Get Quote" => "./quickQuote.php"
        // );

        // foreach ($links as $name => $url) {
        //     echo "<a href=\"$url\">$name</a>";
        // }
        // ?>

         <!-- Dropdown for Our Services -->
        <!-- // <div class="dropdown">
        //     <a href="./ourServices.php" class="dropbtn">Our Services</a>
        //     <div class="dropdown-content">
        //         <a href="#">Corporate</a>
        //         <a href="#">School</a>
        //         <a href="#">Airport Transfer</a>
        //         <a href="#">Concert/Festival</a>
        //         <a href="#">Wedding</a>
        //         <a href="#">City Travel</a>
        //         <a href="#">Round Country Trip</a>
        //         <a href="#">Hen/Stag Party</a>
        //         <a href="#">Golf Trip</a>
        //     </div>
        // </div>> -->
    </nav>
</header>