<?php

    // for($i = 1; $i<=10; $i++)
    // {
    //     printf("\nalpavipul");
    // }


    // $s =1;
    // while($s<=10)
    // {
    //     echo"$s";
    //     $s++;
    // }

    // $s =11;
    // do
    // {
    //    echo $s . "<br>";
    //     $s++;
    // }
    // while($s <=20)


// $fruits = [1,2,3,4,5,6,7,8,9,0,7,6,5,4,3,2,2,34,5];

// foreach ($fruits as $fruit) {
//     echo $fruit . "<br>";
// }


 

for ($i = 1; $i <= 5; $i++) {
    // print spaces
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}







?>