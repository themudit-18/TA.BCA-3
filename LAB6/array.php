<!-- numeric 
$a = array(10,20,30,40);

Associative array

$ab = array(
    "name"=>"mudit"
)

multi. array

$abc = array( 
    array(10,20,30),
    array(40,50,60),
    array(70,80,90)
); -->
<?php
$a = array("a"=>"abc","b"=>"xyz");

$keys = array_keys($a);

for ($i=0; $i < count($keys); $i++) { 
    echo $keys[$i]. "<br>". $a[$keys[$i]]."<br>";
}
?>
 