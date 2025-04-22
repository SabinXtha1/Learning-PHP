<?php 
   foreach($_SERVER as $key => $value){
    echo "{$key} = {$value}";
   }
   $password= "piza";
   $hash= password_hash($password,PASSWORD_DEFAULT);
   echo "{$hash}";
   if(password_verify("pizaa",$hash)){
    echo "YOu Aree login";
   }
   else{
    echo "INcorrect";
   }
?>