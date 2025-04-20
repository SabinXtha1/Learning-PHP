<?php 
$tills=$_POST['count'];
    for($i=0;$i<=$tills;$i++){
        echo "Num: {$i}<br>";
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
    <form action="index.php" method="post">

        <label>Count </label><br>
        <input name="count" type="text" />
        <input type="submit"/>
    </form>
</body>
</html>