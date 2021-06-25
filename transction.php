<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transctionhistory.php">
    <link rel="stylesheet" href="transction.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
        <title>Money Transfer</title>
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
<h1>Money Transfer</h1> 
<!-- nav bar end -->
<section>
  
<div id="form1" class="formcommon" class="form1form2">
    <p>From</p>
        <form action="" method="get">
<div class="section1">
    <label for="k">Select a Name</label>
    <select name="input1" id="k">
        <option value="">Select Here</option>
        <option value="Naruto">Naruto</option>
        <option value="Goku">Goku</option>
        <option value="Vegita">Vegita</option>
        <option value="Biru">Biru</option>
        <option value="Gohan">Gohan</option>
        <option value="Sakura">Sakura</option>
        <option value="Bulma">Bulma</option>
        <option value="Kenji">Kenji</option>
        <option value="Maddy">Maddy</option>
        <option value="Louis">Louis</option>
        <option value="Chandler">Chandler</option>
    </select>
    <!-- <input type="text" name="input1" placeholder="Enter name"> -->
</div>
<button name="btn">OK</button>
<?php
$server="localhost";
$username="root";
$password="";
$dbname="bank";
$con=mysqli_connect($server,$username,$password,$dbname);
if(isset($_GET['btn'])){
    $id=$_GET['input1'];
    $_SESSION['fromname']=$id;
    $query="SELECT * FROM users WHERE name='$id' ";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_array($query_run)){
            
            ?>
<div class="inputcommon">
    <div class="divofinput">
    <label for="input3">Phone</label>
    <input type="text" id="input3" name="phone" value="<?php echo $row['phone'] ?>">
    </div>
    <div class="divofinput">
    <label for="input4">Email</label>
    <input type="text" id="input4" name="email" value="<?php echo $row['email'] ?>">
    </div>
    <div class="divofinput">
    <label for="input5">Account no.</label>
    <input type="text" id="input5" name="accountno" value="<?php echo $row['accountno'] ?>">
    </div>
    <div class="divofinput">
    <label for="input6">Balance</label>
    <input type="text" id="input6" name="balance" value="<?php echo $row['balance'] ?>">
    </div>
</div> 
            <?php

        }

    }
    else{
        echo "No record found";
    }

}
?>
</form>
</div>
<div id="form2" class="formcommon" class="form1form2">
    <p>To</p>
        <form action="" method="post">
<div id="option1" class="section1">
    <label for="l">Select a Name</label>
    <select name="input2" id="l">
        <option value="">Select Here</option>
        <option value="Naruto">Naruto</option>
        <option value="Goku">Goku</option>
        <option value="Vegita">Vegita</option>
        <option value="Biru">Biru</option>
        <option value="Gohan">Gohan</option>
        <option value="Sakura">Sakura</option>
        <option value="Bulma">Bulma</option>
        <option value="Kenji">Kenji</option>
        <option value="Maddy">Maddy</option>
        <option value="Louis">Louis</option>
        <option value="Chandler">Chandler</option>
    </select>
    <!-- <input type="text" name="input2" placeholder="Enter name"> -->
</div>
<button name="btn2">OK</button>
<?php
$server="localhost";
$username="root";
$password="";
$dbname="bank";
$con=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btn2'])){
    $id=$_POST['input2'];
    $_SESSION['toname']=$id;
    $query="SELECT * FROM users WHERE name='$id' ";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_array($query_run)){
            
            ?>
<div class="inputcommon">
    <div class="divofinput">
    <label for="input3">Phone</label>
    <input type="text" id="input3" name="phone" value="<?php echo $row['phone'] ?>">
    </div>
    <div class="divofinput">
    <label for="input4">Email</label>
    <input type="text" id="input4" name="email" value="<?php echo $row['email'] ?>">
    </div>
    <div class="divofinput">
    <label for="input5">Account no.</label>
    <input type="text" id="input5" name="accountno" value="<?php echo $row['accountno'] ?>">
    </div>
    <div class="divofinput">
    <label for="input6">Balance</label>
    <input type="text" id="input6" name="balance" value="<?php echo $row['balance'] ?>">
    </div>
</div>
            <?php

        }

    }
    else{
        echo "No record found";
    }

}

?>
</form>
</div>
<div id="form3" class="formcommon">
<form action="transctionhistory.php" method="post">
    <div id="contentinsidelastform">
        <label for="ai">Enter the Amount</label>
        <input type="number" id="ai" name="amount">
        <button name="btn6">Send</button>
    </div>
</form>
</div>
</section>
</body>
</html>
