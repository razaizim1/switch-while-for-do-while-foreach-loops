<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>



    <?php



    // If else condition
    /* Create an if else ladder using more than one
    elseif. Write a program to allow a driver only when his age
    is greater than 25 and less than 65.*/

    $age = 25;
    if ($age <= 65 && $age >= 25) {
        echo "You can drive a car<br>";
    } else {
        echo "You cannot a drive <br>";
    }


    // Switch Statement
    $age = 12;
    switch ($age) {
        case 12:
            echo "You are 12 years old <br>";
            break;

        case 23:
            echo "You are 23 years old <br>";
            break;

        case 45:
            echo " You are 45 years old <br>";
            break;
    }



    // While loops
    $i = 0;
    $x = 6;

    while ($i < 10 && $x < 60) {
        echo $i + 1;
        echo " ";
        $i += 2;
        $x += 2;
        echo "<br>";
    }



    // For Loops
    for ($i = 0; $i < 5; $i++) {
        echo $i;
        echo "<br>";
    }

    // Do while loop
    $i = 100;
    do {
        echo "$i <br>";
        $i++;
    } while ($i < 5);



    // loops in array
    $arr = array("Bananas", "Apple", "Mango", "Strawberry", "Bread", "Butter");
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
        echo "<br>";
    }


    // Foreach loops
    foreach ($arr as $value) {
        echo "$value <br>";
    }

    foreach ($arr as $value) {
        echo "$value <br>";
    }


    // Functions

    // function totalMarks($marksArr)
    // {
    //     $sum = 0;
    //     foreach ($marksArr as $value) {
    //         $sum += $value;
    //     }
    //     return $sum;
    // }

    // $zimMarks = array(99, 93, 93);
    // $sumMarks = totalMarks($zimMarks);
    // echo "$sumMarks out of 300";

    function totalMarks($marks)
    {
        $sum = 0;
        foreach ($marks as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $zim = [88, 30, 44, 44, 50];
    $sumMarks = totalMarks($zim);
    echo "$sumMarks out of 500 <br>";


    // Associative Array

    $favCol = array("banana" => "yellow", "apple" => "green", "mango" => "mango");

    foreach ($favCol as $key  => $value) {
        echo "Color of $key is $value <br>";
    }



    // Multi dimensional array

    $newArr = array(
        array(
            array(1, 1, 1, 1),
            array(2, 2, 2, 2),
            array(4, 4, 4, 4)
        ),
    );

    for ($i = 0; $i < count($newArr); $i++) {
        for ($j = 0; $j < count($newArr[$i]); $j++) {
            for ($k = 0; $k < count($newArr[$i][$j]); $k++) {
                echo $newArr[$i][$j][$k];
            }
            echo "<br>";
        }
        echo "<br>";
    }



    ?>












    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>