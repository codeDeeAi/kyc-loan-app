<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$staffid = mysqli_real_escape_string($mysqli, $_POST['id2']);
$kycStat = mysqli_real_escape_string($mysqli, $_POST['kycstatus']);
$kycDate = mysqli_real_escape_string($mysqli, $_POST['kycdate']);
$suc = "success";

$sql = "UPDATE customeraccounts SET kycStatus = '$kycStat' , kycStaffId = '$staffid' , kycVerifiedDate = '$kycDate' WHERE id ='$id'";

if($mysqli->query($sql) === TRUE){
    header("location:viewkyc.php?message=".$suc);
}else{
    echo 'Error';
}
// close connection
$mysqli->close();
?>