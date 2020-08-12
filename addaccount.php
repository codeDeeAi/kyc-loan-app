<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer - Bank XYZ</title>
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

            $("#add").click(function () {

                fname = $("#first_name").val();
                mname = $("#middle_name").val();
                lname = $("#last_name").val();
                email = $("#email").val();
                gender = $("#gender").val();
                dob = $("#dob").val();
                relationship = $("#relationship").val() ;       
                pnumber = $("#phonenumber").val();
                email = $("#email").val();
                accountno = $("#disabledaccount").val();
                accounttype = $("#account_type").val();
                bvn = $("#disabledbvn").val();
                address = $("#address").val();
                state = $("#state").val();
                country = $("#country").val();
                accountstatus = $("#accountstatus").val();
                kycstatus = $("#kycstatus").val();
                verifieddate = $("#verifieddate").val();
                staffid = $("#approvalid").val();

                $.ajax({
                    type: "POST",
                    url: "send.php",
                    data: "fname=" + fname + "&mname=" + mname + "&lname=" + lname + "&gender=" + gender + "&dob=" + dob + "&relationship=" + relationship + "&pnumber=" + pnumber + "&email=" + email + "&address=" + address + "&state=" + state + "&country=" + country + "&accountstatus=" + accountstatus ,
                    success: function (html) {
                        if (html == 'true') {
                            M.toast({html: 'Account Added sucessfully!'});
                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> added succesfully. \ \
                                                 </div>');

                            window.location.href = "addaccount.php";                            

                        }
                        else if (html == 'connecterror') {
                            M.toast({html: 'Pls login to perform task.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Pls Login</strong> to perform task. \ \
                                                 </div>');                    

                        } else if (html == 'false') {
                            M.toast({html: 'Email Address already in system.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            M.toast({html: 'First Name is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'lname') {
                            M.toast({html: 'Last Name is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        }  else if (html == 'gender') {
                            M.toast({html: 'Gender is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Gender</strong> is required. \ \
                                                 </div>');

                        }
                        else if (html == 'dob') {
                            M.toast({html: 'Date of Birth is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Date of Birth</strong> is required. \ \
                                                 </div>');

                        }
                        else if (html == 'relationship') {
                            M.toast({html: 'Relationship Status is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Relationship Status</strong> is required. \ \
                                                 </div>');

                        }else if (html == 'eformat') {
                            M.toast({html: 'Email Address format is not valid.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pnumber') {
                            M.toast({html: 'Phone number is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Phone number</strong> must be at least 4 characters . \ \
                                                 </div>');

                        }
                        else if (html == 'address') {
                            M.toast({html: 'Address is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Address</strong> is required. \ \
                                                 </div>');

                        }
                        else if (html == 'state') {
                            M.toast({html: 'State is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>State</strong> is required. \ \
                                                 </div>');

                        }
                        else if (html == 'country') {
                            M.toast({html: 'Country is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Country</strong> is required. \ \
                                                 </div>');

                        }
                        else if (html == 'accountstatus') {
                            M.toast({html: 'Account Status is required.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Account Status</strong> is required. \ \
                                                 </div>');

                        } else {
                            M.toast({html: 'Error processing request. Please try again.'});
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        M.toast({html: 'loading...'});
                        $("#add_err2").html("loading...");
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
                    <!-- Add New Customer Account Form -->
                    <div class="row">
                        <div class="error col s12 red-text grey" id="add_err2" style="height: 10px;"></div>
                    </div>
                    <div class="container">
                             <div class="row">
                                <div class="add-record">
                                <form action="send.php" method="post" class="col s12" style="margin: 3rem auto;">
                                <div class="row">
                                    <div class="input-field col s6">
                                    <input placeholder="" id="first_name" name="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="middle_name" name="middle_name" type="text" class="validate">
                                    <label for="middle_name">Middle Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="last_name" name="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                    </div>
                                    <div class="input-field col s3">
                                            <select id="gender" name="gender" type="text" class="validate">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            </select>
                                            <label for="gender">Gender</label>
                                    </div>
                                    <div class="input-field col s3">
                                    <input id="dob" name="dob" type="text" class="datepicker validate">
                                    <label for="dob">Date Of Birth</label>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="input-field col s4">
                                            <select id="relationship" name="relationship" type="text" class="validate">
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="1">Divorced</option>
                                            <option value="2">Others</option>
                                            </select>
                                            <label for="relationship">Relationship</label>
                                    </div>
                                    <div class="input-field col s4">
                                    <input id="phonenumber" name="phonenumber" type="text" class="validate">
                                    <label for="phonenumber">Phone Number</label>
                                    </div>
                                    <div class="input-field col s4">
                                    <input id="email" name="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s5">
                                    <input name="disabledaccount" disabled value="Account number is unavailable" id="disabledaccount" type="text" class="validate">
                                    <label for="disabledaccount">Account Number</label>
                                    </div>
                                    <div class="input-field col s2">
                                            <select name="account_type" id="account_type" type="text" class="validate">
                                            <option value="1">Current</option>
                                            <option value="2">Savings</option>
                                            </select>
                                            <label for="account_type">Account Type</label>
                                    </div>
                                    <div class="input-field col s5">
                                    <input disabled value="BVN is unavailable" name="disabledbvn" id="disabledbvn" type="text" class="validate">
                                    <label for="disabledbvn">Bank Verificaton Nunmber</label>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="input-field col s6">
                                    <input id="address" name="address" type="text" class="validate">
                                    <label for="address">Address</label>
                                    </div>
                                     <div class="input-field col s3">
                                    <input id="state" name="state" type="text" class="validate">
                                    <label for="state">State</label>
                                    </div>
                                     <div class="input-field col s3">
                                    <input id="country" name="country" type="text" class="validate">
                                    <label for="country">Country</label>
                                    </div>
                                    <div class="input-field col s6">
                                            <select id="accountstatus" name="accountstatus" type="text" class="validate">
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="1">Dormant</option>
                                            <option value="2">Frozen</option>
                                            </select>
                                            <label for="accountstatus">Account Status</label>
                                    </div>
                                    <div class="input-field col s6">
                                            <select id="kycstatus" name="kycstatus" type="text" class="validate">
                                            <option value="1">Verified</option>
                                            <option value="2">Non-Verified</option>
                                            <option value="1">Submitted</option>
                                            </select>
                                            <label for="kycstatus">KYC Status</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="verifieddate" name="verifieddate" type="text" class="datepicker validate">
                                    <label for="verifieddate">KYC Verified Date</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input id="approvalid" name="approvalid" type="text" class="validate">
                                    <label for="approvalid">Staff ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-controls">
                                        <button type="submit" id="add"  class="btn waves-effect waves-light green col s3 offset-s9"><i class="material-icons right">save</i>Add Record</button>
                                        <!-- <a href="" class="btn waves-effect waves-light green col s3 offset-s9" ><i class="material-icons right">save</i>Add Record</a> -->
                                        
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
                    </div>
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