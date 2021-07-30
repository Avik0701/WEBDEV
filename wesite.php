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
       echo "<p2 class='FINAL'> Succesfully submitted the details!!</p2>";
       $insert = true;
   }
   else
   {
       echo "ERROR: $sql <br> $con->error";
   }
   $con->close(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Database</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<img class = "bg" src="bg.png" alt="FRIENDS">
    <div class="cont">
    <h1>Welcome on board!!</h1>
    <p>Fill in your details.....</p>
   
    <br>
    <br>
    <form action="index.php" method="post">
        <input type="text" name="Name" id="Name" placeholder = "Enter your name">
        <input type="text" name="Age" id="Age" placeholder = "Enter your age">
        <input type="phone" name="Phone_no" id="Phone_no" placeholder ="Enter your phone number" >
        <input type="email" name="Email" id="Email" placeholder ="Enter your E-mail" >
        <textarea name="Query" id="Query" cols="30" rows="3" 
    placeholder = "Enter any query..."></textarea>
    <br>
    <button class="btn">Submit</button>
    <button class="btn">Reset</button>
    </form>
    <?php
    if($insert==true)
    {
        echo "<br> THANKS FOR SUBMITIING THE DETAILS";
    }
    ?>
    </div>
    
</body>
<script src="index.js"></script>
</html>
