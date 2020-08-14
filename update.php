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
    <?php
   

    //Open a new connection to the MySQL server
    $mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

    //Output any connection error
    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    $id =$_GET["id"];

    // query db
    $sql = "SELECT * FROM customeraccounts WHERE id = '$id'";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error());

    // validation and function
    if($result->num_rows >0){
        // output data for each row
        while($row = $result->fetch_assoc()){
            $loan = $row["loanStatus"];
            $staffid = $row["approvalOfficerId"];
        }
    } else{
        echo 'no result';
    }
    ?>

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
                            

                            <li class="collection-item avatar z-depth-1">
                            <!-- <i class="material-icons circle">person</i> -->
                            <ul class="collapsible z-depth-0" style="border: none;">
                                <li>
                                <div class="collapsible-header" style="border: none;">
                                    <div class="row">
                                        <div class="btn-flat btn-large">Click Here</div>
                                    </div>
                                </div>
                                <div class="collapsible-body" style="border: none;">
                                        <p><a  class="btn-flat waves-effect waves-light secondary-content modal-trigger"><i class="material-icons">edit</i></a></p>
                                        <div class="row">
                                            <div class="add-record">
                                            <form action="updaterecord.php" method="post" class="col s12" style="margin: 3rem auto;">                                                                                           
                                               
                                                <div class="input-field col s4">
                                                        <select name="loan2" id="loan2">
                                                        <option value="1">Not Active</option>
                                                        <option value="2">Active</option>
                                                        <option value="3">Declined</option>
                                                        <option value="4">Disbursed</option>
                                                        <option value="5">Partially Disbursed</option>
                                                        </select>
                                                        <label>Loan Status</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $staffid; ?>" id="approvalid"  type="text" class="validate">
                                                <label>Previous Staff ID</label>
                                                </div>
                                                <div class="input-field col s4">
                                                <input disabled value="<?php echo $email; ?>" id="newapprovalid"  type="text" class="validate">
                                                <label>Current Staff ID</label>
                                                </div>
                                                <input type="hidden" name="id" id="recid" value="<?php echo $id; ?>">
                                                <input type="hidden" name="id2" id="recid" value="<?php echo $email; ?>">
                                            </div>
                                            <div class="row">
                                                <div class="form-controls">
                                                    <button type="submit"  class="btn waves-effect waves-light green col s3 offset-s9"><i class="material-icons right">save</i>Append Record</button>                                      
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                </div>
                                </li>
                            </ul> 
                            </li>                                                                    
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