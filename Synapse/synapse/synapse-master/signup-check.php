<?php
session_start();
include 'db.php';
$username = $_POST['username'];                      
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phoneno'];
$institute = $_POST['institute'];
$password = $_POST['password'];

 if (!empty($username) && !empty($institute) && !empty($password) && !empty($email) && !empty($phone_no) && !empty($address))
{ 
  
    $email=addslashes($email);
    $password=addslashes($password);
    $query1=mysqli_query($conn,"SELECT * from nu where email='$email'");
    $count=mysqli_num_rows($query1);
	$query2=mysqli_query($conn,"SELECT * from nu where username='$username'");
    $count2=mysqli_num_rows($query2);
    if(mysqli_num_rows($query1)==0){
		if(mysqli_num_rows($query2)==0){

			  // random salt generation
				$salt = base64_encode(openssl_random_pseudo_bytes(128, $secure));
				//The variable $secure is given by openssl_random_ps... and it will give a true or false if its tru then it means that the salt is secure for cryptologic.
				while(!$secure){
					$salt = base64_encode(openssl_random_pseudo_bytes(128, $secure));
				}
				$salted_pw = $password.$salt ;
				$hashed_pw = hash('sha256', $salted_pw);
			    
			$query=mysqli_query($conn,"INSERT INTO nu (username, email, salt, password, phoneno, institute, address) values('$username', '$email', '$salt','$hashed_pw', '$phone_no', '$institute', '$address')");
			if($query){
				  $_SESSION['email']=$email;
				  $_SESSION['reg_suc']="You have Successfully registered.";
			      echo "success";
			  //<META http-equiv=\"refresh\" content=\"5;http://www.epreuve.in/login\">";
			}
			else{
			  echo "failure";
			}
		}
		else{
			echo "Username exists";
		}
  }
  else{
    echo "Email already exists";
  }
}
else{
  echo "empty";
}

/*$q = "INSERT INTO nu (username,password,email,address,phoneno,institute) VALUES('$username','$password','$email','$address','$phoneno','$institute')";
$query = mysqli_query($con,$q);
if($query)
{
	echo "1";
}
else
{
	echo "2";
}
*/
?>