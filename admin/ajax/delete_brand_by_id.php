<?php

require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$brand_id= $_POST['brand_id'];
$deletebrand= new Inventory();
$result=$deletebrand->deleteBrand($brand_id);

if($result)
{
  echo 1;
}
else {
  echo 0;
}
?>
