<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
 </head>

<?php
require_once('connect.php');

if(isset($_REQUEST['id'])) {
  $id=$_REQUEST['id'];

  $result=mysqli_query($con,"SELECT * FROM docsform where id='$id'");
  $row = mysqli_fetch_array($result);

//use the ternary operator to check if the array key is set in $row. If it is set, we assign the value to the corresponding variable. Otherwise, we assign an empty string ''.
 if($row)
{
    $first_name=isset($row['first_name']) ? $row['first_name'] : '';
    $last_name=isset($row['last_name']) ? $row['last_name'] : '';
    $gender=isset($row['gender']) ? $row['gender'] : '';
    $department=isset($row['department']) ? $row['department'] : '';
    $doc_name=isset($row['doc_name']) ? $row['doc_name'] : '';
    $date=isset($row['date']) ? $row['date'] : '';
    $time=isset($row['time']) ? $row['time'] : '';
    $payment=isset($row['payment']) ? $row['payment'] : '';
    $file=isset($row['file']) ? $row['file'] : '';
    $consult_fee=isset($row['consult_fee']) ? $row['consult_fee'] : '';
    $med_fee=isset($row['med_fee']) ? $row['med_fee'] : '';
    $pharm_fee=isset($row['pharm_fee']) ? $row['pharm_fee'] : '';
    $comments=isset($row['comments']) ? $row['comments'] : '';
}

}
?>
<h2>Medical Form</h2>

<form name='update' action='updateprocess.php' method='post'>
<div>
<input type="hidden" name='id' value="<?php echo $id ?>"><br>
             <b>First Name</b><input type="text" name="first_name" value="<?php echo $first_name?>"></input>
            <b>Second Name</b><input type="text" name="last_name" value="<?php echo $last_name?>"></input>
</div><br>
<div>
        <label><b>Gender</b></label>
        <input type="radio" name="gender" value="male" <?php if($gender == 'male') echo 'checked="checked"'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if($gender == 'female') echo 'checked="checked"'; ?>> Female
    </div><br>
<div><br>
<b>Doctor's Name</b><input type="text" name="doc_name" value="<?php echo $doc_name?>"></input>
</div><br>
<div>
<b>Appointment Date</b><input type="date" name="date" value="<?php echo $date?>"><br><br>
<b>Appointment Time</b><input type="time" id="time" name="time" value="<?php echo $time?>">
</div><br>
<div>
<b>Payment Mode</b><select name="payment">
<option selected="selected"><?php echo $payment?></option>
              <option>Cash</option>
              <option>Card</option>
              <option>M-Pesa</option>
</select>
</div><br>
<div>
<label><b>Consultation Fee</b></label><br>
<input type="text" name="consult_fee" value="<?php echo $consult_fee ?>">
</div><br>
<div>
<label><b>Medical Fee</b></label><br>
<input type="text" name="med_fee" value="<?php echo $med_fee ?>">
</div><br>
<div>
<label><b>Pharmacy</b></label><br>
<input type="text" name="pharm_fee" value="<?php echo $pharm_fee ?>">
</div><br>

<div>
<b>Upload Insurance Card</b><br><input type="file" id="file" name="file" readonly><br>
                    

</div><br>
<div>
<label><b>Comments</b></label><br>
<textarea  rows="10" cols="50" name="comments" value="<?php echo $comments ?>"></textarea><br>
</div><br>
<div>
<input type='submit' value='submit order'>
<input type='reset' value='reset form'>
</div><br><br>

</form>