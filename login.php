<!DOCTYPE html>
<html>
<head>
    <title>Akai Hotel - Login</title>
    <link rel="shortcut icon" href="img/akai-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="src/style.css">
    <script src="src/library/jquery-3.5.1.js"></script>
    <script src="src/library/jquery-ui-1.12.1/jquery-ui.js"></script>
</head>

<body id="background">
    <div id="login" class="card">
        <h2>Login</h2><br>
        <form method="POST">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="username">Password:</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="Login" onclick="usernameValidation()" class="button">
        </form>
    </div>
    <script>
        function usernameValidation() {
            let username = document.getElementById("username");                       
            let password = document.getElementById("password");        

            if (username.value.length >= 5 && password.value.length != 0) {
                $('form').attr('action', 'home.php')
            } else if (password.value.length == 0){
                alert("Your password is empty")
            } else if (username.value.length < 5) {
                alert("Your username is invalid")
            }
        }
    </script>
</body>

</html>