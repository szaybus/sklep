<?php
require_once 'class/shop.class.php';
$shop = new Shop();
$atributes = Array('id' => "1", 'name' => "Produkt testowy 1",
              'price' => "5", 'quantity' => "2");
$shop->product->setProductAtributes($atributes);
$productAtributes = $shop->product->getProductAtributes();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $productAtributes['name']; ?></title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<link rel="stylesheet" href="css/styles.css?v=1.0">
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>
<body>
  <article>
  <h1><?php echo $productAtributes['name']; ?></h1>
  Cena: <?php echo $productAtributes['price']; ?> zł <br>
  Dostępna ilość: <?php echo $productAtributes['quantity']; ?>
  </article>
<script src="js/scripts.js"></script>
</body>
</html>
