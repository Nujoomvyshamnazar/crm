<?php

class Inventory
{
    private $db_handle;

    function __construct() {
        $this->db_handle = new ADagency();
    }



    function updateBrand($id,$name,$status) {
        $query = "UPDATE  tbrl_brands SET name ='$name',status='$status' WHERE id =$id";
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

    function deleteBrand($brand_id) {
        $query = "DELETE FROM tbrl_brands WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $brand_id
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

    function addBrand($brand_name,$status) {
        $query = "INSERT INTO tbrl_brands (name,status) VALUES (?, ?)";
        $paramType = "ss";
        $paramValue = array(
            $brand_name,
            $status
              );
              $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
              return $insertId;

        }

        function editBrandById($id) {
            $query = "SELECT * FROM tbrl_brands WHERE id = ?";
            $paramType = "i";
            $paramValue = array(
                $id
            );

            $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
            return $result;
        }

function getSupplierOffers()
{
  $sql = "SELECT  tbrl_country.name as country,tbrl_country.iso as iso,tbrl_stock.id as id,tbrl_products.part_number as part_number,tbrl_products.image as image,tbrl_stock.id,tbrl_users.name as username,tbrl_products.name as product_name,tbrl_stock.stock as stock,tbrl_stock.status as status,tbrl_stock.budget as budget,tbrl_stock.admin_verified as admin_verified,tbrl_stock.created_date as created_date,tbrl_stock.stock_type as stock_type FROM  tbrl_stock
LEFT JOIN tbrl_users  ON tbrl_users.id=tbrl_stock.supplier_id
LEFT JOIN 	tbrl_products  ON tbrl_products.id=tbrl_stock.product_id
LEFT JOIN  tbrl_country ON  tbrl_country.id=tbrl_stock.country
WHERE stock_type='1' AND tbrl_users.role_id=2 ORDER BY tbrl_stock.id";
  $result = $this->db_handle->runBaseQuery($sql);
  return $result;
}



function getSupplierRequests()
{
  $sql = "SELECT tbrl_country.name as country,tbrl_country.iso as iso,tbrl_stock.id as id,tbrl_products.image as image,tbrl_users.name as username,tbrl_products.name as product_name,tbrl_stock.stock as stock,tbrl_stock.status as status,tbrl_stock.budget as budget,tbrl_stock.admin_verified as admin_verified,tbrl_stock.created_date as created_date,tbrl_stock.stock_type as stock_type FROM  tbrl_stock
LEFT JOIN tbrl_users  ON tbrl_users.id=tbrl_stock.supplier_id
LEFT JOIN 	tbrl_products  ON tbrl_products.id=tbrl_stock.product_id
LEFT JOIN  tbrl_country ON  tbrl_country.id=tbrl_stock.country
WHERE stock_type='2' AND tbrl_users.role_id=2 ORDER BY tbrl_stock.id";
  $result = $this->db_handle->runBaseQuery($sql);
  return $result;
}


function getProNameById($id) {
    $query = "SELECT * FROM tbrl_products WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["name"];
    }
}



function getModelNameById($id) {
    $query = "SELECT * FROM tbrl_brand_model WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["name"];
    }
}

function getSeriesNameById($id) {
    $query = "SELECT * FROM tbrl_brand_series WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["series_name"];
    }
}




function getBrandNameById($id) {
    $query = "SELECT * FROM tbrl_brands WHERE id = ?";
    $paramType = "i";
    $paramValue = array(
        $id
    );

    $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
    foreach ($result as $k => $v) {
      return  $result[$k]["name"];
    }
}

function getAllProducts() {
    $sql = "SELECT * FROM   tbrl_products ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}



//
function getAllModels() {
    $sql = "SELECT * FROM  tbrl_brand_model ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}

// List Series

function getAllSeries() {
    $sql = "SELECT * FROM  tbrl_brand_series ORDER BY id";
    $result = $this->db_handle->runBaseQuery($sql);
    return $result;
}

// List brands
      function getAllBrands() {
        $sql = "SELECT * FROM  tbrl_brands ORDER BY id";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>
