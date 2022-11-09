Deleting Data in MySQL
To delete data in the MySQL database we can use the DELETE statement.



Query:

DELETE FROM table_name
WHERE some_column = some_value


Let's assume we want to delete the second employee "Rohan" from the "Employees" Table. We will use the DELETE clause delete with the WHERE clause to specify which data is being deleted.



employeeID firstname lastname email joining_date
1 Harry Bhai harrybhai@bhai.com 2022-11-04 14:54:58
2 Rohan Das rohanbhai@bhai.com 2022-11-04 15:44:51


Example:

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

// sql to delete a record
$sql = "DELETE FROM Employees WHERE firstname=Rohan";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>


After deleting, this is how our table will look.



employeeID firstname lastname email joining_date
1 Harry Bhai harrybhai@bhai.com 2022-11-04 14:54:58