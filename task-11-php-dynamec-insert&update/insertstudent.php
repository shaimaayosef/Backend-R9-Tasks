<?php
include('../task-10-php-connect-with-mysql/dbconn.php');
if (isset($_POST['insert'])){
        $name = $_POST['u-name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $contact = $_POST['contact'];
        if(!empty($name) && !empty($email) && !empty($pass) && !empty($contact)){
                $query = "INSERT INTO student(name,contactInfo,email,pass) 
                VALUES ('$name','$contact','$email','$pass')"; 
                $conn->exec($query);
                echo "<script>alert('added successfully!')</script>";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 5px">
    <p></p>
    <h3>Insert student</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="u-name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" id="pass" placeholder="choose pass" name="pass">
        </div>
        <div class="form-group">
            <label for="contact">contact info:</label>
            <input type="text" class="form-control" id="contact" placeholder="contact" name="contact">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button><br><br>
        <a href="./studentTable.php" >Back to the table</a>
    </form>
</div>

</body>
</html>