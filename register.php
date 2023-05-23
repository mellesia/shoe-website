<?php  
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");
     $account = new Account($con);

       if(isset($_POST["submitButton"])) {
        
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $addres = FormSanitizer::sanitizeFormaddres($_POST["addres"]);
        $phone = FormSanitizer::sanitizeFormphone($_POST["phone"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);
        
        $success = $account->register($firstName, $lastName, $username, $addres,  $phone, $email, $email2, $password, $password2);

        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/favicon.png" type="">
   <title>shoes website</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />
</head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="images/trendy11.png" title="Logo" alt="Site logo" />
                    <h3>Sign Up</h3>
                    <span>to continue to Trendy shoe</span>
                </div>

                <form method="POST">


                   <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <input type="text" name="firstName" placeholder="First name" required>


                    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <input type="text" name="lastName" placeholder="Last name" required>

                   
                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                   <input type="text" name="username" placeholder="Username" required>

                   <?php echo $account->getError(Constants::$adressCharacters); ?>
                    <input type="text" name="addres" placeholder="addres" required>

                    <?php echo $account->getError(Constants::$phonenumber); ?>
                     <input type="text" id="phone" name="phone" placeholder="phone" required>
                                       <span id='span' style="display:none">  please Enter Valid PHone</span>

                     <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <?php echo $account->getError(Constants::$emailTaken); ?>
                   <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
                    <?php echo $account->getError(Constants::$passwordLength); ?>
                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

            </div>

        </div>
<script>
let phone = document.getElementById('phone')
let span = document.getElementById('span')

phone.onkeyup = function(){
  if(phone.value.length > 13){
     phone.style.border = "1px solid red";
     span.style.display="block";
  }else{
    span.style.display="none";
  }
}
</script>
    </body>
</html>