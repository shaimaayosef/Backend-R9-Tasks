<?php
include('../task-10-php-connect-with-mysql/dbconn.php');
$id = $_GET['id'];
if (isset($_POST['update'])){
    $name = $_POST['u-name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];
    $updateFields = array();
    if (!empty($name)) {
        $updateFields[] = "name='$name'";
    }
    if (!empty($email)) {
        $updateFields[] = "email='$email'";
    }
    if (!empty($pass)) {
        $updateFields[] = "pass='$pass'";
    }
    if (!empty($contact)) {
        $updateFields[] = "contactInfo='$contact'";
    }

    if (!empty($updateFields)) {
        $updateQuery = "UPDATE student SET " . implode(", ", $updateFields) . " WHERE id=$id";
        $conn->exec($updateQuery);
        echo "<script>alert('updated successfully!')</script>";
    } else {
        echo "<script>alert('nothing to update!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 5px">
    <p></p>
    <h3>Update student</h3>
    <form action="<?php $_PHP_SELFE ?>" method="POST">
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
        <button type="submit" name="update" class="btn btn-default">Update</button><br><br>
        <a href="./studentTable.php" >Back to the table</a>
    </form>
</div>

</body>
</html>
