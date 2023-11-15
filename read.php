<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
        #printButton {
            display: block;
        }

        /* Hide the print button when printing */
        @media print {
            #printButton {
                display: none;
            }
        }
        @media .btn-back {
                display: none !important;
        }

    </style>
</head>
<body>  
  <?php
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        require_once "config.php";

        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM info WHERE firstname = '$id'");

        if ($customer = mysqli_fetch_assoc($query)) {
            $id   = $customer["id"];
            $firstname   = $customer["firstname"];
            $middlename   = $customer["middlename"];
            $lastname   = $customer["lastname"];
            $address   = $customer["address"];
            $age    = $customer["age"];
            $contact = $customer["contact"];
            $email = $customer["email"];
        } else {
            header("location: read.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        header("location: read.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1> Customer's Information</h1>
                    </div>
                    <div class="form-group">
                        <label>Id</label>
                        <p class="form-control-static"><?php echo $id ?></p>
                    </div>
                    <div class="form-group">
                        <label>Firstname</label>
                        <p class="form-control-static"><?php echo $firstname ?></p>
                    </div>
                    <div class="form-group">
                        <label>Middlename</label>
                        <p class="form-control-static"><?php echo $middlename ?></p>
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <p class="form-control-static"><?php echo $lastname ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $address?></p>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <p class="form-control-static"><?php echo $age ?></p>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <p class="form-control-static"><?php echo $contact ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $email ?></p>
                    </div>
                    <button id="printButton">Print</button>
                    <style type="text/css">
                        .wrapper{
                            width: 500px;
                            margin: 0 auto;
                        }
                    </style>
                    <button id="printButton">Back</button>
                    <style type="text/css">
                        .wrapper{
                            width: 500px;
                            margin: 0 auto;
                        }
                    </style>
                </div>
                <script src="script.js"></script>
            </div>
        </div>
    </div>
</body>
</html>
