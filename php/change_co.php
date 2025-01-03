<?php
include('connect.php');
session_start();
$email = $_SESSION["uname"];
?>
<?php
     $newlng = $_POST['lng'];
     $newlat = $_POST['lat'];
    $query ="UPDATE `user` SET `lng`='$newlng',`lat`='$newlat' where `username`= '$email'";
	$selectt = mysqli_query($conn,$query);
	 if(mysqli_affected_rows (mysqli_connect()) >0){
         echo '<script> alert("it dint change co-ordinates"); </script>';
         header('Location:../geofencing.php');
	 }
	 else{
        header('Location:../geofencing.php');
	 }
     ?>