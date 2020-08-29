<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});


$model=$_POST['modelval'];
$inventory = new Inventory();
$result=$inventory->loadmodelbysearch($model);
?>
    <ul class="list-unstyled">
      <?
if (! empty($result)) {

foreach ($result as $k => $v) {
    ?>
<li onclick="placemodel(<?=$result[$k]["id"]; ?>,'<?=$result[$k]["name"]; ?>')"><?=$result[$k]["name"]; ?></li>
<? } }
 ?>
</ul>
<script>



</script>
