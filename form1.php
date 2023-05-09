<h2>Medical Form</h2>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<body>
<?php
require_once('connect.php');


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$doc_name=$_POST['doc_name'];
$date=$_POST['date'];
$time=$_POST['time'];
$payment=$_POST['payment'];
$file=$_POST['file'];
$consult_fee=$_POST['consult_fee'];
$med_fee=$_POST['med_fee'];
$pharm_fee=$_POST['pharm_fee'];
$comments=$_POST['comments'];



$sum = ($consult_fee)+($med_fee)+($pharm_fee);



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



// Insert form data into table
$insert = "INSERT INTO docsform (first_name, last_name, gender, department, consultation_fee, med_fee, pharmacy_fee, total_fee, payment_mode, doctor_name, appointment_date, appointment_time, comments)
VALUES ('$first_name', '$last_name', '$gender', '$department', '$consult_fee', '$med_fee', '$pharm_fee', '$sum', '$payment','$doc_name','$date', '$time', '$comments')";



if(mysqli_query($con,$insert))
{
    echo "New record created successfully <br>";
} else {
    echo "failed  to connect";
}

echo "View entries<a href='bb.php'>View Entry Table</a>";
?>

</body>