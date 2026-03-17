<?php
$status = $_GET['s'];
$phone = $_GET['phone'];

echo "<h2>Order Status Updated</h2>";
echo "Customer: ".$phone."<br>";
echo "Status: ".$status;
?>
