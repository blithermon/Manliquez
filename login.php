
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

      <video autoplay muted loop id="background-video">
    <source src="hi.mp4" type="video/mp4">

  </video>
  

           <img class="logo" src="logo.png" alt="Logo" width="150">
    <div class="wrapper">
	
     <div class="form-wrapper sign-in">
            <form action="done.php" method="post">
                <h2>Login</h2>

                <div class="input-group">
                    <input type="text" name="email" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                <div class="remember">
                    <label for="remember"><input type="checkbox" name="remember" id="remember"> Remember me</label>
                </div>

                <button type="submit">Log In</button>

                <div class="signUp-link">
                    <p>Already have an account? <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>