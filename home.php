<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Leaf.png" type="png">
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home Page</title>
</head>

<body style=" 
            background-image: url('images/home.jpg'); 
            background-size: cover; 
            background-position: center; 
            /* background-attachment: fixed; */
            font-family: monospace;"
            overflow-y: scroll;>

<div class="header">
    <a href="https://www.facebook.com/jeian.1817" class="logo">
        <img src="images/Leaf.png" alt="Logo" style="height: 40px; ">EcoScan</a>
    <div class="header-right">
        <a class="active" href="home.php"><u>Home</u></a><a style="pointer-events: none;"></a>
        <a href="category.php">Category</a><a style="pointer-events: none;"></a>
        <a href="about.php">About</a><a style="pointer-events: none;"></a>
        <a href="contact.php">Contact</a><a style="pointer-events: none;"></a>
    </div>
</div>

<center>
    <div class="content-container">
        <div class="container">
            <font color=white><h1><p class="space">Plant make a positive impact on your environment!</p></h1></font>
            <table>
                <tr>
                    <td><input type="submit" value="Login"><br></td>
                </tr>
                <tr>
                    <td>
                        <font color=white class="afont">Don't have an account?</font> 
                        <a href="register.php"><font color=green><u>Register</u></font>
                    </td>
                </tr>
            </table>
        </div>
        <div class="logo-container">
            <img src="images/homeleaf.png" alt="Logo">
        </div>
    </div>
</center>


</body>
</html>
