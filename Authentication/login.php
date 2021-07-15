<?php   
    $errors = array(
        'auth-id' => "", 
        'password' => ""
    );
    
    $fields = array(
        'auth-id' => "", 
        'password' => ""
    );

    if (isset($_POST['button'])) {
        //accepting input
        $fields['auth-id'] = htmlspecialchars($_POST['auth-id']);
        $fields['password'] =htmlspecialchars( $_POST['password']);

        //validating emptiness
        if (empty($fields['auth-id'])) {
            $errors['auth-id'] = "an id is required"; 
        }
        if (empty($fields['password'])) {
            $errors['password'] = " a password is required";
        }
    }

?>

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
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post" id="form">
        <label>
            Patient / Staff ID:
            <input type="text" name="auth-id" id="auth-id" value="<?php echo $fields['auth-id'] ?>" > <br>
            <div class="error"><?php  echo $errors['auth-id'] ?></div>
        </label>
        <label>
            Password:
            <input type="password" name="password" id="password" value="<?php echo $fields['password'] ?>"> <br>
            <div class="error"><?php  echo $errors['password'] ?></div>
        </label>
            <input type="submit" value="Log In" name="button">
    </form>

    <p>new here ? <a href="./register.php" id="sign-up-link">Register</a> </p>
</body>
</html>