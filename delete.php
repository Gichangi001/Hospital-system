<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
 </head>


<?php
require_once("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del = mysqli_query($con,"DELETE FROM docsform WHERE id='$id'");
    if($del) {
        echo "Record Successfully Deleted!!";
    } else {
        echo "Record Not Deleted!!";
    }
} else {
    echo "Invalid Request!";
}

echo "<br><a href='bb.php'>Go back to records list</a>";
?>
