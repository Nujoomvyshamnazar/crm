<?php

class Adminuser
{
    private $db_handle;

    function __construct() {
        $this->db_handle = new ADagency();
    }







// Role crud
/*--------------------------Role-----------------------------------------------*/
//edit

// addrole
function updateSupplierProfile($name, $email, $phone, $id) {
    $query = "UPDATE tbrl_users SET name = '$name',email = '$email',phone = $phone WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $name,
      $email,
      $phone,

      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addCompanyDetails($cdname,$cdaddress,$postalcode,$cdcity,$cdcountry, $phone,$vatnumber, $email,$creg ,$cdwebsite, $id) {
    $query = "UPDATE tbrl_users SET cd_company_name = '$cdname',cd_address = '$cdaddress',cd_postal_code = '$postalcode',cd_city = '$cdcity',cd_country = '$cdcountry',cd_phone_number = '$phone',cd_vat_number = '$vatnumber',cd_email_address = '$email',cd_commercial_reg = '$creg',cd_website = '$cdwebsite' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $cdname,
      $cdaddress,
      $postalcode,
      $cdcity,
      $cdcountry,
      $phone,
      $vatnumber,
      $email,
      $creg,
      $cdwebsite,
      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addDeliveryAddress($daname,$daaddress,$dapostalcode,$dacity,$dacountry,$id) {
    $query = "UPDATE tbrl_users SET da_name = '$daname',da_address = '$daaddress',da_postal = '$dapostalcode',da_city = '$dacity',da_country = '$dacountry' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $daname,
      $daaddress,
      $dapostalcode,
      $dacity,
      $dacountry,
      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addDirectors($gender,$fname,$lname,$address,$postalcode,$city,$country,$phone,$passport,$email,$id) {
    $query = "UPDATE tbrl_users SET d_gender = '$gender',d_first_name = '$fname',d_last_name = '$lname',d_address = '$address',d_postal = '$postalcode'
    ,d_city = '$city',d_country = '$country',d_mobile = '$phone',d_passport = '$passport',d_email = '$email' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $gender,
      $fname,
      $lname,
      $address,
      $postalcode,
      $city,
      $country,
      $phone,
      $passport,
      $email,
      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addSalesContact($gender,$fname,$lname,$phone,$mobile,$email,$skype,$id) {
    $query = "UPDATE tbrl_users SET sc_gender = '$gender',sc_first_name = '$fname',sc_last_name = '$lname',sc_phone_number = '$phone',sc_mobile_number = '$mobile'
    ,sc_email = '$email',sc_skype = '$skype' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $gender,
      $fname,
      $lname,
      $phone,
      $mobile,
      $email,
      $skype,

      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addPurchaseContact($gender,$fname,$lname,$phone,$mobile,$email,$skype,$id) {
    $query = "UPDATE tbrl_users SET pc_gender = '$gender',pc_first_name = '$fname',pc_last_name = '$lname',pc_phone = '$phone',pc_mobile = '$mobile'
    ,pc_email = '$email',pc_skype = '$skype' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $gender,
      $fname,
      $lname,
      $phone,
      $mobile,
      $email,
      $skype,

      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function addAccountingDept($gender,$fname,$lname,$phone,$mobile,$email,$skype,$id) {
    $query = "UPDATE tbrl_users SET ad_gender = '$gender',ad_first_name = '$fname',ad_last_name = '$lname',ad_phone = '$phone',ad_mobile = '$mobile'
    ,ad_email = '$email',ad_skype = '$skype' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $gender,
      $fname,
      $lname,
      $phone,
      $mobile,
      $email,
      $skype,

      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}
function updatePassword($cpwd,$id) {
    $query = "UPDATE tbrl_users SET password = '$cpwd' WHERE role_id = $id";
    $paramType = "sissi";
    $paramValue = array(
      $cpwd,
      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}



function updateRole($id,$name,$status) {
    $query = "UPDATE  tbrl_role SET role_name ='$name',status='$status' WHERE id =$id";
    $paramType = "iss";
    $paramValue = array(
$name,
      $id,
      $status

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


function deleteRole($role_id) {
    $query = "DELETE FROM tbrl_role WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $role_id
    );
    $success = $this->db_handle->update($query, $paramType, $paramValue);
    if($success)
    {
      return true;
    }
    else {
      return false;
    }
}



function editRoleById($id) {
    $query = "SELECT * FROM tbrl_role WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    return $result;
}



function addRole($roll_name,$status) {
    $query = "INSERT INTO tbrl_role (role_name,status) VALUES (?, ?)";
    $paramType = "ss";
    $paramValue = array(
        $roll_name,
        $status
          );
          $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
          return $insertId;

    }

// deleterole

/*-------------------------------role------------------------------------------*/
    function addUsers($name, $email, $phone, $status) {
        $query = "INSERT INTO tbrl_users (name,roll_number,dob,class) VALUES (?, ?, ?, ?)";
        $paramType = "siss";
        $paramValue = array(
            $name,
            $email,
            $phone,
            $status
        );

        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }

// Edit USERS

function editUsers($name, $email, $phone, $status,$id) {
    $query = "UPDATE tbrl_users SET name = ?,email = ?,phone = ?,status = ? WHERE id = ?";
    $paramType = "sissi";
    $paramValue = array(
      $name,
      $email,
      $phone,
      $status,
      $id

    );

    $this->db_handle->update($query, $paramType, $paramValue);
}


// Delete USERS

function deleteUser($user_id) {
    $query = "DELETE FROM tbrl_users WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $user_id
    );
    $this->db_handle->update($query, $paramType, $paramValue);
}

// list roles
  function getRoles() {
    $sql = "SELECT * FROM  tbrl_role  ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
  }


// Admin login
function processLogin($username, $password) {
    $passwordHash = $password;
    $query = "select * FROM  tbrl_users WHERE name = ? AND password = ?";
    $paramType = "ss";
    $paramValue = array($username, $passwordHash);
  //  $memberResult = $this->ds->select($query, $paramType, $paramArray);
      $result=$this->db_handle->runQuery($query, $paramType, $paramValue);
         return $result;
  /*  if(!empty($memberResult)) {
        $_SESSION["userid"] = $memberResult[0]["id"];
        $_SESSION["user_type"] = $memberResult[0]["roll_id"];


    return $_SESSION["userid"];
    }
    else {
      return 0;
    }*/
//    return $memberResult;
}

// list All Roles
function getUserNameById($id) {
    $query = "SELECT * FROM tbrl_users WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["name"];
    }
}


function getEmailById($id) {
    $query = "SELECT * FROM tbrl_users WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["email"];
    }
}
function getAllroles() {
    $sql = "SELECT * FROM  tbrl_role  ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}


// List All suppliers
function getAllSupplierUsers() {
    $sql = "SELECT * FROM  tbrl_users where role_id=2 ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}

function getSupplierUsers($role_id) {
    $sql = "SELECT * FROM  tbrl_users where role_id = $role_id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}

// List Users
    function getAllAdminUsers() {
        $sql = "SELECT * FROM  tbrl_users where role_id=1 ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }


}
?>
