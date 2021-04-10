<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat_realtime";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, image, price FROM cart";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  $hm=array();

  while($row = mysqli_fetch_assoc($result)) {
      $hm[$row["name"]]= 0;
  }
  echo '<h1>Products Selected</h1>';
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {

      $imgg=$row["image"];
        $hm[$row["name"]]= $hm[$row["name"]]+$row["price"];
        echo '<img style="width:200px; height:200px" src="'.$imgg.'"/>&nbsp;&nbsp;&nbsp;';
    }
echo '<br><br><h2>Individual bill generated</h2>';
    foreach ($hm as $k => $v){
    print $k.": ".$v."\n";
    echo '<br>';}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
