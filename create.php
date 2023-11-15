<?php
require_once "config.php"; 

<<<<<<< HEAD
$id = $firstname = $middlename = $lastname = $address = $age  = $contact = $email = "";
$id_error = $firstname_error = $middlename_error = $laststname_error = $address_error = $age_error = $contact_error = $email_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST["firstname"]); 
    if (empty($firstname)) {
        $firstname_error = "firstname is required.";
    } else {
        $firstname = $firstname;
    }
    $middlename = trim($_POST["middlename"]); 
    if (empty($middlename)) {
        $middlename_error = "middlename is required.";
    } else {
        $middlename = $middlename;
    }
    $lastname = trim($_POST["lastname"]); 
    if (empty($lastname)) {
        $lastname_error = "lastname is required.";
    } else {
        $lastname = $lastname;
=======
$id = $fname = $mname = $lname = $address = $age = $birthdate = $contact = $email = "";
$id_error = $fname_error = $mname_error = $lname_error = $address_error = $age_error = $birthdate_error = $contact_error = $email_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim($_POST["fname"]); 
    if (empty($fname)) {
        $fname_error = "First name is required.";
    } else {
        $fname = $fname;
    }

    $mname = trim($_POST["mname"]); 
    if (empty($mname)) {
        $mname_error = "Middle name is required.";
    } else {
        $mname = $mname;
    }

    $lname = trim($_POST["lname"]); 
    if (empty($lname)) {
        $lname_error = "Lastname is required.";
    } else {
        $lname = $lname;
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
    }

    $address = trim($_POST["address"]);

    if (empty($address)) {
        $address_error = "address is required.";
    } else {
        $address = $address;
    }

    $age = trim($_POST["age"]);

    if (empty($age)) {
        $age_error = "age is required.";
    } else {
        $age = $age;
    }

    $birthdate = trim($_POST["birthdate"]);
    if(empty($birthdate)){
        $birthdate_error = "Birthdate is required.";
    } else {
        $birthdate = $birthdate;
    }
    
    $contact = trim($_POST["contact"]);
    if(empty($contact)){
        $contact_error = "Contact is required.";
    } else {
        $contact = $contact;
    }

    $email = trim($_POST["email"]);
    if(empty($email)){
        $email_error = "Email is required.";
    } else {
        $email = $email;
    }

<<<<<<< HEAD
    if (empty($fullname_error) && empty($address_error) && empty($age_error) && empty($birthdate_error) && empty($contact_error) && empty($email_error)) {
          $sql = "INSERT INTO `info` (id,`firstname`, `middlename`, `lastname`, `address`, `age`, `contact`,  `email`) VALUES (id,'firstname', '$middlename', '$lastname', '$address', '$age', '$contact', '$email')";
=======
    if (empty($fname_error) && empty($mname_error) && empty($lname_error) && empty($address_error) && empty($age_error) && empty($birthdate_error) && empty($contact_error) && empty($email_error)) {
          $sql = "INSERT INTO `info` (id,`fname`,`mname`, `lname`, `address`, `age`, `birthdate`, `contact`,  `email`) VALUES (id,'$fname','$mname','$lname', '$address', '$age', '$birthdate', '$contact', '$email')";
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363


    if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }1
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2><img  style="height: 100px;" src="image/idle.png">Customer's Fill-up Form</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<<<<<<< HEAD
                        <div class="form-group <?php echo (!empty($firstname_error)) ? 'has-error' : ''; ?>">
                            <label>Firstname:</label>
                            <input type="text" name="firstname" class="form-control" value="">
                            <span class="help-block"><?php echo $firstname_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($middlename_error)) ? 'has-error' : ''; ?>">
                            <label>Middlename:</label>
                            <input type="text" name="middlename" class="form-control" value="">
                            <span class="help-block"><?php echo $middlename_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($lastname_error)) ? 'has-error' : ''; ?>">
                            <label>Lastname:</label>
                            <input type="text" name="lastname" class="form-control" value="">
                            <span class="help-block"><?php echo $lastname_error;?></span>
=======
                        <div class="form-group <?php echo (!empty($fullname_error)) ? 'has-error' : ''; ?>">
                            <label>First Name:</label>
                            <input type="text" name="fname" class="form-control" value="" placeholder="First Name">
                            <span class="help-block"><?php echo $fname_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($fullname_error)) ? 'has-error' : ''; ?>">
                            <label>Middle Name:</label>
                            <input type="text" name="mname" class="form-control" value="" placeholder="Middle Name">
                            <span class="help-block"><?php echo $mname_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($fullname_error)) ? 'has-error' : ''; ?>">
                            <label>Last Name:</label>
                            <input type="text" name="lname" class="form-control" value="" placeholder="Last Name">
                            <span class="help-block"><?php echo $lname_error;?></span>
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
                        </div>

                        <div class="form-group <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control" value="" placeholder="Address">
                            <span class="help-block"><?php echo $address_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($age_error)) ? 'has-error' : ''; ?>">
                            <label>Age:</label>
                            <input type="text" name="age" class="form-control" value="" placeholder="Age">
                            <span class="help-block"><?php echo $age_error;?></span>
                        </div>

<<<<<<< HEAD
=======
                        <div class="form-group <?php echo (!empty($birthdate_error)) ? 'has-error' : ''; ?>">
                            <label>Birth Date:</label>
                            <input type="date" name="birthdate" class="form-control" value="" placeholder="Birthdate">
                            <span class="help-block"><?php echo $birthdate_error;?></span>
                        </div>
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363

                        <div class="form-group <?php echo (!empty($contact_error)) ? 'has-error' : ''; ?>">
                            <label>Contact:</label>
                            <input type="number" name="contact" class="form-control" value="" placeholder="Contact">
                            <span class="help-block"><?php echo $contact_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                            <span class="help-block"><?php echo $email_error;?></span>
                        </div>

                        


                        <input onclick="myFunction()" type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>

                        <script>
                            function myFunction() {
                              alert( "Successfully Saved Information!! ");
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>