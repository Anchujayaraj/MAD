<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $uname=$_POST["uname"];
    $rno=$_POST["rno"];
    $bid=$_POST["bid"];
    $bname=$_POST["bname"];
    $aname=$_POST["aname"];
    $edtion=$_POST["edtion"];
    $idate=$_POST["idate"];
    $retrevd=$_POST["retrevd"];
    $query="INSERT INTO  bbooks VALUES('$uname','$rno','$bid','$bname','$aname','$edtion','$idate','$retrevd')";
    $run=mysqli_query($conn,$query);
 
}
?>
<!DOCTYPE html>
<head>
    <title>Information about borrowed books</title>
    <style>
        *{ 
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
}
    .header{
    min-height:100vh;
    width:100%;
    background-image:linear-gradient(rgba(219, 163, 205, 0.7),rgba(216, 152, 213, 0.7));
    background-position:center;
    background-size:cover;
    position:relative;
}
body{
    background-image:url('img1.jpeg');
}

</style>
</head>
<body >
<section class="header">
<nav>
    <div class="nav-links">
    <center>
        <h1>Information about borrowed books </h1>
        <br><br>
        </div>
        <form action=""  method="post" align="center">
            <div class="txt_field">
                
                User Name <input type="text"  name="uname" required>
            </div>
            <br><br>
            <div class="num">
                Roll Number <input type="number" name="rno" required>
            </div><br><br>
            <div class="bid">
                Book ID<input type="number" name="bid" required>
            </div><br><br>
            <div class="name">
                Book Name<input type="text" name="bname" required>
            </div><br>
            <div class="aname">
                Author's Name <input type="text" name="aname" required>
            </div><br>
            <div class="num">
                Edition <input type="number" name="edtion" required>
            </div><br><br>
            <div class="da">
                Issue Date <input type="date" name="idate" required>
            </div><br>
            <div class="dat">
                Return/Renew Date: <input type="date" name="retrevd" required>
            </div><br><br>
    </nav>  </section></center>
    <center>        
  <input type="submit" value="Submit" name="submit">
</center>
</body>
</html>