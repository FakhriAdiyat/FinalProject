<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Register New User</h2>
        <form action="../src/controller/register.php" method="POST" class="form-register">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <button type="submit">Register</button>
        </form>
        
        <div class="link-buttons">
            <a href="src/views/user_list.php">Lihat Pengguna Terdaftar</a>
            <a href="src/controller/register.php">Registrasi Pengguna Baru</a>
        </div>
    </div>
</body>
</html>