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
                            <li class="collection-item avatar">
                            <i class="material-icons circle">person</i>
                            <p>Mr John Wesley</p>
                            <p>2034578797</p>
                            <p>Savings</p>
                            <p>22/05/2020</p>
                            <a href="#!" class="btn waves-effect waves-light secondary-content modal-trigger" data-target="editmodal" ><i class="material-icons">remove_red_eye</i></a>
                            </li>
                               <!-- Modal Structure -->
                                <div id="editmodal" class="modal">
                                    <div class="modal-content">
                                    <!-- Modal Form  -->
                                    <form class="col s12" style="margin: 3rem auto;">
                                        <div class="row">
                                            <div class="input-field col s6">
                                            <input placeholder="" id="first_name" type="text" class="validate">
                                            <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                            <input id="middle_name" type="text" class="validate">
                                            <label for="middle_name">Middle Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                            <input id="last_name" type="text" class="validate">
                                            <label for="last_name">Last Name</label>
                                            </div>
                                            <div class="input-field col s3">
                                                    <select id="gender" type="text" class="validate">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    </select>
                                                    <label for="gender">Gender</label>
                                            </div>
                                            <div class="input-field col s3">
                                            <input id="dob" type="text" class="datepicker validate">
                                            <label for="dob">Date Of Birth</label>
                                            </div>                                    
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                    <select id="relationship" type="text" class="validate">
                                                    <option value="1">Single</option>
                                                    <option value="2">Married</option>
                                                    <option value="1">Divorced</option>
                                                    <option value="2">Others</option>
                                                    </select>
                                                    <label for="relationship">Relationship</label>
                                            </div>
                                            <div class="input-field col s4">
                                            <input id="phonenumber" type="text" class="validate">
                                            <label for="phonenumber">Phone Number</label>
                                            </div>
                                            <div class="input-field col s4">
                                            <input id="email" type="email" class="validate">
                                            <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s5">
                                            <input disabled value="Account number is unavailable" id="disabledaccount" type="text" class="validate">
                                            <label for="disabledaccount">Account Number</label>
                                            </div>
                                            <div class="input-field col s2">
                                                    <select id="account_type" type="text" class="validate">
                                                    <option value="1">Current</option>
                                                    <option value="2">Savings</option>
                                                    </select>
                                                    <label for="account_type">Account Type</label>
                                            </div>
                                            <div class="input-field col s5">
                                            <input disabled value="BVN is unavailable" id="disabledbvn" type="text" class="validate">
                                            <label for="disabledbvn">Bank Verificaton Nunmber</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                            <input id="address" type="text" class="validate">
                                            <label for="address">Address</label>
                                            </div>
                                            <div class="input-field col s3">
                                            <input id="state" type="text" class="validate">
                                            <label for="state">State</label>
                                            </div>
                                            <div class="input-field col s3">
                                            <input id="country" type="text" class="validate">
                                            <label for="country">Country</label>
                                            </div>
                                            <div class="input-field col s6">
                                                    <select id="accountstatus" type="text" class="validate">
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="1">Dormant</option>
                                                    <option value="2">Frozen</option>
                                                    </select>
                                                    <label for="accountstatus">Account Status</label>
                                            </div>
                                            <div class="input-field col s6">
                                                    <select id="kycstatus" type="text" class="validate">
                                                    <option value="1">Verified</option>
                                                    <option value="2">Non-Verified</option>
                                                    <option value="1">Submitted</option>
                                                    </select>
                                                    <label for="kycstatus">KYC Status</label>
                                            </div>
                                            <div class="input-field col s6">
                                            <input id="verifieddate" type="text" class="datepicker validate">
                                            <label for="verifieddate">KYC Verified Date</label>
                                            </div>
                                            <div class="input-field col s6">
                                            <input id="approvalid" type="text" class="validate">
                                            <label for="approvalid">Staff ID</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-controls">
                                                <a href="" class="modal-close btn waves-effect waves-light green col s3 offset-s9" ><i class="material-icons right">save</i>Approve Record</a>
                                            </div>
                                        </div>
                                        </form>
                                    <!-- Modal Form ends -->
                                    </div>
                                </div>                               
                        </ul>
                    </div>
                    <!-- View Customer Records Ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Home page layout ends -->

    <!-- JQuery -->
    <script type="text/javascript" src="jQuery/jquery-3.5.1.min.js"></script>
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