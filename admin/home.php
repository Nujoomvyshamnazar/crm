<?php include("inc/header.php");
error_reporting(0);
require_once ("class/ADagency.php");?>

<?php

spl_autoload_register(function ($class) {
    include_once "class/". $class . ".php";
});




    ?>
<?php
$page = $_GET['page'];
$user_type = $_SESSION["user_type"];


if($user_type=='1')
{
  if(isset($page))
  {

   include("inc/routes/admin.php");

  }


}
// supplier routes
elseif ($user_type=='2') {

  if($page)
  {
   include("inc/routes/supplier.php");
  }

}

else {
     header("Location: index.php");
}


?>

<?php include("inc/footer.php");?>
