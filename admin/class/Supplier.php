<?php

class Supplier
{
    private $db_handle;

    function __construct() {
        $this->db_handle = new ADagency();
    }



    function acceptRequest($id) {
        $query = "UPDATE  tbrl_stock SET 	admin_verified ='1' WHERE id = ?";
        $paramType = "i";
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
        $query = "UPDATE  tbrl_stock SET 	admin_verified ='0' WHERE id = ?";
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


    function acceptOffer($id) {
        $query = "UPDATE  tbrl_stock SET 	admin_verified ='1' WHERE id = ?";
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

    function rejectOffer($id) {
        $query = "UPDATE  tbrl_stock SET 	admin_verified ='0' WHERE id = ?";
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


  }
  ?>
