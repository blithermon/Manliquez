<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <video autoplay muted loop id="background-video">
    <source src="hi.mp4" type="video/mp4">
  </video>
  <img class="logo" src="logo.png" alt="Logo" width="150">
 


    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="db.php" method="post">
                <h2>Signup</h2>
                <div class="input-group">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
               </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit">Signup</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="login.php">Log In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>