
<?php include("inc/header.php");
require_once ("class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "class/". $class . ".php";
});


?>

<?php
/*
  $msg = '';

      if (!empty($_POST['username'])
         && !empty($_POST['password'])) {

         if ($_POST['username'] == 'nujoom' &&
            $_POST['password'] == '12345678') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'nujoom';
            $_SESSION['user_type'] = '1';
            $_SESSION['userid'] = '1';
            //$msg='You have entered valid use name and password';
               header("Location: home.php?page=admin");
         }else if ($_POST['username'] == 'anees' &&
                   $_POST['password'] == '12345678') {
                     $_SESSION['valid'] = true;
                     $_SESSION['timeout'] = time();
                     $_SESSION['username'] = 'nujoom';
                     $_SESSION['user_type'] = '2';
                     $_SESSION['userid'] = '2';

         header("Location: home.php?page=supplier");
         }
         else{
                  header("Location: index.php");
         }
      }
 echo $msg;
*/

    if (!empty($_POST['username'])
       && !empty($_POST['password'])) {
  session_start();
   $username =$_POST['username'];
   $password = $_POST['password'];

    $admin = new Adminuser();
  $result   =$admin->processLogin($username,$password);
  foreach ($result as $k => $v) {
   return  $result[$k]["email"];
  }

}
   ?>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">ASTEL<b>GROUP</b></a>
            <small>Retailer Bid Management</small>
        </div>
        <div class="card">
            <div class="body">
                <form  class="login-form" id="loginform" action="" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit"  id="submt" onclick="processlogin()">SIGN IN</button>

                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                              <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="col-xs-6 align-right">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script>

function processlogin()
{
  $('#username').html('');
  $('#password').html('');


      var username=$("#username").val();
      var password=$("#password").val();


             if($("#username").val()==""){

                    $("#uname").html("Please enter username.");
                    $("#uname").css("color", "red");
                    $("#user_name").css("border", "1px solid grey");
                    $("#user_name").focus();
                  }

             else if($("#password").val()==""){
                   $("#upass").html("Please enter password.");
                    $("#upass").css("color", "red");
                    $("#password").css("border", "1px solid grey");
                   $("#password").focus();
             }
           else
           {
             $.ajax({
              type:"POST",
              url:"ajax/ajaxlogin.php",
              data:{"username":username,"password":password},
              success:function(result){
                //alert(result);
//alert(result);
            }

      });
           }

}






</script>
-->
<?php include("inc/footer.php");?>
