<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Firstname: " . $_POST['firstname'] . "</p>";
        echo "<p>Lastname: " . $_POST['lastname'] . "</p>";
        echo "<p>Age: " . $_POST['age'] . "</p>";
        echo "<p>Species: " . $_POST['species'] . "</p>";
        echo "<p>Food: " . $_POST['food'] . "</p>";
        echo "<p>Date: " . $_POST['bookday'] . "</p>";
        echo "<p>Party Size: " . $_POST['partysize'] . "</p>";
 
        if (isset($_POST['accom']))  echo "<p>Accommodation: Yes</p>";
        if (isset($_POST['4day']))   echo "<p>4 Day Tour: Yes</p>";
        if (isset($_POST['10day']))  echo "<p>10 Day Tour: Yes</p>";
 
    }
    ?>
</body>
</html>
