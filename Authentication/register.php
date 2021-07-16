
<?php

$errors = array(
    'firstName' => "", 
    'lastName' => "",
    'email' => "",
    'contact' => "",
    'password-1' => "",
    'password-2' => "",
);

$fields = array(
    'firstName'=>"",
    'lastName' => "", 
    'email' => "", 
    'contact' => "", 
    'password-1' => "", 
    'password-2' => ""
);

if (isset($_POST['submit'])) {
    //getting data form input fields
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $password_1 = htmlspecialchars($_POST['password-1']);
    $password_2 = htmlspecialchars($_POST['password-2']);

    
    //storing data in fields array
    $fields['firstName'] = $firstName;
    $fields['lastName'] = $lastName; 
    $fields['email'] = $email;
    $fields['contact'] = $contact;
    $fields['password-1'] = $password_1; 
    $fields['password-2'] = $password_2;


    //checking for empty fields
    foreach ($fields as $field => $value) {
        if (empty($value)) {
            if ($field == "password-1" or $field == "password-2") {
                $errors[$field] = "password can't be empty";
            }else {
                $errors[$field] = "$field can't be empty";
            }
        }
    }


    //further validation
    foreach ($errors as $field => $error) {

        //invalid email format
        if ($field == "email" and empty($error)) {
            if (!filter_var($fields[$field], FILTER_VALIDATE_EMAIL)) {
                $errors[$field] = "invalid email address"; 
            }
            
        }

        //password mis-match 
        if (($field == 'password-1' or $field == 'password-2') and $fields['password-1'] != $fields['password-2']) {
            $errors[$field] = "password mismatch";
        }

        //other field verification
    }
    

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        #form {
            display: flex;
            flex-direction: column;
        }

        #form label {
            margin-bottom: 20px;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="register.php" method="post" id="form">
        <label>
            First Name:
            <input type="text" name="first-name" id="first-name" value="<?php echo $fields['firstName'] ?>"> <br>
           <div class="error"><?php echo $errors['firstName'] ?></div>
        </label>
        <label>
            Last Name:
            <input type="text" name="last-name" id="last-name" value="<?php echo $fields['lastName'] ?>"> <br>
            <div class="error"><?php echo $errors['lastName'] ?></div>
        </label>
        <label>
            Email:
            <input type="text" name="email" id="email" value="<?php echo $fields['email'] ?>"><br>
            <div class="error"><?php echo $errors['email'] ?></div>
        </label>
        <label>
            Contact:
            <input type="tel" name="contact" id="contact" value="<?php echo $fields['contact'] ?>"><br>
            <div class="error"><?php echo $errors['contact'] ?></div>
        </label>
        <label>
            Password:
            <input type="password" name="password-1" id="password-1" ><br>
            <div class="error"><?php echo $errors['password-1'] ?></div>
        </label>
        <label>
            Confirm Password:
            <input type="password" name="password-2" id="password-2" ><br>
            <div class="error"><?php echo $errors['password-2'] ?></div>
        </label>

        <input type="submit" name="submit" value="Register">
    </form>

    <p>already have an account ? <a href="./login.php" id="sign-in-link">Sign In</a> </p>
</body>

</html>