<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && $user['password'] === $password) {
        $_SESSION['user_name'] = $user['full_name'];
        header("Location: index.php");
        exit();
    } else {
        $message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <?php
        if (isset($_GET['success'])) echo "<p class='msg'>Signup successful. Please log in.</p>";
        if (isset($message)) echo "<p class='msg'>$message</p>";
        ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
