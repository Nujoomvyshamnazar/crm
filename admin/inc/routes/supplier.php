<?php //admin routes
switch ($page) {

  // admin Dashboard
  case "supplier":
  include("././inc/supplier_top_menu.php");
  include("././inc/supplier_menu.php");
  include("././pages/suppliers/dashboard.php");
  break;

  case "profile":
  include("././inc/supplier_top_menu.php");
  include("././inc/supplier_menu.php");
  include("././pages/suppliers/profile.php");
  break;

  case "available-stock":
  include("././inc/supplier_top_menu.php");
  include("././inc/supplier_menu.php");
  include("././pages/suppliers/available-stock.php");
  break;

  case "supplier-offer":
  include("././inc/supplier_top_menu.php");
  include("././inc/supplier_menu.php");
  include("././pages/suppliers/supplier-offer.php");
  break;


  case "supplier-requests":
  include("././inc/supplier_top_menu.php");
  include("././inc/supplier_menu.php");
  include("././pages/suppliers/supplier-requests.php");
  break;
 // Not Found

 case "logout":

 include("././pages/admin/logout.php");
 break;

 
  default:
   header("Location: index.php");
}

?>
