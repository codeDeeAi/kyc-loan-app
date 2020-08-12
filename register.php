<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bank XYZ</title>
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
			
                            $("#register").click(function(){
                                    
                                    fname = $("#firstname").val();
                                    lname = $("#lastname").val();
                                    email = $("#emailid").val();
                                    password = $("#passwordid").val();
                                    staffId = $("#staffid").val();

                                    $.ajax({
                                        type: "POST",
                                        url: "adduser.php",
                                        data: "fname="+fname+"&lname="+lname+"&email="+email+"&staffId="+staffId+"&password="+password,
                                        success: function(html){
                                        if(html=='true')
                                        {                                            
                                            M.toast({html: 'Account Created.'});
                                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                                <strong>Created Staff Login</strong>  \ \
                                                                </div>');

                                            window.location.href = "register.php";
                                        
                                        } else if (html=='false') {
                                            M.toast({html: 'Error creating staff login account.'});
                                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                                <strong>Error</strong> creating staff login account \ \
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
    

    <!-- Login page layout -->
   <div class="container container-login">
        <div class="row">
        <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-content">
            <span class="card-title center">XYZ Register Staff</span>
                    <!-- <div class="row">
                        <div class="error col s12 red-text grey" id="add_err2" style="height: 10px;"></div>
                    </div> -->
                <form role="form" >
                    <div class="row">
                        <div class="col s6">
                            <label >First Name</label>
                            <input type="text" id="firstname" name="fname" maxlength="25" class="form-group validate">
                        </div>
                        <div class="col s6">
                            <label >Last Name</label>
                            <input type="text" id="lastname" name="lname" maxlength="25" class="form-group validate">
                        </div>
                        <div class="col s6">
                            <label >Email</label>
                            <input type="email" id="emailid" name="email" maxlength="25" class="form-group validate">
                        </div>
                        <div class="col s6">
                            <label >Staff ID</label>
                            <input type="text" id="staffid" name="staffId" maxlength="25" class="form-group validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <label>Password</label>
                            <input type="password" id="passwordid" name="password" maxlength="25" class="form-group validate">
                        </div>
                    </div>
                    <div class="row form-controls">
                        <div class="col s4 offset-s4">
                           <button type="submit"  class="btn waves-effect waves-light col s12" id="register">Register</button>
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