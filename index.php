<?php
$title = "Index";
include "includes/header.php";
?>

<!-- Basic HTML -->
<h1><?php echo $title ?></h1>
<br />

<?php
// Printing to HTML using echo
echo 'Hello PHP';
echo '<br/>';
echo 'Second Line';
echo '<br/>';

// declare variable
$name = 'Susi Sorglos';
$age = 24;
// echo variable
echo $name;
echo '<h1>My Name is: ' . $name . '</h1>';
echo '<h1>My Age is: ' . $age . '</h1>';

echo "<h1>My Name is $name and I am $age years old.</h1>";
?>

<button type="button" class="btn btn-dark">Click Me!</button>
<button type="button" class="btn btn-primary">Click Me!</button>
<button type="button" class="btn btn-success">Click Me!</button>


<?php
require "includes/footer.php";
?>