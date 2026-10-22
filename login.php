<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <p class="site-title">AirAsia Rewards</p>
    </header>
 
    <main class="page">
        <h1>Login</h1>
 
        <form action="card-list.php" method="post" class="form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
 
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
 
            <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>