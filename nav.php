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
</head>

<body>
    <!-- Navigation -->
    <div class="container-nav row ">

        <div class="container-90">
            <!-- Navigation Profile Header -->
            <div class="profile" style="margin: 3rem auto 2rem;">
                <div class="container-90">
                    <!-- Profile image -->
                    <div class="user">
                        <img src="imgs/money.jpg" alt="" class="avatar circle" style="width: 100px; height:100px;">
                    </div>
                    <!-- Details -->
                    <div class="profile-details">
                        <h5><a class='dropdown-trigger' href='#' data-target='settings'>Lola Smith</a> <i class="material-icons right tiny">arrow</i></h5>
                        <p>Lola@xyz.com</p>
                        <p>Bank Agent</p>

                        <!-- Dropdown Structure -->
                        <ul id='settings' class='dropdown-content'>  
                            <li><a href="#!" class="black-text"><i class="material-icons left">remove_red_eye</i>Profile</a></li>
                            <li><a href="#!" class="black-text"><i class="material-icons left">lock</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Navigation Content -->
            <div class="content z-depth-0">
                <ul class="collapsible z-depth-0">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">people</i>Customers</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">remove_red_eye</i>View</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">add</i> Add</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">euro_symbol</i>Loan</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">person</i>KYC</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                                <li><a href="#" class="btn-flat waves-effect waves-light col s12"><i class="material-icons left">home</i> test</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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