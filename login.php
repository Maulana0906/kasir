
<?php 
    if(isset($_GET["submit"])) {
        if($_GET["username"] == "admin" && $_GET["password"] == "admin123"){
            header("Location: login.php");
            exit;
        } else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login/style.css">
</head>
<body>
    <?php 
    if(isset($error)) {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Username/password salah")';  
        echo '</script>';  }
    ?>
    <form action="" method="get">
        <h1>Login</h1>
        <label for="username">
            username : <br>
            <input type="text" name="username" placeholder="username" id="username" autocomplete="off">
        </label> <br>
        <label for="password">
            password : <br>
            <input type="password" name="password" placeholder="password" id="password" autocomplete="off">
        </label> <br>
        <button type="submit" name="submit"> Login</button>
    </form>
</body>
</html>