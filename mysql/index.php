<?php 
    include "db.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
            echo "Please Enter Username";
        }else if(empty($email)){
            echo "Please Enter Email";
        }elseif(empty($email)){
            echo "Please Enter YOur Email";
        }else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql ="INSERT INTO user (id,name,email,password) 
             VALUES (null,'$username','$email','$hash')";
             try{

                 mysqli_query($conn,$sql);
                echo "User Registered";
                }catch(mysqli_sql_exception){
                    echo "Enter Valid Data";
                };
       
        }
    }
     mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .card {
            background: #fff;
            padding: 2.5rem 2rem 2rem 2rem;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            min-width: 340px;
            max-width: 370px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #f76d6d;
            letter-spacing: 1px;
        }
        label {
            display: block;
            margin-bottom: 0.3rem;
            color: #333;
            font-weight: 500;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.7rem 0.9rem;
            margin-bottom: 1.1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            background: #fafafa;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border: 1.5px solid #f76d6d;
            outline: none;
            background: #fff;
        }
        input[type="submit"] {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(90deg, #f76d6d 0%, #fad0c4 100%);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 0.5rem;
        }
        input[type="submit"]:hover {
            background: linear-gradient(90deg, #fad0c4 0%, #f76d6d 100%);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.card');
            let isDragging = false;
            let offsetX = 0;
            let offsetY = 0;

            card.style.position = 'absolute';
            card.style.left = '50%';
            card.style.top = '50%';
            card.style.transform = 'translate(-50%, -50%)';
            card.style.cursor = 'grab';

            card.addEventListener('mousedown', function(e) {
                isDragging = true;
                offsetX = e.clientX - card.getBoundingClientRect().left;
                offsetY = e.clientY - card.getBoundingClientRect().top;
                card.style.cursor = 'grabbing';
                card.style.transition = 'none';
            });

            document.addEventListener('mousemove', function(e) {
                if (isDragging) {
                    card.style.left = e.clientX - offsetX + 'px';
                    card.style.top = e.clientY - offsetY + 'px';
                    card.style.transform = 'none';
                }
            });

            document.addEventListener('mouseup', function() {
                if (isDragging) {
                    isDragging = false;
                    card.style.cursor = 'grab';
                }
            });
        });
    </script>
</head>
<body>
    <div class="card">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <h2>User Registration</h2>
            <label>Username:</label>
            <input type="text" name='username' placeholder="Enter your username">
            <label>Password:</label>
            <input type="password" name='password' placeholder="Enter your password">
            <label>Email:</label>
            <input type="text" name='email' placeholder="Enter your email">
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>