<h1>
<?php

    // variables and consts
    $str1 = 'shit';
    $str2 = 'happens';
    // echo $str1.' '.$str2;
    $sum = "$str1 $str2";
    // echo $sum;
    define('GREETING', 'hey!');
    // GREETING = 'hello, dude!';
    // echo '<br>'.GREETING;
    
    // arrays
    $people = array('Kevin', 'Jeremy', 'Peter');
    // echo $people[0];
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[] = 'Mercedes';
    // echo $cars[count($cars)-1];
    // print_r($cars);
    // var_dump($cars);
    $people = array('Maxim' => 42, 'James' => 43, 'Ann'=> 46);
    // echo $people['Ann'];
    $people['Maria'] = 38;
    // var_dump($people);
    $cars = array (
        array('Honda', 20, 10),
        array('Toyota', 27, 19),
        array('Ford', 22, 17)
    );
    // echo $cars[1][0];

    // loops
    for($i=0;$i<=3;$i++){
        // echo "$i<br>";
    }
    // $j = 0;
    // while($j<=3){
    //     echo "$j<br>";
    //     $j++;
    // }
    // foreach ($cars as $car) {
    //     echo "$car[0]<br>";
    // }
    // foreach ($people as $name => $age) {
    //     echo "$name -> $age<br>";
    // }

    // functions
    function simpleFunc($name='Max'){
        return 'hello, '.$name;
    }
    // echo(simpleFunc('James'));

    $myNum = 10;
    function addFive($num){
        $num += 5;
    }
    addFive($myNum);
    echo $myNum;


?>
</h1>