<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki Jensen
 * Date: 09-12-2016
 * Time: 16:07
 */

$servername = "83.89.102.65";
$username = "Nicki";
$password = "Kode2139";
$dbName = "userDB";

//open connection to mysql db
$connection = mysqli_connect($servername, $username, $password, $dbName) or die("Error " . mysqli_error($connection));

//fetch table rows from mysql db
$sql = "select * from users";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
echo json_encode($emparray);

echo json_last_error_msg();
//close the db connection
mysqli_close($connection);
