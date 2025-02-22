<footer class="footer">
    <?php
    // Footer data define array $footerData
    $footerData = array( //$footerData: A PHP associative array that stores all the footer content for easier management and reusability.
        'companyName' => 'Kelvin Media', //companyName' => 'Kelvin Media': Stores the company name.
        'year' => date("Y"),  //'year' => date("Y"): Dynamically retrieves the current year using the date("Y") function.
        'contactEmail' => 'info@KelvinMedia.com', //'contactEmail' => 'info@KelvinMedia.com': Specifies the contact email.
        'links' => array(  //'links' => array(...): Nested array containing key-value pairs where:
            'Privacy Policy' => '#', // The key (e.g., 'Privacy Policy') represents the label of the link.
            'Terms of Service' => '#', // The value (e.g., '#') represents the URL of the link.
            'Contact Us' => './contactUs.php' //This is the key-value assignment operator in PHP. It assigns the key ('Contact Us') to its corresponding value ('./contactUs.php').
                                              //This is the value for the key 'Contact Us'.
                                              //It represents the URL or path where the "Contact Us" page is located.



        ),
        'siteBy' => 'Kelvin Media' //'siteBy' => 'Kelvin Media': Specifies who created or manages the website.
    );

    // Display static information
    echo "<p>&copy; {$footerData['year']} {$footerData['companyName']} | Contact: <a href=\"mailto:{$footerData['contactEmail']}\">{$footerData['contactEmail']}</a></p>";
/*
 
  echo: Outputs HTML content dynamically.
<p>: Adds a paragraph containing:
&copy;: The copyright symbol.
{$footerData['year']}: Inserts the current year dynamically.
{$footerData['companyName']}: Inserts the company name dynamically.

*/






    // Display links
    echo "<div class='footer-links'>";
    foreach ($footerData['links'] as $label => $url) {
        echo "<a href=\"$url\">$label</a>";
    }
    echo "</div>";

    // Display site by information
    echo "<p>Site by: {$footerData['siteBy']}</p>";
    ?>
</footer>
