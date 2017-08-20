<?php
function isBitten() {
$a = rand(1,2);
$b = floor($a);
if($b < 2){
 return '<h1>Lion bit your finger!';
} else {
 return '<h1>Lion did not bit your finger!</h1>';
}
}
echo '<br/>';
echo isBitten();
echo '<br/>';
?>
