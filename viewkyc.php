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
    <script type="text/javascript">
        $(document).ready(function () {

            $("#append").click(function () {

                loan = $("#loan").val();
                staffid = $("#approvalid").val();
                account = $("#accountNo").val();

                $.ajax({
                    type: "POST",
                    url: "loan.php",
                    data: "loan=" + loan + "&staffid=" + staffid + "&account=" + account,
                    success: function (html) {
                        if (html == 'true') {
                            M.toast({html: 'Account Appended sucessfully!'});

                            window.location.href = "addaccount.php";                            

                        } else {
                            M.toast({html: 'Error processing request. Please try again.'});
                        }
                    },
                    beforeSend: function () {
                        M.toast({html: 'loading...'});
                    }
                });
                return false;
            });
        });
    </script>
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
                            $sql = "SELECT * FROM customeraccounts";
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
                                        <p><a  class="btn-flat waves-effect waves-light secondary-content modal-trigger"><i class="material-icons">edit</i></a></p>
                                        <div class="row">
                                            <div class="add-record">
                                            <form role="form" class="col s12" style="margin: 3rem auto;">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                <input disabled value="<?php echo $row["firstName"]; ?>" type="text" class="validate">
                                                <label>First Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                <input disabled value="<?php echo $row["middleName"]; ?>" type="text" class="validate">
                                                <label>Middle Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                <input disabled value="<?php echo $row["lastName"]; ?>" type="text" class="validate">
                                                <label>Last Name</label>
                                                </div>
                                                <div class="input-field col s3">
                                                <input disabled value="<?php echo $row["gender"]; ?>" type="text" class="validate">
                                                <label>Gender</label>
                                                </div>
                                                <div class="input-field col s3">
                                                <input disabled value="<?php echo $row["dob"]; ?>" type="text" class="datepicker validate">
                                                <label>Date Of Birth</label>
                                                </div>                                    
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $row["relationship"]; ?>" type="text" class="validate">
                                                <label>Relationship</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $row["phone"]; ?>" type="text" class="validate">
                                                <label>Phone Number</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $row["email"]; ?>" type="email" class="validate">
                                                <label>Email</label>
                                                </div>
                                                <div class="input-field col s5">
                                                <input disabled value="<?php echo $row["accountNo"]; ?>" id="accountNo"  type="text" class="validate">
                                                <label>Account Number</label>
                                                </div>
                                                <div class="input-field col s2">
                                                <input disabled value="<?php echo $row["accountType"]; ?>" type="text" class="validate">
                                                <label>Account Type</label>
                                                </div>
                                                <div class="input-field col s5">
                                                <input disabled value="BVN is unavailable" name="disabledbvn" id="disabledbvn" type="text" class="validate">
                                                <label>Bank Verificaton Nunmber</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                <input disabled value="<?php echo $row["address"]; ?>" type="text" class="validate">
                                                <label>Address</label>
                                                </div>
                                                <div class="input-field col s3">
                                                <input disabled value="<?php echo $row["state"]; ?>" type="text" class="validate">
                                                <label>State</label>
                                                </div>
                                                <div class="input-field col s3">
                                                <input disabled value="<?php echo $row["country"]; ?>" type="text" class="validate">
                                                <label>Country</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $row["accountStatus"]; ?>" type="text" class="validate">
                                                <label>Account Status</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <select id="kycstatus" name="kycstatus" type="text" class="validate">
                                                <option value="1">Verified</option>
                                                <option value="2">Non-Verified</option>
                                                <option value="1">Submitted</option>
                                                </select>
                                                <label>KYC Status</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input id="kycdate" name="kycdate"  type="text" class="datepicker validate">
                                                <label>KYC Verified Date</label>
                                                </div>
                                                <div class="input-field col s2">
                                                <input disabled value="<?php echo $row["loanStatus"]; ?>"  type="text" class="datepicker validate">
                                                <label>Loan Status</label>
                                                </div>
                                                <div class="input-field col s5">
                                                <input disabled value="<?php echo $row["approvalOfficerId"]; ?>" id="approvalid" name="approvalid" type="text" class="validate">
                                                <label>Loan Staff ID</label>
                                                </div>
                                                <div class="input-field col s5">
                                                <input disabled value="<?php echo $email; ?>" id="kycid" name="kycid" type="text" class="validate">
                                                <label>KYC Staff ID</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-controls">
                                                    <button type="submit" id="append"  class="btn waves-effect waves-light green col s3 offset-s9"><i class="material-icons right">save</i>Append Record</button>                                        
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
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
</body>

</html>
<?php

} else {
    header("location:login.php ");
}
?>