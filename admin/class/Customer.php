<?php
//require_once ("class/ADagency.php");
class Customer
{
    private $db_handle;

    function __construct() {
        $this->db_handle = new ADagency();
    }


    function acceptRequest($id) {
        $query = "UPDATE  tbrl_customer_enquirys SET status ='1' WHERE id = ?";
        $paramType = "s";
        $paramValue = array(

          $id

        );

      $success=$this->db_handle->update($query, $paramType, $paramValue);
      if($success)
      {
        return true;
      }
      else {
        return false;
      }
    }

    function rejectRequest($id) {
        $query = "UPDATE  tbrl_customer_enquirys SET status ='0' WHERE id = ?";
        $paramType = "s";
        $paramValue = array(

          $id

        );

      $success=$this->db_handle->update($query, $paramType, $paramValue);
      if($success)
      {
        return true;
      }
      else {
        return false;
      }
    }


      function getAllCustomerDetails() {
        $sql = "SELECT * FROM  tbrl_customer_enquirys ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>
