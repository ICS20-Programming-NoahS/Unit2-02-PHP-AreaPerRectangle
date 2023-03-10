<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and perimeter of a rectangle, in PHP</title>
	</head>
	<body>
    <h1><?php echo 'Area and perimeter of a rectangle, in PHP'; ?></h1>
    <?php echo "The dimensions of the rectangle are 15cm and 7cm."; ?>
    <br>
    <?php 
    $length = 15; 
    $width = 7;
    echo "The area of the rectangle is $length * $width= " . ($length * $width) . "<br />";  
    ?>
    <?php
    $length = 15;
    $width = 7;
    echo "The perimeter of the rectangle is " . ($length + $length + $width + $width) . "<br />";
    ?>
  </body>
</html>