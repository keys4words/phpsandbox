<?php

/*$output = substr('Hello World!', 1, 6);
$output = substr('Hello World!', -3);
$output = strlen('Hellow worlds');
$output = strpos('Hellow worlds', 'w');
$output = strrpos('Hellow worlds', 'o');
$text = 'Hello world                      ';
$trimmed = trim($text);
echo $output;
var_dump($text);
echo("<br>");
var_dump($trimmed);

$output = strtoupper('Hello World');
$output = strtolower('Hello World');
$output = ucwords('hello world');
$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);
$val = 'Hello';
$output = is_string($val);

$values = array(true, false, null, 'abc', 44, '33', '', 0, '0');
foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
    }
}*/
$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptatem expedita consequuntur saepe beatae amet veritatis totam possimus, impedit est architecto corporis neque sunt ullam modi et laboriosam dolorem! Soluta sunt, vel porro repellendus illo ullam repellat ab consequuntur voluptatum fuga voluptate deleniti nihil, optio, ipsam sit iusto consectetur perferendis? Repudiandae repellendus natus hic magnam consequatur ut culpa omnis a?";
$compressed = gzcompress($string);
$original = gzuncompress($compressed);

echo $original;
