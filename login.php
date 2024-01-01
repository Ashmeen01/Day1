<?php
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
    
            background-color: coral;
            height: 100vh;
            margin-bottom: 300px;
            width: 100%;
        }
        .row > input{
            width: 100%;
            padding: 8px;
            border: none;
            outline: none;
            margin-bottom: 10px;
            border-radius: 7px;
        }
        button{
            width: 100%;
            padding: 8px;
            border: none;
            outline: none;
            border-radius: 5px;
            background-color: yellowgreen;
            color: white;
            font-size: 22px;
            width: 500;
            cursor: pointer;
        }
        h2{
            /* background-color: yellowgreen; */
            color: yellowgreen;
            font-family: sans-serif;
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="container">
        <h2>Login Page</h2>
        <div class="row">
            <input type="email" name="email" id="" placeholder="Email" required>

        <div class="row">
            <input type="password" name="password" id="" placeholder="Password" required>
        </div>
        <div class="row">
            <button type="submit" name="log">login</button>
        </div>
        <p>Don't have an account<a href="reg.php">Click here</a></p>
    </div>
    </form>
</body>
</html>