<?php

$loggedIn = true;
$arr = [1, 44, 5];
// if($loggedIn){
//     echo 'You are logged in';
// } else {
//     echo 'You are NOT logged in';
// }

// echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

// $isRegistered = ($loggedIn == true) ? true : false;
// echo $isRegistered."<br>";

// $age = 7;
// $score = 5;
// echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

?>

<div>
<?php if($loggedIn){ ?>
    <h1>Welcome, User</h1>
<?php } else { ?>
    <h1>Welcome, Guest</h1>
<?php } ?>
</div>

<div>
<?php if($loggedIn): ?>
    <h1>Welcome, User</h1>
<?php else: ?>
    <h1>Welcome, Guest</h1>
<?php endif; ?>
</div>
<div>
    <?php foreach($arr as $va): ?>
        <li><?php echo $val; ?>List Item</li>
    <?php endforeach; ?>
</div>
<hr>
<div>
    <?php for($i = 0; $i <= 5; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>