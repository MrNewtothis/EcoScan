<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" href="images/Leaf.png" type="png">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
    
</head>
<body style="background-image: url('images/home.jpg'); background-size: cover; background-position: center; font-family: monospace; overflow-y: scroll;">

<div class="container">
    <div class="form-container">
        <a style="pointer-events: none;" href="https://www.facebook.com/jeian.1817" class="logo">
            <img src="images/Leaf.png" alt="Logo" style="height: 40px; ">EcoScan
        </a>

        <div class="form-inner-container">
            <form action="#" method="post">
                <table >
                    <tr>
                        <th colspan="3">Log In to your Account</th>
                    </tr>
                    <tr>
                        <td colspan=3><center><input type="text" id="name" name="name" placeholder="Enter Username" required></center></td>
                    </tr>
                    <tr>
                        <td colspan=3><center><input type="email" id="email" name="email" placeholder="Enter Email" required></center></td>
                    </tr>
                    <tr>
                        <td colspan=3><center><input type="password" id="password" name="password" placeholder="Password" required></center></td>
                    </tr>
                    <tr>
                        <td colspan=3><center><input type="password" id="confirm" name="confirm" placeholder="Confirm Password" required></center></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit" value="Register"></td>
                    </tr>
                    <tr>
                        <td><hr width=120px></td>  
                        <td> <center> Or </center> </td>
                        <td><hr width=120px></td>     
                    </tr>
                    <tr>
                        <td colspan=3><i>Already have account? <a href="login.php"><font color=#00FF19><u>Login!</u></i></font></a></td>
                    </tr>
                    
                </table>
            </form>
        </div>
    </div>

    <div class="logo-container">
        <img src="images/login.png" alt="Logo">
    </div>
</div>

</body>
</html>
