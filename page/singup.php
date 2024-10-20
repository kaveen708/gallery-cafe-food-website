<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <link rel="stylesheet" href="singup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="short icon" href="image/short_icon.png">
</head>
<body>
    
    <div class="hero">

        <div class="login_form">

            <h1>Register</h1>

            <form class="input_box" method="POST" action="register.php">
    <input type="text" name="name" class="field" placeholder="Name" required>
    <input type="password" name="password" class="field" placeholder="Password" maxlength="10" required>
    <input type="email" name="email" class="field" placeholder="Email" required>
    <input type="checkbox" name="remember" class="check_box"><p>Remember Password</p>
    <button type="submit" class="submit_btn">Register</button>

    <div class="social_icon">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
    </div>

    <div class="tag">
        <span>New User?</span>
        <a href="login.php">Log in</a>
    </div>
</form>


        </div>

    </div>

</body>
</html>