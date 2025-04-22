<?php 
   foreach($_COOKIE as $key=>$value){
    if($key == 'user'){

        echo "Cookie Name is {$key} and Value is {$value}";
    }
   }

?>
<?php 
session_start();
?>