<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$mname = mysqli_real_escape_string($mysqli, $_POST['mname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
$dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
$relationship = mysqli_real_escape_string($mysqli, $_POST['relationship']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$accountno = mysqli_real_escape_string($mysqli, $_POST['accountno']);
$pnumber = mysqli_real_escape_string($mysqli, $_POST['pnumber']);
$accounttype = mysqli_real_escape_string($mysqli, $_POST['accounttype']);
$address = mysqli_real_escape_string($mysqli, $_POST['address']);
$state = mysqli_real_escape_string($mysqli, $_POST['state']);
$country = mysqli_real_escape_string($mysqli, $_POST['country']);
$accountstatus = mysqli_real_escape_string($mysqli, $_POST['accountstatus']);


//VALIDATION

if (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($lname) < 2) {
    echo 'lname';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (strlen($accountno) <= 9) {
    echo 'accountno';
}
 elseif (strlen($gender) < 1){
    echo 'gender';
}
 elseif (strlen($dob) <= 2) {
    echo 'dob';
}
 elseif (strlen($relationship) < 1){
    echo 'relationship';
}
 elseif (strlen($pnumber) <= 10) {
    echo 'pnumber';
}
 elseif (strlen($address) <= 4) {
    echo 'address';
}
elseif (strlen($state) <= 2){
    echo 'state';
} 
elseif (strlen($country) <= 2) {
    echo 'country';
}
elseif (strlen($accountstatus) < 1){
    echo 'accountstatus';
}  
elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
    //VALIDATION
}

	
 else {
		
    $query = "SELECT * FROM customeraccount WHERE phone = '$pnumber'";
    $query2 = "SELECT * FROM customeraccount WHERE accountNo = '$accountno'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error());
    $result2 = mysqli_query($mysqli, $query2) or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $num_row2 = mysqli_num_rows($result2);
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
	
		if (($num_row < 1) && ($num_row2 < 1)) {

			$insert_row = $mysqli->query("INSERT INTO customeraccount ( firstName, middleName, lastName, gender, dob, relationship, email, phone, address, state, country, accountStatus, accountType, accountNo) 
             VALUES ('$fname', '$mname', '$lname', '$gender', '$dob', '$relationship', 
             '$email', '$pnumber', '$address', '$state', '$country', '$accountstatus','$accounttype', '$accountno')");

			if ($insert_row) {

				// $_SESSION['login'] = $mysqli->insert_id;
				// $_SESSION['fname'] = $fname;
				// $_SESSION['lname'] = $lname;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>