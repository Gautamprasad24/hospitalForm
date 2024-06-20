<?php
include('hospital connect.php');

$name = $_POST['fname'];
$date = $_POST['date'];
$Time = $_POST['time'];
$phone = $_POST['contact'];

$sql = "INSERT INTO appointment (Name,Contact,Date,time)values ('$name','$phone','$date','$Time')";

if(mysqli_query($conn,$sql))
{
    echo"Your Appointment Has Been Booked";
}
else{
    echo"Something Went Wrong";
}

?>
