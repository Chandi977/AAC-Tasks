<?php
$conn=mysqli_connect("localhost","root","","chandi");
$sql_create="CREATE TABLE firstform(pid int PRIMARY KEY, pname varchar(255), pemail varchar(255), pphone int)";

$sql_drop="Drop table FirstForm";
$result="";
$resulterror="";
if (isset($_POST["create"])) {
    {
        if (mysqli_query($conn,$sql_create)) {
            $result="Database Table is Created.";
            $resulterror="NO error Seen";
        } else {
            $result="Something Went Wrong";
            $resulterror=mysqli_error($conn);
        }
        
    }
}

if (isset($_POST["insert"])) {
    {
        $pid=$_POST["id"];
        $pname=$_POST["name"];
        $pemail=$_POST["email"];
        $pphone=$_POST["phone"];
        $paddress=$_POST["address"];
        $paage=$_POST["age"];
        $sql_insert="INSERT INTO `firstform` (`pid`, `pname`, `pemail`, `pphone`) VALUES ($pid, '$pname', '$pemail', $pphone)";
        if (mysqli_query($conn,$sql_insert)) {
            $result="Data Inserted Sucessfully.";
            $resulterror="NO error Seen";
        } else {
            $result="Something Went Wrong";
            $resulterror=mysqli_error($conn);
        }
        
    }
}

if (isset($_POST["drop"])) {
    {
        if (mysqli_query($conn,$sql_drop)) {
            $result="Table Dropped Sucessfully.";
            $resulterror="NO error Seen";
        } else {
            $result="Something Went Wrong";
            $resulterror=mysqli_error($conn);
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <title>Database Connection</title>
</head>

<body class="bg-dark">
    <div class="heads">
        <h2 class="head-text">Welcome</h2>
    </div>
    <div class="container-body badge-danger">
        <form action="database.php" method="post">
            <div class="col-md-6">
                <div>
                    <h2 class="something-text"> ID :- <input type="text" name="id"></h2>
                </div>
                <div>
                    <h2 class="something-text"> Name :- <input type="text" name="name"></h2>
                </div>
                <div>
                    <h2 class="something-text">Email :- <input type="text" name="email"></h2>
                </div>
                <div>
                    <h2 class="something-text"> Mobile no. :- <input type="text" name="phone"></h2>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="something-text">Output</h2>
                <h3 class="something-text"><input type="text" value="<?php echo @$result; ?>"></h3>
                <h3 class="something-text"><input type="text" style="width: 500px;" value="<?php echo @$resulterror; ?>"></h3>

                <input class="btn-Create-table" type="submit" name="create" value="Create">
                <input class="btn-Insert-data" type="submit" name="insert" value="Insert">
                <input class="btn-Insert-data" type="submit" name="drop" value="Drop">
            </div>
        </form>
    </div>
    <div class="foot">
        <h1 style="margin-left: 45%;"><i class="foot-text">Thank you</i></h1>
    </div>
</body>
</html>
