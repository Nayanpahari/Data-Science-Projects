<?php
// db.php - Database connection setup
$host = 'localhost:3307';       // Server address (localhost in this case)
$dbname = 'loginpage';         // Database name
$username = 'root';        // Database username (default is 'root')
$password = '';            // Database password (none in your case)
//$db_port =3307; 

// Create a PDO instance (connect to the database)
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", username: $username, password: $password);
    $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION); // Enable error mode for debugging
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
