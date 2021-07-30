<?php
$insert = false;
if(isset($_POST['Name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("Connection to this server failed due to ".
        mysqli_connect_error());
    }
    //echo "<br> Successfully connected";

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Phone_no = $_POST['Phone_no'];
    $Email = $_POST['Email'];
    $Query = $_POST['Query'];
 
    $sql = "INSERT INTO `wesite`.`details` ( `Name`, `Age`, `Phone_no`,
    `Email`,`Query`) VALUES ( '$Name', '$Age', '$Phone_no',
    '$Email', '$Query')";
    
   //echo $sql;
   if($con->query($sql) == true)
   {
       echo "<p1 class='FINAL'> Succesfully submitted the details!!</p1>";
       $insert = true;
   }
   else
   {
       echo "ERROR: $sql <br> $con->error";
   }
   $con->close(); 
}
?>