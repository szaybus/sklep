<?php
require_once 'class/shop.class.php';
$shop = new Shop();
$atributes = Array('id' => "1", 'name' => "Produkt testowy 1",
              'price' => "5", 'quantity' => "2");
$shop->product->setProductAtributes($atributes);
print_r($shop->getEmployeesList());

/*
echo '<pre>';
print_r($shop);
print_r($shop->product->getProductAtributes());
echo '</pre>';
*/
?>
