<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});


$product=$_POST['productval'];
$inventory = new Inventory();
$result=$inventory->loadproductbysearch($product);
?>
    <ul class="list-unstyled">
      <?
if (! empty($result)) {

foreach ($result as $k => $v) {
    ?>
<li onclick="placeProduct(<?=$result[$k]["id"]; ?>,'<?=$result[$k]["name"]; ?>')"><?=$result[$k]["name"]; ?></li>
<? } }
 ?>
</ul>
