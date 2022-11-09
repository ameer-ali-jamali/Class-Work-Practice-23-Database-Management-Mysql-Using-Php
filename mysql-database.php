Creating a MySQL Database
We can use the CREATE DATABASE query inside a PHP script to create a new database in MySQL.

There are also two methods by which we can do it.



MySQLi Object-oriented approach
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create a connection
$conn = new mysqli($servername, $username, $password);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a database query
$sql = "CREATE DATABASE cwhDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>


MySQLi Procedural approach
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create a database
$sql = "CREATE DATABASE cwhDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>