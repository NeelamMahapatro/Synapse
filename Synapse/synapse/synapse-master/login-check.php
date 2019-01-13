<?php
include('db.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password))
    {
        $email=addslashes($email);
        $password=addslashes($password);
        $salt_extract = "SELECT salt FROM nu WHERE email='$email'";
        $salt_extract_run = mysqli_query($conn,$salt_extract);
        $row = mysqli_fetch_array($salt_extract_run);
        if(mysqli_num_rows($salt_extract_run)>0)
        {
                //echo "Hii";
            $salt = $row['salt'];
        }
        else
        	echo "check";
        	
        $salted_pw = $password.$salt ;
        $hashed_pw = hash('sha256', $salted_pw);

        $query1 ="SELECT * FROM nu WHERE email='$email' AND password='$hashed_pw'";
        $query1_run=mysqli_query($conn,$query1);
        $query_row=mysqli_fetch_array($query1_run);

        if(mysqli_num_rows($query1_run)>0)
        {  
                $_SESSION['user'] = $query_row['username'];
                $_SESSION['email']=$query_row['email'];
                session_regenerate_id(true);
                $_SESSION['userhome']='play.php';
                echo 'success';
            
        }
        /*else if(mysqli_num_rows($query11_run)>0)
        {
            header("Location:hack.php");
        }*/
        else
        {   
            echo 'check';
        }
    }
    
/*
$q1 = "SELECT * FROM  WHERE email = '$email'";
$query1 = mysqli_query($con,$q1);
if(mysqli_num_rows($query1))
{
  
	$data1 = mysqli_fetch_array($query1);

	if($data1['password'] == $password)
	{
		echo "1";
	}
	else
	{
		echo "2";
	}
	
   
	
	

}
else
{
	echo "3";
}
*/

?>