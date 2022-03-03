<html>
<head>
</head>
<body>
<center>
<h1>Book Details</h1>
<br>
<?php
include "connection.php";
$sql="select * from bbooks";
echo '
<table border="1" >
<tr> 
<th>User name: </th>
<th>Roll Number: </th>
<th>Book Id: </th>
<th>Book Name: </th>
<th>Isse Date: </th>
<th>Return/Renew: </th>
</tr>';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr>
        <td>'.$row["uname"].'</td>
        <td>'.$row["rno"].'</td>
        <td>'.$row["bid"].'</td>
        <td>'.$row["bname"].'</td>
        <td>'.$row["idate"].'</td>
        <td>'.$row["retrevd"].'</td></tr>';
    }
}

?>
</center>
</body>
</html>
