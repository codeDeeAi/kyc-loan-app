<?php

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $role = $_SESSION['role'];
    $email = $_SESSION['email'];
    $r1 = 'Bank Agent';
    $r2 = 'Customer Care';
    $r3 = 'Loan Officer';
    $r4 = 'KYC Officer';

    if($role = $r1){
        // echo 'hide1';
    }elseif($role = $r2){
        // echo 'hide2';
    }elseif($role = $r3){
        // echo 'hide3';
    }else{
        // echo 'hide4';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank XYZ</title>
    <link rel="icon" href="">
    <!-- Font-awesome -->
    <link href="font-awesome/all.css" rel="stylesheet">
    <!-- Material fonts offline -->
    <link href="iconfont/material-icons.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JQuery -->
    <script type="text/javascript" src="jQuery/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- Navigation -->
    <div class="container-nav row ">

        <div class="container-90">
            <nav class="transparent z-depth-0 hide">
                <div class="nav-wrapper">
                <a href="#" class="brand-logo black-text">XYZ</a>
                </div>
            </nav>
            <!-- Navigation Profile Header -->
            <div class="profile" style="margin: 3rem auto 2rem;">
                <div class="container-90">
                    <!-- Profile image -->
                    <div class="user">
                        <img src="imgs/money.jpg" alt="" class="avatar circle" style="width: 100px; height:100px;">
                    </div>
                    <!-- Details -->
                    <div class="profile-details">
                        <h5><a class='dropdown-trigger' href='#' data-target='settings'><?php echo $fname; echo " "; echo $lname; ?></a> <i class="material-icons right tiny">arrow</i></h5>
                        <p><?php echo $email; ?></p>
                        <p><?php echo $role; ?></p>

                        <!-- Dropdown Structure -->
                        <ul id='settings' class='dropdown-content'>  
                            <li><a href="#!" class="black-text"><i class="material-icons left">remove_red_eye</i>Profile</a></li>
                            <li><a href="logout.php" class="black-text"><i class="material-icons left">lock</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Navigation Content -->
            <div class="content z-depth-0">
                <ul class="collapsible z-depth-0">
                    <li>
                        <a href="index.php" class="collapsible-header waves-light waves-effect black-text"><i class="material-icons">home</i>Home</a>
                    </li>
                    <li>
                        <div class="collapsible-header div1"><i class="material-icons">people</i>Customers</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="viewaccounts.php" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">remove_red_eye</i>View</a></li>
                                <li><a href="addaccount.php" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">add</i> Add</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header div2"><i class="material-icons">euro_symbol</i>Loan</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="viewloan.php" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">remove_red_eye</i>View</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header div3"><i class="material-icons">person</i>KYC</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="viewkyc.php" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">remove_red_eye</i>View</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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