<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                $.ajax({
                    type: 'POST',
                    url: 'ecommage/register.php',
                    data: {
                        username: $("#username").val(),
                        password: $("#password").val(),
                        job:      $("#job").val()
                    }
                })
                return validateForm();
            });
        });
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var job = document.getElementById('job').value;
            if (username == ''){
                alert('Bạn chưa nhập tên đăng nhập');
            }
            else if (password == '')
            {
                alert('Bạn chưa nhập mật khẩu');
            }
            else if (job == ''){
                alert('Bạn chưa nhập nghề nghiệp');
            }
            else{
                alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
                window.location.replace('index.php');
                return true;
            }
            return false;

        }
    </script>

</head>
<body>
<h2>Register</h2>
<a href="index.php">Home</a>
<form method="post" onsubmit="return validateForm()"  >
    Name: <input type="text" name="username" id="username"><br>
    Password: <input type="password" name="password" id="password"><br>
    Job: <input type="text" name="job" id="job">
</form>
<button id="submit">Submit</button>
</body>
</html>
