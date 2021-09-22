<?php
  if(isset($_POST[ "sub" ])){
    $result="Result";
    if($_POST[ "t1" ] > 29) {
      echo $result="Pass";
    }
    else{
      echo $result="Fail";
    }
  }
?>

<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <form action="home.php" method="post">
    <input type="text" name="t1">
    <input type="text" name="t2" value="<?php echo @$result; ?>">
    <input type="submit" name="sub" value="Enter">

  </form>
</body>
</html>