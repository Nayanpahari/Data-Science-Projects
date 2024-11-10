<?php
// login.php
session_start();
include('db.php'); // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $emailOrUsername = trim(string: $_POST['emailOrUsername']);
    $password = trim(string: $_POST['password']);

    // Check if both fields are filled
    if (empty($emailOrUsername) || empty($password)) {
        echo "Both fields are required!";
        exit;
    }

    // Check for user in the database (by email or username)
    $sql = "SELECT * FROM users WHERE email = :emailOrUsername OR username = :emailOrUsername LIMIT 1";
    $stmt = $pdo->prepare(query: $sql);
    $stmt->bindParam(param: ':emailOrUsername', var: $emailOrUsername);
    $stmt->execute();

    $user = $stmt->fetch(mode: PDO::FETCH_ASSOC);

    if ($user && password_verify(password: $password, hash: $user['password'])) {
        // Start a session if login is successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];

        // Redirect to dashboard or homepage
        header(header: "Location: dashboard.php");
        exit;
    } else {
        echo "Invalid login credentials.";
    }
}
?>
