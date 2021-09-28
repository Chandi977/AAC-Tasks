<head>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="script.js"></script>
</head>
<?php
$conn=mysqli_connect("localhost","root","","chandi");
if(isset($_POST["show"]))
{
$sql_show="select * from charan";
$result=mysqli_query($conn,$sql_show);
echo "<table class='table table-dark'><tr><th>Roll</th><th>Name</th><th>Email</th><th>Address</th><th>Phone</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$row['Roll']."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["phno"]."</td></tr>";
}
echo "</table>";
}
?>
 
    <div class="col-md-3">
        <form action="back.php" method="post">
            <input type="submit" name="insert" value="Insert">
        </form>
    </div>
   