<?php
// register.php
include('db.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $username = trim(string: $_POST['username']);
    $email = trim(string: $_POST['email']);
    $password = trim(string: $_POST['password']);

    // Validate fields
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    // Check if email or username is already taken
    $sql = "SELECT * FROM users WHERE email = :email OR username = :username";
    $stmt = $pdo->prepare(query: $sql);
    $stmt->bindParam(param: ':email', var: $email);
    $stmt->bindParam(param: ':username', var: $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Email or username already exists!";
        exit;
    }

    // Hash password before storing
    $hashedPassword = password_hash(password: $password, algo: PASSWORD_BCRYPT);

    // Insert the user into the database
    $sql = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $pdo->prepare(query: $sql);
    $stmt->bindParam(param: ':email', var: $email);
    $stmt->bindParam(param: ':username', var: $username);
    $stmt->bindParam(param: ':password', var: $hashedPassword);

    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "An error occurred during registration.";
    }
}
?>
