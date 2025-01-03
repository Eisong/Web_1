<?php 
include('connect.php');
session_start();
$var = 'log()';
$u = "";
if(!isset($_POST['person']))
    {
        $person = "";
    }
    else{
$person = htmlspecialchars($_POST["person"]);
    }    
if($person == "User")
{
if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    if(empty($_POST['uname']) || empty($_POST['pass'])){
        $u= "YOU MUST FILL THE FORM";
    }
    else{

    $query = 'SELECT * From user where username = "'.$uname.'" AND  pass = "'.$password.'" ';
    $result = mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        $_SESSION["uname"] = $uname;
        header("Location: geofencing.php");

    }
       
    else{
    	
        $u= "sorry user not found";
    }
    
}
}
}
/////////////////////////////////////////////////////---- for admin
if($person == "Admin")
{
if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    if(empty($_POST['uname']) || empty($_POST['pass'])){
        $u= "YOU MUST FILL THE FORM";
    }
    else{

    $query = 'SELECT * From user where username = "'.$uname.'" AND  pass = "'.$password.'" ';
    $result = mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        $_SESSION["uname"] = $uname;
        header("Location: dashboard.php");

    }
       
    else{
    	
        $u= "sorry user not found";
    }
    
}
}
}



//////////////////////////////////////////////--- for manager
if($person == "Manager")
{
if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    if(empty($_POST['uname']) || empty($_POST['pass'])){
        $u= "YOU MUST FILL THE FORM";
    }
    else{

    $query = 'SELECT * From user where username = "'.$uname.'" AND  pass = "'.$password.'" ';
    $result = mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        $_SESSION["uname"] = $uname;
        header("Location: dashboard.php");

    }
       
    else{
    	
        $u= "sorry user not found";
    }
    
}
}
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////sign-up///////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////


if(isset($_POST["ssubmit"])){
    $username = $_POST['suname'];
    $fname = $_POST['sfname'];
    $lname = $_POST['slname'];
    $password = $_POST['spass'];
    $email = $_POST['semail'];
    if(!isset($_POST['person']))
    {
        $person = "";
    }
    else{
		$person = htmlspecialchars($_POST["sperson"]);
    }
   
    $conpass =$_POST['conpass'];
    $phone =$_POST['sphone'];
    $address =$_POST['saddress'];


    if(empty($_POST['suname']) || empty($_POST['spass']) || empty($_POST['semail']) ||  empty($_POST['conpass']) ||empty($_POST['sfname']) || empty($_POST['slname']) || empty($_POST['sperson']))
    {
        $u = "YOU MUST FILL THE FORM";
        $var = 'sign()';
    }
    else if($_POST['spass'] != $_POST['conpass'])
    {
    		$u = "confirm password is wrong";
    		$var = 'sign()';
    }
    else{
        
         $query = "INSERT INTO `user`(`username`, `email`, `pass`, `fname`, `lname`, `address`, `phone`, `person`,`lng`,`lat`)     VALUES ('$username','$email','$password','$fname', '$lname', '$address', '$phone', '$person','8.341701','4.975716')";
    $result = mysqli_query($conn,$query);
   if(mysqli_affected_rows($conn)>0){
    header("Location:indexlog.php");
     }
     else{
        echo "user Already exist";
        header("Location:index.php");
     }

    }
    


}
?>