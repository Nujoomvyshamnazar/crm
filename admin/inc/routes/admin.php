<?php //admin routes
switch ($page) {

  // admin Dashboard
  case "admin":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/dashboard.php");
  break;

  case "dashboard":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/dashboard.php");
  break;

 // Brand Page
  case "brands":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/brands.php");
  include("././inc/models/admin/brands.php");
  break;



 // Model Page
  case "models":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/models.php");
  include("././inc/models/admin/models.php");
    break;



  // Series
  case "series":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././inc/models/admin/series.php");
      break;



 // Products
  case "products":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././inc/models/admin/products.php");
      break;


 // admin-Users
  case "users":

  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/admin-users.php");
  include("././inc/models/admin/adminusers.php");
  break;

  case "suppliers":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/supplier-users.php");

  break;


 // current stock
      case "available-stock":
      include("././inc/admin_top_menu.php");
      include("././inc/admin_menu.php");
      include("././pages/admin/current_stock.php");
      break;


  // profile
  case "profile":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/profile.php");
  break;


  //roles
  case "roles":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/roles.php");
  include("././inc/models/admin/role.php");
  break;


  // supplier offers
  case "supplier-offers":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/supplier-offers.php");
  break;


  //supplier requests
  case "supplier-requests":
  include("././inc/admin_top_menu.php");
  include("././inc/admin_menu.php");
  include("././pages/admin/supplier-requests.php");
  break;

// customer enquiry
//supplier requests
case "customer-enquiry":
include("././inc/admin_top_menu.php");
include("././inc/admin_menu.php");
include("././pages/admin/customer-enquiry.php");
break;

case "logout":

include("././pages/admin/logout.php");
break;
 // Not Found
  default:
   header("Location: index.php");
}

?>
