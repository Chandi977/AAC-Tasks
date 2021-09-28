<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<script src="../bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<link rel="stylesheet" href="../style.css">
</head>
<?php
if(isset($_POST["show"]))
{
$conn=mysqli_connect("localhost","root","","chandi"); //("database address","Username","Password","database name")
$roll_fetch=$_POST["t1"];
$sql_show="select * from charan where roll = '$roll_fetch'";
$result=mysqli_query($conn,$sql_show);
$row=mysqli_fetch_row($result);
}

if(isset($_POST["update"]))
{
$conn=mysqli_connect("localhost","root","","chandi"); //("database address","Username","Password","database name")
$roll=$_POST["roll"];
$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$phno=$_POST["phone"];
$sql_update="update charan set Name='$name',phno=$phno, Email='$email', Address='$address' where Roll=$roll";
if(mysqli_query($conn,$sql_update))
{
	echo "OK";
}
else
{
	echo "Not Ok";
    echo mysqli_error($conn);
}

}
?>
<body>
<div class="heads head-text">
        <h1 class="hover-underline-animation">Welcome to Update Page</h1>
    </div>
    <div class="container-body badge-danger">
        <div class="col-md-6">
            <div >
                <form action="update.php" method="post" style="margin-top:200px;">
                    <h1 class="something-text"><p class="hover-underline-animation">Roll:-></p> <input type="number" name="t1" placeholder="Enter Roll to Search"></h1>
                    <h3 class="something-text" style="margin-left:300px;"><input type="submit" class="btn btn-primary" name="show" value="Show"></h3>
                </form> 
            </div>
        </div>
        <div class="col-md-6" style="margin-top:-50px">
            <form action="update.php" method="post" class="col-md-6">
                <div>
                    <h2 class="something-text"><p class="hover-underline-animation"> ID :- </p><input type="number" name="roll" required="required" value="<?php echo @$row[0]?>"></h2>
                </div>
                <div>
                    <h2 class="something-text"><p class="hover-underline-animation">Name :-</p> <input type="text" name="name" required="required" value="<?php echo @$row[1]?>"></h2>
                </div>
                <div>
                    <h2 class="something-text"><p class="hover-underline-animation">Email :-</p> <input type="email" name="email" required="required" value="<?php echo @$row[2]?>"></h2>
                </div>
                <div>
                    <h2 class="something-text"><p class="hover-underline-animation">Address :- </p><input type="text" name="address" required="required" value="<?php echo @$row[3]?>"></h2>
                </div>
                <div>
                    <h2 class="something-text"><p class="hover-underline-animation"> Mobile no. :- </p><input type="number" name="phone" required="required" value="<?php echo @$row[4]?>"></h2>
                </div>
                
                <input type="submit" name="update" class="btn btn-primary" value="Update">
            </form>
        </div>
</body>