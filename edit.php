<?php
require_once "config.php";

<<<<<<< HEAD
$id = $firstname = $middlename = $lastname = $address = $age = $contact = $email = "";
$id_error = $firstname_error = $middlelname_error = $lastname_error = $address_error = $age_error = $contact_error = $email_error = "";
=======
$id = $fname = $mname = $lname = $address = $age = $birthdate = $contact = $email = "";
$id_error = $fname_error = $mname_error = $lname_error = $address_error = $age_error = $birthdate_error = $contact_error = $email_error = "";
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

<<<<<<< HEAD
        $firstname = trim($_POST["firstname"]); 
        if (empty($firstname)) { 
            $firstname_error = "firstname is required.";
        } elseif (!filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $firstname_error = "firstname is invalid.";
        } else {
            $firstname = $firstname;
        }

        $middlename = trim($_POST["middlename"]); 
        if (empty($middlename)) { 
            $middlename_error = "middlename is required.";
        } elseif (!filter_var($middlename, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $middlename_error = "middlename is invalid.";
        } else {
            $middlename = $middlename;
        }

        $lastname = trim($_POST["lastname"]); 
        if (empty($lastname)) { 
            $lastname_error = "lastname is required.";
        } elseif (!filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $lastname_error = "lastname is invalid.";
        } else {
            $lastname = $lastname;
=======
        $fname = trim($_POST["fname"]); 
        if (empty($fname)) { 
            $fname_error = "First name is required.";
        } elseif (!filter_var($fname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $fname_error = "First name is invalid.";
        } else {
            $fname = $fname;
        }

        $mname = trim($_POST["mname"]); 
        if (empty($mname)) { 
            $mname_error = "Middle name is required.";
        } elseif (!filter_var($mname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $mname_error = "Middle name is invalid.";
        } else {
            $mname = $mname;
        }

        $lname = trim($_POST["lname"]); 
        if (empty($lname)) { 
            $lname_error = "Last name is required.";
        } elseif (!filter_var($lname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $lname_error = "Last name is invalid.";
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

        $contact = trim($_POST["contact"]);
        if (empty($contact)){
            $contact_error = "contact is required.";
        } else {
            $contact = $contact;
        }

        $email = trim($_POST["email"]);
        if (empty($email)){
            $email_error = "email is required.";
        } else {
            $email = $email;
        }

<<<<<<< HEAD
    if (empty($id_error_err) && empty($fullname_error) &&
        empty($address_error_err) && empty($age_error_err) && empty($contact_error_err) && empty($email_error_err) ) {
$sql = "UPDATE `info` SET `firstname`= '$firstname', `middlename`= '$middlename', `lastname`= '$lastname', `address`= '$address', `age`= '$age', `contact`= '$contact', `email`= '$email'  WHERE id ='$id'";
=======
    if (empty($id_error_err) && empty($fname_error) && empty($mname_error) && empty($lname_error) &&
        empty($address_error_err) && empty($age_error_err) && empty($birthdate_error_err) && empty($contact_error_err) && empty($email_error_err) ) {
$sql = "UPDATE `info` SET `fname`= '$name',`fname`= '$fname', `mname`= '$mname', `lname`= '$lname', `address`= '$address', `age`= '$age', `birthdate`= '$birthdate' , `contact`= '$contact', `email`= '$email'  WHERE id ='$id'";
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363

          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
              echo "Something went wrong. Please try again later.";
          }

    }

    mysqli_close($conn);
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
<<<<<<< HEAD
        $query = mysqli_query($conn, "SELECT * FROM info WHERE firstname = '$id'");

        if ($customer = mysqli_fetch_assoc($query)) {
            $id   = $customer["id"];
            $firstname    = $customer["firstname"];
            $middlename    = $customer["middlename"];
            $lastname    = $customer["lastname"];
=======
        $query = mysqli_query($conn, "SELECT * FROM info WHERE id = '$id'");

        if ($customer = mysqli_fetch_assoc($query)) {
            $id   = $customer["id"];
            $fname    = $customer["fname"];
            $mname    = $customer["mname"];
            $lname    = $customer["lname"];
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
            $address  = $customer["address"];
            $age     = $customer["age"];
            $contact     = $customer["contact"];
            $email     = $customer["email"];
        } else {
            echo "Something went wrong. Please try again later.";
            header("location: edit.php");
            exit();
        }
        mysqli_close($conn);
    }  else {
        echo "Something went wrong. Please try again later.";
        header("location: edit.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Information</h2>
                    </div>
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        
<<<<<<< HEAD
                        <div class="form-group <?php echo (!empty($firstname_error)) ? 'has-error' : ''; ?>">
                            <label>Firstname</label>
                            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                            <span class="help-block"><?php echo $firstname_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($middlename_error)) ? 'has-error' : ''; ?>">
                            <label>Middlename</label>
                            <input type="text" name="middlename" class="form-control" value="<?php echo $middlename; ?>">
                            <span class="help-block"><?php echo $middlename_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($lastname_error)) ? 'has-error' : ''; ?>">
                            <label>Lastname</label>
                            <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                            <span class="help-block"><?php echo $lastname_error;?></span>
=======
                        <div class="form-group <?php echo (!empty($fname_error)) ? 'has-error' : ''; ?>">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
                            <span class="help-block"><?php echo $fname_error;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($mname_error)) ? 'has-error' : ''; ?>">
                            <label>Middle name</label>
                            <input type="text" name="mname" class="form-control" value="<?php echo $mname; ?>">
                            <span class="help-block"><?php echo $mname_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($lname_error)) ? 'has-error' : ''; ?>">
                            <label>Last name</label>
                            <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
                            <span class="help-block"><?php echo $lname_error;?></span>
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
                        </div>

                        <div class="form-group <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                            <span class="help-block"><?php echo $address_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($age_error)) ? 'has-error' : ''; ?>">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
                            <span class="help-block"><?php echo $age_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($contact_error)) ? 'has-error' : ''; ?>">
                            <label>Contact</label>
                            <input type="number" name="contact" class="form-control" value="<?php echo $contact; ?>">
                            <span class="help-block"><?php echo $contact_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_error;?></span>
                        </div>



                        <input onClick="myFunction()" type="submit" class="btn btn-primary" value="Save">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                        <script>
                            function myFunction() {
                              alert( "Successfully  Saved! ");
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
