$message = "
<h2>New Order Received</h2>

<p><b>Type:</b> $type</p>
<p><b>Name:</b> $name</p>
<p><b>Phone:</b> $phone</p>
<p><b>Date:</b> $date</p>
<p><b>Time:</b> $time</p>
<p><b>Order:</b> $order</p>

<h3>Action:</h3>

<a href='https://yourdomain.com/status.php?s=accepted&phone=$phone' 
style='padding:10px 20px;background:green;color:white;text-decoration:none'>ACCEPT</a>

<a href='https://yourdomain.com/status.php?s=rejected&phone=$phone'
style='padding:10px 20px;background:red;color:white;text-decoration:none'>REJECT</a>

<a href='https://yourdomain.com/status.php?s=preparing&phone=$phone'
style='padding:10px 20px;background:orange;color:white;text-decoration:none'>PREPARING</a>

<p>Ask customer to call: 049-270-2984</p>
<p>Delivery? Ask location WhatsApp: 070-9006-6661</p>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: website@indoishii.com";
