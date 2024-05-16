<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Creează cont</h1>
      <form method="post" action="register.php">
      
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Nume" required>
            <label for="name">Nume</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Parola" required>
            <label for="password">Parolă</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
     
      <div class="links">
        <p>Ai deja cont ?</p>
        <button id="signInButton">Conectare</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Conectare</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Parola" required>
              <label for="password">Parolă</label>
          </div>
          
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        
        <div class="links">
          <p>Nu ai cont?</p>
          <button id="signUpButton">Creează unul</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
