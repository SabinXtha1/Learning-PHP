<?php 
include("header.html");
setcookie("user","aa",time()+8600,'/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body>
    <div style="width:100vw; position:absolute; height:200vh; background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;z-index:-1;"></div>
<div class="hero-container" style="
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;z-index:2;
   
    text-align: center;
">
    <div class="hero-content">
        <h1 style="
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: white;
        ">This is Home Page</h1>
        <p style="
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
        ">Welcome to our website!</p>
    </div>
</div>
</body>
</html>
<?php 
include("footer.html")
?>