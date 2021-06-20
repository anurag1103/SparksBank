<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="bank";
$con=mysqli_connect($server,$username,$password,$dbname); //establishing the connection
// if($con){
//     echo "Success";
// }

if(isset($_POST['btn6'])){ // to check the submit button is clicked or not
    // getting the value from html into php
$givenfrom = $_SESSION['fromname'];
$givento = $_SESSION['toname'];
//geting balance from db
$sql6="SELECT balance from users WHERE name='".$givenfrom."'";
$result6 = $con-> query($sql6);
while($row= mysqli_fetch_assoc($result6)){
    $balancefromdb=$row['balance'];
}// end of getting balance

if($givenfrom == $givento){
    // echo "Can't send to same person";
    ?>
    <script>
        alert("Can't send to same person");
    </script>
    <?php
}
else{
$amount=$_POST['amount'];
if($amount <= 0 || $balancefromdb <= $amount){
    // echo "Amount can't be negative or Zero or less then the senders balance";
    ?>
    <script>
        alert("Amount can't be negative or Zero or less then the senders balance");
    </script>
    <?php
}
else{
$sql1="update users set balance=balance -".$amount." where name='".$givenfrom."'";
$sql2="update users set balance=balance +".$amount." where name='".$givento."'";
$sql="insert into transctionshistory( givenfrom, givento, amount,datetime)  values( '".$givenfrom."', '".$givento."', '$amount', current_timestamp());";// inseting the values in the data base
$run=mysqli_query($con,$sql1);
$run=mysqli_query($con,$sql2);
$run=mysqli_query($con,$sql) or die(mysqli_error($con)); //to run the connection
?>
<script>
    alert("Transaction Successfull");
</script>
<?php
// echo "Transction Successfull";
}
// if($run){
//     echo "Transction Successfull";
// }
// else{
//     echo "Transction Unsuccessfull";
// }
}
}
?>