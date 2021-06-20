<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
    <link rel="stylesheet" href="transctionhistorytable.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
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
<h1>Transction History</h1>
<table>
    <thead>
        <tr>
            <th>Sl.no</th>
            <th>From</th>
            <th>To</th>
            <th>Amount</th>
            <th>Datetime</th>
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
$sql="SELECT slno,givenfrom,givento,amount,datetime from transctionshistory";
$result = $con-> query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["slno"]."</td><td>".$row["givenfrom"]."</td><td>".$row["givento"]."</td><td>".$row["amount"]."</td><td>".$row["datetime"]."</td>";
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