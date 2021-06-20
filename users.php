<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <title>USERS</title>
</head>
<body>
<!-- Nav Bar -->
<nav id="navigation">
    <div>
        <a href="homepage.html">Home</a>
    </div>
    <ul>
        <li><a href="users.php">Users</a></li>
        <li><a href="transction.php">Transaction</a></li>
        <li><a href="transctionhistorytable.php">Transaction History</a></li>
    </ul>
    <!-- <div>
        <a href="#">About</a>
    </div> -->

</nav>
<!-- nav bar end -->
<section>
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>Sl.no</th>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Account No</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>

        <?php
$server="localhost";
$username="root";
$password="";
$dbname="bank";
$con=mysqli_connect($server,$username,$password,$dbname); //establishing the connection
// if($con){
//     echo "Success";
// }
$sql="SELECT slno,name,phone,email,accountno,balance from users";
$result = $con-> query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["slno"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["accountno"]."</td><td>".$row["balance"]."</td></tr>";
    }
    echo "</table>";
    }
    else{
        echo "0 Result";
    }
$con->close();
?>
</tbody>   
</table>
</section>
</body>
</html>