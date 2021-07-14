<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        #form{
            display: flex;
            flex-direction: column;
        }
        #form label {
            margin-bottom: 20px;
        }
        a{
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="" method="post" id="form">
        <label>
            Patient / Staff ID:
            <input type="text" name="auth-id" id="auth-id">
        </label>
        <label>
            Password:
            <input type="password" name="password" id="password">
        </label>
        <label>
            <input type="button" value="Log In">
        </label>
    </form>

    <p>new here ? <a href="#" id="sign-up-link">Register</a> </p>
</body>
</html>