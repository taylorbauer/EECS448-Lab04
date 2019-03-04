<html>
<head>
<link href="myStyle.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<title>Kanye West Unoffical Store</title>
</head>
<body>
<h3>Welcome to the</h3>
<h1>(VERY) Unofficial Kanye West Merch Store</h1>
<br>
<h2>Here is your receipt:</h2>
<table>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $polos = $_POST["polos"];
  $flipFlops = $_POST["flipFlops"];
  $joggers = $_POST["joggers"];
  $shipping = $_POST["shipping"];
  $password = $_POST["password"];
  $shippingString = "";
}

if ($shipping == 0){
  $shippingString = "Free 7-day shipping";
}
else if ($shipping == 5){
  $shippingString = "3-day shipping";
}
else if ($shipping == 50){
  $shippingString = "Overnight shipping";
}


echo "<tr><td></td><td><b>Quantity</b></td><td><b>Cost Per Item</td><td><b>Sub Total</td><tr>";
echo "<tr><td><b>Pink Polos</td><td class=\"data\">" . $polos . "</td><td class=\"data\">$80.00</td><td class=\"data\">$" . ($polos * 80) . "</td></tr>";
echo "<tr><td><b>Yeezy Athleisure Flip Flops</td><td class=\"data\">" . $flipFlops . "</td><td class=\"data\">$120.00</td><td class=\"data\">$" . ($flipFlops * 120) . "</td></tr>";
echo "<tr><td><b>Leather Jogging Pants</td><td class=\"data\">" . $joggers . "</td><td class=\"data\">$350.00</td><td class=\"data\">$" . ($joggers * 350) . "</td></tr>";
echo "<tr><td><b>Shipping</td><td class=\"data\">" . $shippingString . "</td><td></td><td class=\"data\">$" . $shipping . "</td></tr>";
echo "<tr><td><b>Grand Total: </td><td></td><td></td><td class=\"data\"><b>$" . (($polos * 80) + ($flipFlops * 120) + ($joggers * 350) + $shipping) . "</td></tr></table>";
echo "<br><br><p>Thank you so much for your purchase.  For some reason, I will show you your password now.  It is: <div class=\"data\">" . $password . "</div><br>See you soon!</p>"

 ?>
</body>
