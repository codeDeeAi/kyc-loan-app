<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bank XYZ</title>
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
    

    <!-- Login page layout -->
   <div class="container container-login">
        <div class="row">
        <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-content">
            <span class="card-title center">XYZ Login</span>
                <form action="" method="post">
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <label for="username" id="username">Username</label>
                            <input type="text" name="username" maxlength="25" class="form-group validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <label for="username" id="password">Password</label>
                            <input type="password" name="password" maxlength="25" class="form-group validate">
                        </div>
                    </div>
                    <div class="row form-controls">
                        <div class="col s4 offset-s4">
                           <button class="btn waves-effect waves-light col s12">Sign-In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>   
   </div> 
    <!-- Login page layout ends -->

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