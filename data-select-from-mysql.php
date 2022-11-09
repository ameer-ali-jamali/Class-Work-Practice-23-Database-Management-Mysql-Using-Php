Selecting Data in MySQL
To select data from one or more tables in MySQL we can use the SELECT query. To select a single data in a table we use the following:

SELECT column_name(s) FROM table_name
To select all columns from a table, we need to use the following:

SELECT * FROM table_name


Let's assume we want to select employeeID, firstname and lastname from the Employees table, then we want to display the result using fetch_assoc() inside a while loop.

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "cwhDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM Employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["employeeID"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
Note: The function fetch_assoc() puts all the results into an associative array so that we can loop through. The while loop loops through the result set and outputs the data.