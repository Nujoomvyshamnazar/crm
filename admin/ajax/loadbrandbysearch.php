<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});


$brand=$_POST['brandval'];
$inventory = new Inventory();
$result=$inventory->loadbrandbysearch($brand);
?>
    <ul class="list-unstyled">
      <?
if (! empty($result)) {

foreach ($result as $k => $v) {
    ?>
<li onclick="placebrand(<?=$result[$k]["id"]; ?>,'<?=$result[$k]["name"]; ?>')"><?=$result[$k]["name"]; ?></li>
<? } }
 ?>
</ul>
<script>



</script>
