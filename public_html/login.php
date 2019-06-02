
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                $.ajax({
                    type: "POST",
                    url: 'ecommage/login.php',
                    data: {
                        username: $("#username").val(),
                        password: $("#password").val(),
                    },
                    success: function(data){
                        if (data === 'success'){
                            window.location.replace("profile.php");
                        }
                        else {
                            return validateForm();
                        }
                    }
                });
            });
        });
        function validateForm()
        {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === ''){
                alert('Bạn chưa nhập tên đăng nhập');
                return false
            }
            else if (password === '')
            {
                alert('Bạn chưa nhập mật khẩu');
                return false
            }
            else{
                window.location.replace("profile.php");
                return true;
            }
            // alert("loi") ;
        }
    </script>
</head>
<body>
<h2>Login</h2>
<a href="index.php">Home</a>

<form method="post" onsubmit="return validateForm()">
    username: <input type="text" name="username" id="username"><br>
    Password: <input type="password" name="password" id="password"><br>
    <!--    <input type="submit" id="submit" value="Login"/>-->
</form>
<button id="submit" type="submit">Submit</button>

</body>
</html>

