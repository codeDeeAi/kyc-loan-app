<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$loan = mysqli_real_escape_string($mysqli, $_POST['loan']);
$staffid = mysqli_real_escape_string($mysqli, $_POST['staffid']);
$account = mysqli_real_escape_string($mysqli, $_POST['account']);


//VALIDATION

if (strlen($loan) < 1) {
    echo 'false';
} 
	
 else {
		
    $query = "SELECT * FROM customeraccounts WHERE accountNo = '$account'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
	
		if ($num_row = 1) {

            $update = $mysqli->query("UPDATE customeraccounts SET loanStatus ='$loan', approvalOfficerId = '$staffid'");
			

			if ($update) {				

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>