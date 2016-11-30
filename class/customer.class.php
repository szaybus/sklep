<?php
require_once 'person.class.php';
class Customer extends Person {
  function login($_login, $_password) {
    $this->login = $_login;
    $this->password = $_password;
    echo 'Wykonano funkcję login dla klasy customer';
  }
  function buyProduct($_id) {
    echo 'Kupiono produkt o ID: '.$_id;
  }
}
?>
