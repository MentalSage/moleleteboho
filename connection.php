<?php
$texi = $_POST['lucky_number'];

$pas1 = 0201311111 ;

if($texi = $pas1){
    header("refresh:3;portfolio-details.html");

?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>
<body>
 <h2>Please Enter logins</h2>
 <form action="connection.php" method="post"  encrypt="multipart/form-data">
        <h1 class="reg_head">Place Your Bet</h1>
        <input type="text" name="name" class="fill_cont" placeholder="Enter Name..."><br>

       
                <input type="password" name="lucky_number" class="fill_cont" placeholder="password"><br>
  
        
        <button type="submit" class="butn"  style=";" name="sub_info">ROLL</button><br><br>
        <!-- <a href="view.php" class="viewL">View Drivers</a><br><Br> -->
    </form>
</body>
</html>