
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data here
    $location = htmlspecialchars($_POST["location"]);
    $date = htmlspecialchars($_POST["date"]);
    $guests = htmlspecialchars($_POST["guests"]);

    // You can perform further actions with the form data, such as storing it in a database or performing some business logic

    // For demonstration purposes, let's just print the values
    echo "Location: $location <br>";
    echo "Date: $date <br>";
    echo "Number of Guests: $guests <br>";
} else {
    // If someone tries to access this script directly without submitting the form, you can redirect them back to the form page
    header("Location: yourform.php");
    exit();
}
