<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Student Registration</title></head>
<body>
<link rel="stylesheet" href="style.css">
<form method="GET">
  First name:<br><input name="fname" required><br><br>
  Last name:<br><input name="lname" required><br><br>
  Reg number:<br><input name="reg" required><br><br>
  Address:<br><input name="address" required><br><br>
  Gender:<br>
  <input type="radio" name="sex" value="Male" required>Male
  <input type="radio" name="sex" value="Female" required>Female<br><br>
  Date of Birth:<br><input type="date" name="dob" required><br><br>
  <input type="submit" value="Submit"> <input type="reset" value="Reset">
</form>

<?php
if(isset($_GET['fname'])){
  $conn=new mysqli("localhost","root","","wowee");
  if($conn->connect_error) die("DB error: ".$conn->connect_error);
  extract($_GET);
  echo "<h3>Submitted Info:</h3><table border='1'><tr>
        <th>First</th><th>Last</th><th>Reg</th><th>Address</th><th>Gender</th><th>DOB</th></tr>
        <tr><td>$fname</td><td>$lname</td><td>$reg</td><td>$address</td><td>$sex</td><td>$dob</td></tr></table>";
  $sql="INSERT INTO students(fname,lname,reg,address,sex,dob)
        VALUES('$fname','$lname','$reg','$address','$sex','$dob')";
  echo $conn->query($sql)?"<p>Inserted successfully.</p>":"<p>Error: ".$conn->error."</p>";
  $conn->close();
}
?>
</body>
</html>
