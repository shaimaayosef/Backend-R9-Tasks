<?php
include('./dbconn.php');
$query = "SELECT customers.Name, customers.email, customers.gender, orders.order_id, orders.total_amount
FROM customers INNER JOIN orders
 ON customers.cust_id=orders.cust_id";
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
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($data as $row) {
        echo "
        <tr>
            <td><a href='../update.php?id={$row['id']}'>{$row['id']}</a></td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['pass']}</td>
            <td>{$row['gender']}</td>
            <td><a href='../delete.php?id={$row['id']}'>Delete</a></td>
        </tr>
      ";
    }
    ?>
</tbody>
</table>
<a href="../insert.php">INSERT NEW CUSTOMER</a>
</div>
</body>
</html>