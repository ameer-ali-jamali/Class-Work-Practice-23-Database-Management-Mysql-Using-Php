Inserting Data in MySQL
In MySQL, the INSERT INTO statement is used to add new records to a MySQL table. The string values inside the SQL query must be quoted and the numeric values along with the NULL should not be quoted when used in a PHP script.

Let's assume we want to add a new Employee to the Employees Table we created in the previous tutorial. We will use the following syntax:

INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)


Now, let's see the PHP Script which inserts a new record to the database:

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

$sql = "INSERT INTO Employees (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>