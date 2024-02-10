<?php
session_start(); // Start the session
$msg = "";
if(isset($_POST['login'])){
  $email = $_POST['u-email'];
  $pw = $_POST['pwd'];
  $name = $_POST['u-name'];
  if(!empty($email) && !empty($pw)){
    $_SESSION['u-email'] = $email; //set session variable
    $_SESSION['pwd'] = $pw;
    $_SESSION['u-name'] = $name;
    $msg = "welcom " . $_SESSION['u-name']; //use session variable.
  }     
}
//now we can use $_SESSION variables on any other page with the 2 following lines.
//session_start();
//echo $_SESSION['u-email']; or any other variable we want to display.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>submit form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 5px">
  <p>
    <?php 
    if(isset($_POST['login'])){
    echo $msg . "<br>" . "<a href='./logout.php'>log out</a>";
    }
    ?>
  </p>
  <h3>login form</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="u-name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="u-email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="login" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
