<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Dashboard</title>
      <link rel="manifest"  href="manifest.json">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <style type="text/css">
          .wrapper { 
              width: 1200px;
              margin: 0 auto;
          }
          body{
            background: lightblue;
          }
          
      </style>
  </head>
  <body>
    <div class="wrapper" >
        <div class="container-fluid">
            <div class="row">
              <h2 class="text-center"><img  style="height: 100px;" src="image/idle.png"></img>CUSTOMER'S INFORMATION</h2>
                <div class="col-md-20">
                    <div class="page-header clearfix" >
                        <h2 class="pull-left" style="color: black ;">CHECKLIST</h2>
                        <a href="create.php" class="btn btn-primary pull-right">Add New Customer</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // select all cars
                    $data = "SELECT * FROM info";
                    if($info = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($info) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead style='background-color: lightblue';>
                                      <tr >
<<<<<<< HEAD
                                        <th>id</th>
                                        <th>firstname</th>
                                        <th>middlename</th>
                                        <th>lastname</th>
                                        <th>address</th>
                                        <th>age</th>
                                        <th>email</th>
=======
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Age</th>
                                        <th>Action</th>

>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($customer = mysqli_fetch_array($info)) {
                                    echo "<tr>
                                            <td>" . $customer['id'] . "</td>
<<<<<<< HEAD
                                            <td>" . $customer['firstname'] . "</td>
                                            <td>" . $customer['middlename'] . "</td>
                                            <td>" . $customer['lastname'] . "</td>
=======
                                            <td>" . $customer['fname'] . "</td>
                                            <td>" . $customer['mname'] . "</td>
                                            <td>" . $customer['lname'] . "</td>
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
                                            <td>" . $customer['address'] . "</td>
                                            <td>" . $customer['age'] . "</td>
                                            
                                            <td>
<<<<<<< HEAD
                                              <a href='read.php?id=". $customer['firstname'] ."' title='View customer' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $customer['firstname'] ."' title='Edit customer' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $customer['firstname'] ."' title='Delete customer' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
=======
                                              <a href='read.php?id=". $customer['id'] ."' title='View customer' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $customer['id'] ."' title='Edit customer' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $customer['id'] ."' title='Delete customer' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
>>>>>>> 20a85959dee57c0d7a70625a38cf4e83d22e8363
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($info);
                        } else{
                            echo "<p class='lead'><em>No records found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>