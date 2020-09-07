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

    // $myNum = 10;
    // function addFive($num){
    //     $num += 5;
    // }
    // addFive($myNum);
    // echo $myNum;

    // conditions
    // $num = '5';
    // if ($num == 5 && 5 > 6){
    //     echo '5 passed';
    // } else {
    //     echo '5 NOT passed';
    // }

    //switch
    // $favColor = 'blue';
    // switch($favColor){
    //     case 'red':
    //         echo 'Your color is red';
    //         break;
    //     case 'green':
    //         echo 'Your color is green';
    //         break;
    //     default:
    //         echo 'Your color is default';
    //         break;
    // }

    // dates
    // echo date('d');
    // echo date('m');
    // echo date('Y/m/d');
    date_default_timezone_set('Russia/Moscow');
    // echo date('h:i:sa')
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    // echo $timestamp;    // in unix format
    // echo date('m/d/Y h:i:sa', $timestamp);
    $timestamp2 = strtotime('7:00pm March 22 2019');
    // echo date('m/d/Y h:i:sa', $timestamp2);
    
    $timestamp3 = strtotime('+2 Days');
    echo date('m/d/Y h:i:sa', $timestamp3);


?>
</h1>