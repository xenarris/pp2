<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
    <h1>Pair Program 2</h1>
    <?php
    /*
     * Jean-Kenneth (Jake) Antonio
     * April 22, 2021
     * 328/pp2/index.php
     * Pair Program 2
     */

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
<?php
// Step 1
echo "PHP Array Practice";
echo "<br>";
//Step 2 $numbers array

$numbers = array(7, 9, 8, 9, 8, 8, 6);
function printArr(array $array) {
    foreach ($array as $num) {
        echo $num . "<br>";
    }
}

echo "Step 2: <br>";
printArr($numbers);



?>



</body>
</html>

