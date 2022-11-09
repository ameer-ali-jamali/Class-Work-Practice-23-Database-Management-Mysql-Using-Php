<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Introduction
    What is MYSQL?
    MySQL is a Database Management System.



    What is a Database Management System?
    The software system that enables users to define, create, maintain and control access to the database is called a Database Management System. It is a software for storing and retrieving users' data while considering appropriate security measures.
    Examples of DBMS include MySQL, PostgreSQL, Microsoft SQL Server, Oracle Database, and Microsoft Access.+



    Use of MYSQL
    It may be anything from a simple shopping list to a picture gallery or the vast amounts of information in a corporate network. To add, access, and process data stored in a computer database, you need a database management system such as MySQL.
    Provides powerful mechanisms for ensuring only authorised users have entry to the database server.
    It has features such as - Data Protection, Scalability on Demand, High Efficiency, Excellent Workflow Control, and Lower Total Ownership Cost.


    Connecting to MySQL
    In order to access the data in the MYSQL database, first we need to connect to the database. Now, there are two types of approaches when connecting to the MySQL server.



    MySQLi Object-Oriented Method
    MySQLi Procedural Method


    Connecting to Database using the MySQLi Object-Oriented Method
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Creating a connection
    $conn = new mysqli($servername, $username, $password);

    // Checking the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>


    Connecting to Database using the MySQLi Procedural Method
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
    echo "Connected successfully";
    ?>

    Closing the Connection
    We can close the connection with the following code.

    //MySQLi Object-Oriented
    $conn->close();

    //MySQLi Procedural
    mysqli_close($conn);

    
</body>

</html>