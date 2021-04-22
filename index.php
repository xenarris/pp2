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

    //includes
    include("functions.php");
    ?>
</head>
<body>
<?php
// Step 1
echo "PHP Array Practice";
echo "<br>";
echo "<br>";

//Step 2 $numbers array
$numbers = array(7, 9, 8, 9, 8, 8, 6);

//Step 3 moved the print function
echo "Step 2 and 3: <br>";
printArr($numbers);
echo "<br>";

//step 4
echo "Step 4: <br>";
echo "Largest number: " . largest($numbers) . "<br>";

//step 5
echo "<br>";
echo "Step 5: <br>";

$noDupNum = removeDups($numbers);
echo "[";
foreach ($noDupNum as $num) {
    echo $num . ", ";
}
echo "]"
?>



</body>
</html>

