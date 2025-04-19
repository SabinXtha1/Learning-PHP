<?php
$email = 'sabin123nayaju@gamil.com';
$name =["name",'Sabin'];
$users = 2;
$price = 300.99;
$employed =false;

if($employed){
    echo "You are employed <br>";

}else{
    echo "You are a Gay<br>";
}


echo "Price is \${$price}<br>";
echo "THERE ARE {$users}";
echo "<br>Hello World! {$email} {$name[0]}";
   
?>