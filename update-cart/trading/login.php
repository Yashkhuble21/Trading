<?php  
session_start();
include 'includes/config.php';
// var_dump($_SESSION['cart']);
if(isset($_SESSION['login-customer'])){
    header('Location: index.php');
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $db->prepare("SELECT * FROM tbl_customer WHERE email_id = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // 3. Compare the hashed password
        if ($password == $user['password']) {
            // Password is correct, set the user's session
            $_SESSION['login-customer'] = $user;
            header('Location: cart.php'); // Redirect to the desired page after login
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }
    } else {
        // User not found
        echo "<script>alert('User not found. Please check your email or signup.');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form method="post">
        <input type="email" placeholder="Enter your email" name="email" require>
        <input type="password" placeholder="Enter your password" name="password" require>
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login" name="login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="email" placeholder="Enter your email" name="email">
        <input type="password" placeholder="Create a password" name="password">
        <input type="password" placeholder="Confirm your password">
        <input type="submit" class="button" value="Signup" name="siginup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
