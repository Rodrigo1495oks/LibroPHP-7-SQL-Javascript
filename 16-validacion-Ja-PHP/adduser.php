<?php



$forename=$surname=$username=$password=$age=$email="";

if (isset($_POST["forename"])) {
    # code...
    $forename=fix_string($_POST["forename"]);
}

if (isset($_POST["surname"])) {
    # code...
    $surname=fix_string($_POST["surname"]);
}
if (isset($_POST["username"])) {
    # code...
    $username=fix_string($_POST["username"]);
}
if (isset($_POST["password"])) {
    # code...
    $password=fix_string($_POST["password"]);
}
if (isset($_POST["age"])) {
    # code...
    $age=fix_string($_POST["age"]);
}


if (isset($_POST["email"])) {
    # code...
    $email=fix_string($_POST["email"]);
}

$fail=validate_forename($forename);
$fail.=validate_surname($surname);
$fail.=validate_username($username);
$fail.=validate_password($password);
$fail.=validate_age($age);
$fail.=validate_email($email);

echo <<<_END 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .signup {
            border: 1 px solid #999999;
            font: normal 14px helvetica;
            color: #444;
        }
    </style>
</head>

<body>
    <table class="signup" border="0" cellpadding="2" cellspacing="2" bgcolor="#eeeeee">
        <th colspan="2" align="center">Signup Form</th>

        <tr>
        <td colspan="2">Sorry, the following errors were found<br>in your form:
            <p>
                <font color='red' size=1>
                    <i>$fail</i>
                </font>
            </p>
        </td>
    </tr>
        <form action="adduser.php" method="post" onsubmit="return validate(this)">
            <tr>
                <td>Forename</td>
                <td><input type="text" name="forename" id="forename" maxlength="32" value="$forename"></td>
            </tr>
            <tr>
                <td>Surname</td>
                <td><input type="text" name="surname" id="surname" maxlength="32" value="$surname"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" maxlength="32" value="$username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" id="password" maxlength="32" value="$password"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age" id="age" maxlength="3" value="$age"></td>
            </tr>
            <tr>
                <td>Email/td>
                <td><input type="email" name="email" id="email" maxlength="64" value="$email"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" value="Signup"></td>
            </tr>
        </form>
    </table>
    <script>
        function validate(form) {
            fail = validateForename(form.forename.value)
            fail += validateSurname(form.surname.value)
            fail += validateUsername(form.username.value)
            fail += validatePassword(form.password.value)
            fail += validateAge(form.age.value)
            fail += validateEmail(form.email.value)

            if (fail == "") {
                return true
            }

            alert(fail)
            return false
        }

        function validateForename(field) {
            return (field == "") ? "No Forename was entered.\n" : ""
        }

        function validateSurname(field) {
            return (field == "") ? "No Surname was entered.\n" : ""
        }

        function validateUsername(field) {
            if (field == '') {
                return "No username was entered.\n"
            } else if (/[^a-zA-Z0-9_-]/.test(field)) {
                return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
            }
            return ""
        }

        function validatePassword(field) {
            if (field == '') {
                return "No password was entered.\n"
            } else if (field.length < 6) {
                return "Passwords must be at least 6 Characters.\n"
            } else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field)) {
                return "Passwords require one each of a-z, A-Z and 0-9.\n"
            }
        }

        function validateAge(field) {
            if (field == '' || isNaN(field)) {
                return "No Age was entered.\n"
            } else if (field < 18 || field > 110) {
                return "Age must be between 18 and 110.\n"
            }
        }

        function validateEmail(field) {
            if (field == '') {
                return "No email was entered.\n"
            } else if (!(field.indexOf(".") > 0) && (field.indexOf("@") > 0) || /[^a-aZ-Z0-9.@_-]/.test(field)) {
                return "The email address is invalid.\n"
            }
        }
    </script>

    <!-- </script> -->
</body>

</html>


_END;

// the php functions

function validate_forename($field){
    return ($field=='')?"No forename was entered <br>":"";
}
function validate_surname($field){
    return ($field=='')?"No surname was entered <br>":"";

}

function validate_username($field){

    if ($field=='') {
        # code...
        return "No username was entered <br>";
    }elseif(strlen($field<5)){
        return "Usernames must be at least 5 characters<br>";
    }elseif (preg_match("/[^a-zA-Z0-9_-]/",$field)) {
        # code...
        return "Only letters, numbers, - and _ in usernames are allowed<br>";
    }

}

function validate_password($field){
    if ($field=='') {
        # code...
        return "No password was entered<br>";
    }else if (strlen($field<6)) {
        # code...
        return "Passwords must be at least 6 characters<br>";
    }elseif(!preg_match("/[a-z]/",$field)||
    !preg_match("/[A-Z]/",$field)||
    !preg_match("/[0-9]/",$field)
    ){
        return "Passwords require 1 each of a-z, A-Z and 0-9<br>";    }
    
}

function validate_age($field){
    if ($field=="") {
        # code...
        return "No age was entered<br>";
    }else if ($field<18||$field>110) {
        # code...
        return "Age must be between 18 and 110 <br>";
    } 

}

function validate_email($field) {
    if ($field=='') {
        return "No email was entered<br>";
    }else if (!((strpos($field,".")>0)&&(strpos($field,"@")>0))||preg_match("/[^a-zA-Z0-9.@_-]/",$field)) {
        # code...
        return "The email address is invalid<br>";
    }
    
}

function fix_string($string){

    if (get_magic_quotes_gpc()) {
        $string=stripslashes($string);
        return htmlentities($string);
    }
}

?>