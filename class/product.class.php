<?php
class Product {
  protected $id;
  protected $name;
  protected $price;
  protected $quantity;
  protected $db;
  function __construct() {
    global $db;
    $this->db = $db;
  }
  function getProductAtributes() {
    return Array('id' => $this->id, 'name' => $this->name,
                  'price' => $this->price, 'quantity' => $this->quantity);
  }
  function setProductAtributes($_atributes) {
    $this->id = $_atributes['id'];
    $this->name = $_atributes['name'];
    $this->price = $_atributes['price'];
    $this->quantity = $_atributes['quantity'];
  }
  function readFromDB() {
    echo "wczytuje z bazy danych";
    $result = $this->db->query("SELECT * FROM product
                      WHERE id = $this->id");
    $row = $result->fetch_assoc();
    $this->name = $row['name'];
    $this->price = $row['price'];
    $this->quantity = $row['quantity'];
  }
  function saveToDB() {
    echo "zapisuje produkt do bazy danych....";
    $this->db->query("UPDATE product SET
                      name = '$this->name',
                      price = $this->price,
                      quantity = $this->quantity
                      WHERE id = $this->id");
  }

}

?>
