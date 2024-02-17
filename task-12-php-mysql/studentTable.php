<?php
include('./dbconn.php');
$query = "SELECT * FROM student";
$stmt = $conn->prepare($query);  // Prepare the SQL statement
$stmt->execute();  // Execute the SQL statement
$data = $stmt->fetchAll();  // Fetch all the results

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>php tables</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<table class="table">
<thead>
    <tr>
        <th>Name</th>
        <th>Contact Information</th>
        <th>Email</th>
        <th>Password</th>
        <th>Id</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($data as $row) {
        echo "
        <tr>
            <td>{$row['name']}</td>
            <td>{$row['contactInfo']}</td>
            <td>{$row['email']}</td>
            <td>{$row['pass']}</td>
            <td><a href='./updateStudent.php?id={$row['id']}'>{$row['id']}</a></td>
            <td><a href='./delete.php?id={$row['id']}'>Delete</a></td>
        </tr>
      ";
    }
    ?>
</tbody>
</table>
<a href="./insertStudent.php" >Insert new student</a>
<p>to ubdate student information click on id numper</p>
</div>

</body>
</html>