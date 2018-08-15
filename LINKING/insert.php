
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$con = new mysqli("localhost","admin","King.cobra1","dataX");

$sql = "INSERT INTO tableX (name,phone,email) VALUES ('$name','$phone','$email')";

$run = mysqli_query($con,$sql);

if($con==TRUE)
{
echo "Connection Established !!";
}
else

echo "Try again , Bro !!";

?>
