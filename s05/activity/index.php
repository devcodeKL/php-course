<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client-Server Communication (Activity)</title>
</head>
<body>
    <?php session_start(); ?>

    <!-- If user is not logged in -->
    <?php if (!isset($_SESSION['email'])): ?>
        <form method="POST" action="./server.php">
            <input type="hidden" name="action" value="login">
            Email: <input type="email" name="email" required>
            Password: <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <?php if (isset($_SESSION['login_error_message'])): ?>
            <p><?= $_SESSION['login_error_message'] ?></p>
            <?php unset($_SESSION['login_error_message']) ?>
        <?php endif; ?>

    <!-- If user is logged in -->
    <?php else: ?>
        <p>Hello, <?= $_SESSION['email']; ?></p>
        <form method="POST" action="./server.php">
            <input type="hidden" name="action" value="logout">
            <button type="submit">Logout</button>
        </form>
    <?php endif; ?>
</body>
</html>