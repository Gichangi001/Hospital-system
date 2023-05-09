<head>
  <link rel="stylesheet" href="style.css">
</head>
<a href= "login.html">logout</a><br><br>

<p>For more info<a href= "contact.html">Contact us</a><br><br></p>

<?php
require_once('connect.php');

$result = mysqli_query($con, "SELECT * FROM docsform");

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>id</td>";
    echo "<td>first_name</td>";
    echo "<td>last_name</td>";
    echo "<td>gender</td>";
    echo "<td>department</td>";
    echo "<td>consultation_fee</td>";
    echo "<td>med_fee</td>";
    echo "<td>pharmacy_fee</td>";
    echo "<td>total_fee</td>";
    echo "<td>payment_mode</td>";
    echo "<td>doctor_name</td>";
    echo "<td>appointment_date</td>";
    echo "<td>appointment_time</td>";
    echo "<td>comments</td>";
    echo "<td>Delete</td>";
	echo "<td>Update</td>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";
        echo "<td>" . $row['consultation_fee'] . "</td>";
        echo "<td>" . $row['med_fee'] . "</td>";
        echo "<td>" . $row['pharmacy_fee'] . "</td>";
        echo "<td>" . $row['total_fee'] . "</td>";
        echo "<td>" . $row['payment_mode'] . "</td>";
        echo "<td>" . $row['doctor_name'] . "</td>";
        echo "<td>" . $row['appointment_date'] . "</td>";
        echo "<td>" . $row['appointment_time'] . "</td>";
        echo "<td>" . $row['comments'] . "</td>";
        echo "<td><a href='delete.php?id=$id'>Delete</a></td>";
		 echo "<td><a href='update.php?id=$id'>Update</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($con);
?>
