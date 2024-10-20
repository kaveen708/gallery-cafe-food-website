<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="image/short_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function handleMessages() {
            const urlParams = new URLSearchParams(window.location.search);
            const successMessage = urlParams.get('success');
            const errorMessage = urlParams.get('error');
            if (successMessage) {
                document.getElementById('success_message').innerText = successMessage;
                setTimeout(() => {
                    window.location.href = 'reservation1.php';
                }, 3000); // Redirect after 3 seconds
            }
            if (errorMessage) {
                document.getElementById('error_message').innerText = errorMessage;
            }
        }
    </script>
</head>
<body onload="handleMessages()">

    <div class="hero">
        <div class="login_form">
            <h1>Login</h1>
            <form class="input_box" method="POST" action="register.php">
                <input type="text" name="name" class="field" placeholder="Name" required>
                <input type="password" name="password" class="field" placeholder="Password" maxlength="10" required>
                <input type="email" name="email" class="field" placeholder="Email" required>
                <div class="remember_me">
                    <input type="checkbox" name="remember" class="check_box">
                    <label for="remember">Remember Password</label>
                </div>
                <button type="submit" class="submit_btn">Login</button>
                <div class="social_icon">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-google"></i>
    </div>
                <div class="tag">
                    <span>New User?</span>
                    <a href="singup.php">Sign Up</a>
                </div>
            </form>
            <p id="success_message" class="success_message"></p>
            <p id="error_message" class="error_message"></p>
        </div>
    </div>

</body>
</html>
