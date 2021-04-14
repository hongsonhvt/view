<?php
$servername="ec2-54-161-239-198.compute-1.amazonaws.com";
$username="dfvybslkroicec";
$password="5fbc0949cb42473725fecfacf19b0e03e91b0bbda4160be46e1acab02a7f4e93";
$dbname="d85gnlj8j0mcj0";
$conn=pg_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("Error Connection: ".pg_connect_error());
}
    include("conn.php");
    $sql = "select * from public.login";
    $q = pg_query($dbconn, $sql);
    $row = pg_fetch_array($q);
    $username = $row['username'];
    echo $username;
?>