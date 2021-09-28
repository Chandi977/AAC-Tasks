<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<script src="../bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<link rel="stylesheet" href="../style.css">
</head>
<?php
$result="";
$resulterr="";
if(isset($_POST["insert"]))
{
$conn=mysqli_connect("localhost","root","","chandi");
$roll=$_POST["roll"];
$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$phno=$_POST["phone"];
$sql_insert="insert into charan(Roll,Name,Email,Address,phno) values($roll,'$name','$email','$address',$phno)";
if(mysqli_query($conn,$sql_insert))
{
	$result= "Data Stored in The Database";
    $resulterr="No error found";
}
else
{
	$result= "Something went Wrong";
	$resulterr= mysqli_error($conn);
}
}
?>
<body style="background-color:black;">
    <div class="heads head-text">
        <h1 class="hover-underline-animation">Welcome to Insert Page</h1>
    </div>
<div class="container-body badge-danger">
    <div class="col-md-6" style="float:left;">
        <form action="insert.php" method="post" class="col-md-6">
            <div>
                <h2 class="something-text"><p class="hover-underline-animation"> ID :- </p><input type="number" name="roll" required="required" placeholder="Roll"></h2>
            </div>
            <div>
                <h2 class="something-text"><p class="hover-underline-animation">Name :-</p> <input type="text" name="name" required="required" placeholder="Name"></h2>
            </div>
            <div>
                <h2 class="something-text"><p class="hover-underline-animation">Email :-</p> <input type="email" name="email" required="required" placeholder="xyz@gmail.com"></h2>
            </div>
            <div>
                <h2 class="something-text"><p class="hover-underline-animation">Address :- </p><input type="text" name="address" required="required" placeholder="India,Adityapur,Bistupur"></h2>
            </div>
            <div>
                <h2 class="something-text"><p class="hover-underline-animation"> Mobile no. :- </p><input type="number" name="phone" required="required" placeholder="1234567890"></h2>
            </div>
            <input type="submit" value="Insert" class="btn btn-primary" name="insert">
        </form>
    </div>
    <div class="col-md-6">
        <div>
            <h1 class="hover-underline-animation" style="margin-left:200px; margin-top:150px;">Output</h1>
        </div>
        <div>
            <h2 class="out-com"><p class="hover-underline-animation">Comments </p> <input type="text" value="<?php echo @$result;?>"></h2>
        </div>
        <div>
        <h2 class="out-com"><p class="hover-underline-animation">Comment Error </p> <input type="text" value="<?php echo @$resulterr;?>"></h2>
        </div>
    </div>
</div>
</body>