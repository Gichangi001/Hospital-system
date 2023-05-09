<body>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<h2> Customer order details</h2>
<?php
require_once('connect.php');
//receive data from form and assign to variables
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$department = isset($_POST['department']) ? $_POST['department'] : "";
$doc_name = isset($_POST['doc_name']) ? $_POST['doc_name'] : "";
$date=$_POST['date'];
$time=$_POST['time'];
$payment=$_POST['payment'];
$file=$_POST['file'];
$consult_fee=$_POST['consult_fee'];
$med_fee=$_POST['med_fee'];
$pharm_fee=$_POST['pharm_fee'];
$comments=$_POST['comments'];


//calculate total order cost

$sum = ($consult_fee)+($med_fee)+($pharm_fee);

//print  the details
echo "First Name: ".$first_name."<br>";
echo "Second Name: ".$last_name."<br>";
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
echo "Doctor's Name: ".$doc_name."<br>";
echo "Appointment Date: ".$date."<br>";
echo "Appointment Time: ".$time."<br><br>";
echo "Payment Mode: ".$payment."<br>";
echo "Consultation Fee: ".$consult_fee."<br>";
echo "Medical Fee: ".$med_fee."<br>";
echo "Pharmacy: ".$pharm_fee."<br>";
echo "Total Bill: ".$sum."<br><br>";
echo "Insurance Card: ".$file."<br>";
echo "Comments: ".$comments."<br><br><br>";




//UPDATE data into table
$update="UPDATE docsform SET first_name='$first_name', last_name='$last_name', gender='$gender', department='$department', doctor_name='$doc_name', appointment_date='$date', appointment_time='$time', payment_mode='$payment', consultation_fee='$consult_fee', med_fee='$med_fee', pharmacy_fee='$pharm_fee', total_fee='$sum', comments='$comments' WHERE id='$id' ";
 

if(!mysqli_query($con,$update))
{
echo "Record not updated. Try Again";
}
else
echo"Recorded updated successfully!";

echo "<br><a href='bb.php'>Go back to records list</a>";
?>

</body>