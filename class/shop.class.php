<?php
require_once 'product.class.php';
require_once 'customer.class.php';
require_once 'employee.class.php';
require_once 'db.php';
class Shop {
  public $product;
  public $customer;
  public $employee;
  private $db;
  function __construct() {
    $this->product = new Product();
    $this->customer = new Customer();
    $this->employee = new Employee();
    global $db;
    $this->db = $db;
  }
  function getEmployeesList() {
    $result = $this->db->query("SELECT * FROM employee");
    $userList = Array();
    while ($row = $result->fetch_assoc()) {
      array_push($userList, $row);
    }
    return $userList;
  }
}
?>
