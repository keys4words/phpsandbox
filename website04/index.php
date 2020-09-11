<?php
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data found';
    } else {
        echo 'No Data';
    }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid';
        }
    }
    $var = '34f';
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number';
    } else {
        echo $var. ' is NOT a number';
    }
    echo "<br>";
    $var2 = '3434k666k777lkl888';
    var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));
    $var = '<script>alert(1)</script>';
    echo $var;
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    $fitlers = array(
        "data" => FILTER_SANITIZE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );
    print_r(filter_input_array(INPUT_POST, $fitlers));*/
    $arr = array(
        'name' => 'maximus wins',
        'age' => '41',
        'email' => 'keys4words@gmail.com'
    );
    $fitlers = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 120
            )
        ),
        'email' => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_var_array($arr, $fitlers));

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>