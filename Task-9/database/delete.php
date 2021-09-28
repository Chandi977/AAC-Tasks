<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<script src="../bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<link rel="stylesheet" href="../style.css">
<script src="../script.js"></script>
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


if(isset($_POST["delete"]))
{
$conn=mysqli_connect("localhost","root","","chandi");
$roll=$_POST["t1"];
$sql_delete="delete from charan where roll=$roll";
if(mysqli_query($conn,$sql_delete))
{
	$result="Data has been deleted successfully.";
    $resulterr="No Error Found";
}
else
{
	$result="Something Went Wrong";
    $resulterr= mysqli_error($conn);
}

}
?>
<body>  
    <div class="heads head-text">
        <h1 class="hover-underline-animation">Welcome to Delete Page</h1>
    </div>
    <div class="container-body badge-danger">
        <div class="col-md-4" style="float:left;">
            <form action="delete.php" method="post" style="margin-top:200px;">
                <h1 class="something-text"><p class="hover-underline-animation">Roll:-></p><input type="number" name="t1" style="width:100px" placeholder="Enter Roll to Search"></h1>
                <h3 style="margin-left:250px;"><input type="submit" class="btn btn-primary" name="show" value="Show"></h3>
            </form> 
        </div>
        <div class="col-md-4" style="float:left;">
            <form action="delete.php" method="post" class="col-md-6">
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
                    <h2 class="something-text"><p class="hover-underline-animation">Mobile:- </p><input type="number" name="phone" required="required" value="<?php echo @$row[4]?>"></h2>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <form action="delete.php" method="post">
                <h3 style="margin-top:100px;"><p class="hover-underline-animation">Roll :-></p><input type="text" style="width:100px" name="t1" value="<?php echo @$row[0]?>"></h3>
                <h4 style="margin-left:100px"><input type="submit" name="delete" value="Delete" onclick="myFunction()" id="delete"></h4>
                <h3><p class="hover-underline-animation">Comments </p><input type="text" value="<?php echo @$result; ?>"></h3>
                <h3><p class="hover-underline-animation">Comments error</p><input type="text" value="<?php echo @$resulterr; ?>"></h3>
            </form> 
        </div>
</body>
</div>
</body>