<?php
$email = 'sabin123nayaju@gamil.com';
$name =["name",'Sabin'];
$users = 2;
$price = 300.99;
$employed =false;
$arrays= array("sabin","nayaju");
if($employed){
    echo "You are employed <br>";

}else{
    echo "You are a Gay<br>";
}
   array_push($arrays,'fud');
   foreach($arrays as $as){
        echo "$as<br>"; 
   };
echo var_dump($arrays);
echo "Price is \${$price}<br>";
echo "THERE ARE {$users}";
echo "<br>Hello World! {$email} {$name[0]}<br>";
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

        <label>Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="logIn">
    </form>
</body>
</html>
<?php 
      echo $_POST['username']."<br>";
      echo $_POST['password']."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        width: 100vw;
        height: 20px;
        color: red;
    }
</style>
<body >
    <h1>
        Form
    </h1>
    <form action="./form.php" method="post">
        <label>Quantity:</label>
        <input type="number" name="quantity" id="quantity"><br>
        <!-- <label>Price:</label>
        <input type="number" name="price" id="price"><br> -->
        <input type="submit" value="submit">

    </form>
    
    
</body>
</html>

<?php 
  $capital = array("USA"=>"Washington","NEPAL"=>"Kathmandu");
  $capital['China']="Beijinga";
  echo $capital["USA"] . "<br>";
  foreach($capital as $key=>$value){
    echo "Capital of {$key} is {$value} <br>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <label>Enter Your Country</label>
        <input type="text" name="country"/>
        <input type="submit" />
    </form>
</body>
</html>

<?php 
$country = array(
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "China" => "Beijing"
);
  $country_input = ucfirst($_POST["country"]);
  $user_country_capital = $country[$country_input];
  echo "Your {$country_input} Capital is {$user_country_capital}<br>";
    if(isset($country)){
     echo "This Variable is Set";
    }else{
        echo "This Variable is Not set";
    };
    $countrys='sa';
    if(empty($countrys)){
        echo "This Variable is Empty";
       }else{
           echo "This Variable is Not Empty";
       };
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="radio" name="creditcard" value="visa">Visa<br>
        <input type="radio" name="creditcard" value="master">Master<br>
        <input type="radio" name="creditcard" value="discover">Discover<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
      if(isset($_POST["creditcard"])){
          echo "You Have Selected a Credit Card";
        };
        $card = $_POST["creditcard"];
        echo "Your Credit Card is {$card}";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <label>Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label>Number</label><br>
        <input  name="number" id="number"><br>
        <label>Email</label><br>
        <input  name="email" id="email"><br>
        <input type="submit" name="submit" value="submit">
        
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $number = filter_input(INPUT_POST,'number',FILTER_SANITIZE_NUMBER_INT);
        echo "Username: {$username} <br>";
        echo "Email: {$email} <br>";
        echo "Number: {$number} <br>";
  
    }
?>