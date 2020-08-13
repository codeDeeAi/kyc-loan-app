<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $role = $_SESSION['role'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank XYZ</title>
    <link rel="icon" href="imgs/money.jpg">
    <!-- Font-awesome -->
    <link href="font-awesome/all.css" rel="stylesheet">
    <!-- Material fonts offline -->
    <link type="text/css" href="iconfont/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JQuery -->
    <script type="text/javascript" src="jQuery/jquery-3.5.1.min.js"></script>
</head>

<body>
    

    <!-- Home page layout -->
    <div class="row">
        <div class="container-home">
            <div class="row">
                <div class="col s5 m2 z-depth-2 container-home-left">
                    <!-- Navigation -->
                    <?php require_once 'nav.php'; ?>
                </div>
                <div class="col s7 m10 container-home-right">
                    <!-- View Customer Records -->
                    <div class="container" style=" margin-top: 3rem;">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <i class="material-icons prefix">search</i>
                                        <input type="text" id="autocomplete-input" class="autocomplete">
                                        <label for="autocomplete-input">Search</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <ul class="collection">
                            <?php
                            //Open a new connection to the MySQL server
                            $conn = new mysqli('localhost', 'root', 'greeny02', 'kyc');
                            //Output any connection error
                            if ($conn->connect_error) {
                                die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
                            }
                            // select from db 
                            $sql = "SELECT accountNo, accountType, firstName, middleName, lastName, gender, dob, relationship, email, phone, address, state, country, accountStatus, bvn, kycStatus FROM customeraccounts";
                            $result = $conn->query($sql);

                            // Validate and Loop result
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                            ?>  

                            <li class="collection-item avatar z-depth-1">
                            <!-- <i class="material-icons circle">person</i> -->
                            <ul class="collapsible z-depth-0" style="border: none;">
                                <li>
                                <div class="collapsible-header" style="border: none;">
                                    <div class="row">
                                        <p class="col s6"><b>Name :</b> <?php echo  $row["firstName"] . " " . $row["middleName"] . " " . $row["lastName"] ; ?></p>
                                        <p class="col s3"><b>Account Number :</b> <?php echo $row["accountNo"]; ?></p>
                                        <p class="col s3"><b>Phone Number :</b> <?php echo $row["phone"]; ?></p>
                                    </div>
                                </div>
                                <div class="collapsible-body" style="border: none;">
                                        <p><b>Account Type :</b> <?php echo $row["accountType"]; ?></p>
                                        <p><b>Date of Birth :</b> <?php echo $row["dob"]; ?></p>
                                        <p><b>Gender :</b> <?php echo $row["gender"]; ?></p>
                                        <p><b>Relationship :</b> <?php echo $row["relationship"]; ?></p>
                                        <p><b>Email :</b> <?php echo $row["email"]; ?></p>
                                        <p><b>Phone Number :</b> <?php echo $row["phone"]; ?></p>
                                        <p><b>Address :</b> <?php echo  $row["address"] . ", " . $row["state"] . ", " . $row["country"] ; ?></p>
                                        <p><b>Account Status :</b> <?php echo $row["accountStatus"]; ?></p>
                                        <p><b>BVN :</b> <?php echo $row["bvn"]; ?></p>
                                        <p><b>KYC Status :</b> <?php echo $row["kycStatus"]; ?></p>
                                        <p><a  class="btn-flat waves-effect waves-light secondary-content modal-trigger"><i class="material-icons">edit</i></a></p>
                                </div>
                                </li>
                            </ul> 
                            </li>                                      
                               
                            <?php
                                 }
                                } else {
                                    echo "0 results";
                                }
                            ?>                                                                 
                        </ul>
                    </div>
                    <!-- View Customer Records Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Home page layout ends -->

    
    <!-- font-awesome -->
    <script type="text/javascript" src="font-awesome/all.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
    <!-- <script>
        $(document).ready(function () {

            $("#editpop").click(function () {    
                $('.modal').modal('open');
            });
        });
    </script> -->
</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>