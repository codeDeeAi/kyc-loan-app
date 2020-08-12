<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'greeny02', 'kyc');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    echo 'connecterror';
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$mname = mysqli_real_escape_string($mysqli, $_POST['mname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
$dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
$relationship = mysqli_real_escape_string($mysqli, $_POST['relationship']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$pnumber = mysqli_real_escape_string($mysqli, $_POST['pnumber']);
$accountno = mysqli_real_escape_string($mysqli, $_POST['accountno']);
$accounttype = mysqli_real_escape_string($mysqli, $_POST['accounttype']);
$bvn = mysqli_real_escape_string($mysqli, $_POST['bvn']);
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
}
 elseif (empty($gender)) {
    echo 'gender';
}
 elseif (empty($dob)) {
    echo 'dob';
}
 elseif (empty($relationship) <= 4) {
    echo 'relationship';
}
 elseif (strlen($pnumber) <= 11) {
    echo 'pnumber';
}
 elseif (empty($address)) {
    echo 'address';
}
elseif (empty($state)) {
    echo 'state';
} 
elseif (empty($country)) {
    echo 'country';
}
elseif (empty($accountstatus)) {
    echo 'accountstatus';
}  
elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
    //VALIDATION
}

	
 else {
		
	$query = "SELECT * FROM customeraccount WHERE phone='$pnumber'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO customeraccount ( firstName, middleName, lastName, gender, dob, relationship, 
             email, phone, address, state, country, accountStatus) 
             VALUES ('$fname', '$mname', '$lname', '$gender', '$dob', '$relationship', 
             '$pnumber', '$email', '$address', '$state', '$country',' $accountstatus')");
            
            echo 'true';

			// if ($insert_row) {

			// 	$_SESSION['login'] = $mysqli->insert_id;
			// 	$_SESSION['fname'] = $fname;
			// 	$_SESSION['lname'] = $lname;

			// 	echo 'true';

			// }

		} else {

			echo 'false';

		}
		
}

?>