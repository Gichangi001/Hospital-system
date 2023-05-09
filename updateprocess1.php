<body>
<h2> Customer order details</h2>
<?php
require_once('conn.php');
//receive data from form and assign to variables
$id=$_POST['id'];
$first_name=$_POST['name'];
$gender=$_POST['gender'];
$department = isset($_POST['department']) ? $_POST['department'] : "";
$cust_name = isset($_POST['cust_name']) ? $_POST['cust_name'] : "";
$date=$_POST['date'];
$time=$_POST['time'];
$payment=$_POST['payment'];
$file=$_POST['file'];
$deliv_fee=$_POST['deliv_fee'];
$item_price=$_POST['item_price'];
$comments=$_POST['comments'];


//calculate total order cost

$sum = ($item_price)+($deliv_fee);

//print  the details
echo "Name: ".$name."<br>";
if (isset($_POST['gender'])) {
  $gender = $_POST['gender'];
  echo "Gender: ".$gender."<br><br>";
} else {
  echo "No gender selected";
};
if (isset($_POST['department'])) {
  $department = $_POST['department'];
  echo "Department: ".$department."<br><br>";
} else {
  echo "No department selected";
};
echo "<br><br>";
echo "Store Name: ".$cust_name."<br>";
echo "Delivery Date: ".$date."<br>";
echo "Delivery Time: ".$time."<br><br>";
echo "Payment Mode: ".$payment."<br>";
echo "Delivery Fee: ".$deliv_fee."<br>";
echo "Item Price: ".$item_price."<br>";
echo "Total Bill: ".$sum."<br><br>";
echo "Insurance Card: ".$file."<br>";
echo "Comments: ".$comments."<br><br><br>";




//UPDATE data into table
$update="UPDATE strform SET name='$name', gender='$gender', department='$department', cust_name='$cust_name', delivery_date='$date', delivery_time='$time', payment_mode='$payment', deliv_fee='$deliv_fee', item_price='$item_price', total_fee='$sum', comments='$comments' WHERE id='$id' ";
 

if(!mysqli_query($con,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";

echo "<br><a href='view.php'>Go back to records list</a>";
?>

</body>