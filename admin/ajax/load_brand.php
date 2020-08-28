<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$adminlist = new Inventory();
$check = new Usefullclass();
$result = $adminlist->getAllBrands();
?>

      <?php
      if (! empty($result)) {
          foreach ($result as $k => $v) {
              ?>
              <tr>
                  <td><?=$result[$k]["name"]; ?></td>

                  <td><?=$check->checkStatus($result[$k]["status"]); ?></td>

                  <td>
                    <div class="btn-group">
              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Take Action <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                  <li><a href="javascript:void(0);" class=" waves-effect waves-block">
                   <div class="js-modal-buttons">
                     <button class="btn bg-orange waves-effect  waves-float" data-color="orange" onclick="editBrand(<?=$result[$k]["id"]; ?>)"  data-toggle="modal" data-target="#defaultModalupdate">
                    Edit
                  </button>
                  </div>
                </a></li>
                  <li>
<a href="javascript:void(0);" class=" waves-effect waves-block">
<div class="js-sweetalert">
<button class="btn bg-red waves-effect  waves-float" data-type="confirm" onclick="deleteBrand(<?=$result[$k]["id"]; ?>)">Delete</button>
</div>   </a>                         </li>


              </ul>
          </div>

                  </td>
              </tr>
<? }} ?>
