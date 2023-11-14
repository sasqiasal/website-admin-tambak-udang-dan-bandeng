<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="layout/tambahan.css">
</head>

<body id="login">
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</body>

</html>