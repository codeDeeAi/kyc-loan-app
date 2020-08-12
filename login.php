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
    <!-- JQuery -->
    <script type="text/javascript" src="jQuery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        		$(document).ready(function(){
			
                            $("#login").click(function(){
                                
                                    email=$("#username").val();
                                    password=$("#password").val();
                                    $.ajax({
                                        type: "POST",
                                        url: "check.php",
                                        data: "email="+email+"&password="+password,
                                        success: function(html){
                                        if(html=='true')
                                        {                                            
                                            M.toast({html: 'Authenticated.'});
                                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                                <strong>Authenticated</strong>  \ \
                                                                </div>');

                                            window.location.href = "index.php";
                                        
                                        } else if (html=='false') {
                                            M.toast({html: 'Authentication failure.'});
                                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                                <strong>Authentication</strong> failure. \ \
                                                            </div>');
                                                
                                        
                                        } else {
                                                M.toast({html: 'Error processing request. Please try again.'});
                                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                                    <strong>Error</strong> processing request. Please try again. \ \
                                                                </div>');
                                        }
                                        },
                                        beforeSend:function()
                                        {
                                            $("#add_err2").html("loading...");
                                        }
                                    });
                                    return false;
                                });
                });
    </script>
</head>

<body>
    

    <!-- Login page layout -->
   <div class="container container-login">
        <div class="row">
        <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-content">
            <span class="card-title center">XYZ Login</span>
                    <!-- <div class="row">
                        <div class="error col s12 red-text grey" id="add_err2" style="height: 10px;"></div>
                    </div> -->
                <form >
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <label >Username</label>
                            <input type="email" id="username" name="username" maxlength="50" class="form-group validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <label >Password</label>
                            <input type="password" id="password" name="password" maxlength="25" class="form-group validate">
                        </div>
                    </div>
                    <div class="row form-controls">
                        <div class="col s4 offset-s4">
                           <button class="btn waves-effect waves-light col s12" id="login">Sign-In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>   
   </div> 
    <!-- Login page layout ends -->
    
    <!-- font-awesome -->
    <script type="text/javascript" src="font-awesome/all.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>