<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$staffid = mysqli_real_escape_string($mysqli, $_POST['id2']);
$loan = mysqli_real_escape_string($mysqli, $_POST['loan2']);
$suc = "success";

$sql = "UPDATE customeraccounts SET loanStatus ='$loan', approvalOfficerId = '$staffid' WHERE id ='$id'";

if($mysqli->query($sql) === TRUE){
    header("location:viewloan.php?message=".$suc);
}else{
    echo 'Error';
}
// close connection
$mysqli->close();
?>