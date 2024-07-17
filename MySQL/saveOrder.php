<!doctype html>
<html>
<head>
<title>Receipt Order Car Rental</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from form
    $name = $_POST['name'] ?? '';
    $number = $_POST['number'] ?? '';
    $email = $_POST['email'] ?? '';
    $model = $_POST['model'] ?? '';
    $rental_date = $_POST['rental_date'] ?? '';

    // Remove the 'T' from the rental_date
    $formatted_rental_date = str_replace('T', ' ', $rental_date);

    // Output the receipt
    echo "<p>Date: <b>" . date("Y-m-d") . "</b></p>";
    echo "<h3>Receipt Order Car Rental</h3>";
    echo "<table>";
    echo "<tr><td>Name</td><td>:</td><td><b>" . htmlspecialchars($name) . "</b></td></tr>";
    echo "<tr><td>Phone Number</td><td>:</td><td><b>" . htmlspecialchars($number) . "</b></td></tr>";
    echo "<tr><td>Email</td><td>:</td><td><b>" . htmlspecialchars($email) . "</b></td></tr>";
    echo "<tr><td>Model</td><td>:</td><td><b>" . htmlspecialchars($model) . "</b></td></tr>";
    echo "<tr><td>Rental Date & Time</td><td>:</td><td><b>" . htmlspecialchars($formatted_rental_date) . "</b></td></tr>";
    echo "</table>";

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "car_rental";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create query
    $sql = "INSERT INTO rental (name, number, email, model, rental_date) VALUES ('$name', '$number', '$email', '$model', '$formatted_rental_date')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Form data not submitted.";
}
?>
<br>
<form>
<input type="button" name="printButton" onClick="window.print()" value="Print">
</form>
</body>
</html>
