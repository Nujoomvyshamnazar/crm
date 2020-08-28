<?php
//require_once ("class/ADagency.php");
class Usefullclass
{
    private $db_handle;

    function __construct() {
        $this->db_handle = new ADagency();
    }

    function getAllCountrys() {
      $sql = "SELECT * FROM  tbrl_country ORDER BY id";
      $result = $this->db_handle->runBaseQuery($sql);
      return $result;
  }

  function connect() {
      echo "connected";
  }

    function checkActive($id) {
        if($id==0)
        {
          echo "<i class='material-icons' style='color:red'>close</i>"; // disabled
        }
        else {
          echo "<i class='material-icons' style='color:green'>done</i>"; // enable
        }
    }

    function checkVarified($id) {
        if($id==0)
        {
          echo "<i class='material-icons' style='color:grey'>beenhere</i>"; // disabled
        }
        else {
          echo "<i class='material-icons' style='color:yellow'>beenhere</i>"; // enable
        }
    }
    function checkStatus($id) {
        if($id==0)
        {
          echo "<i class='material-icons' style='color:grey'>beenhere</i>"; // disabled
        }
        else {
          echo "<i class='material-icons' style='color:green'>beenhere</i>"; // enable
        }
    }

    function checkRequest($id) {
        if($id==0)
        {
        echo "<i class='material-icons' style='color:grey'>beenhere</i>";
        }
        else  if($id==1) {
          echo "<i class='material-icons' style='color:yellow'>beenhere</i>"; // enable
        }
        else if($id=2)
        {
          echo "Rejected";
        }
    }

}
