<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
    <form action="register.php" method="post" id="form">
        <label>
            First Name:
            <input type="text" name="first-name" id="first-name">
        </label>
        
        <label>
            Last Name:
            <input type="text" name="last-name" id="last-name">
        </label>
        <label>
            Email:
            <input type="email" name="email" id="email">
        </label>
        <label>
            Contact:
            <input type="tel" name="contact" id="contact">
        </label>
        <label>
            Password:
            <input type="password" name="password-1" id="password-1">
        </label>
        <label>
            Confirm Password:
            <input type="password" name="password-2" id="password-2">
        </label>

        <label>
            <input type="submit" value="Register">
        </label>
    </form>

    <p>already have an account ? <a href="#" id="sign-in-link">Sign In</a> </p>
</body>
</html>