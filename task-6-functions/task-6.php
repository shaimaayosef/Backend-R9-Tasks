
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
<?php
function rectangle_area($len, $wid) {
    $area = $len * $wid;
    return $area;
  }
  
$area = rectangle_area(10, 5);
echo "The area of the rectangle is: " . $area;

echo "<br>" . "ــــــــــــــــــــــــــــــــــــ";
echo "<br>";

$studentsFavouriteFood = array(
    "Joe" => "smarties",
    "Ahmed" => "pringles",
    "Cassie" => "Marmite crisps",
    "Ben" => "Mr Kiplings cakes"
);
?>
<table class="table">
<thead>
    <tr>
        <th>Name</th>
        <th>Favourite Food</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($studentsFavouriteFood as $name => $food) {
        echo "<tr>
        <td>$name</td>
        <td>$food</td>
      </tr>";
    }
    ?>
</tbody>
</table>
</div>
</body>
</html>