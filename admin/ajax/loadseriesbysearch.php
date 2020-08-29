<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});


$series=$_POST['seriesval'];
$inventory = new Inventory();
$result=$inventory->loadseriesbysearch($series);
?>
    <ul class="list-unstyled">
      <?
if (! empty($result)) {

foreach ($result as $k => $v) {
    ?>
<li onclick="placeseries(<?=$result[$k]["id"]; ?>,'<?=$result[$k]["name"]; ?>')"><?=$result[$k]["name"]; ?></li>
<? } }
 ?>
</ul>
<script>



</script>
