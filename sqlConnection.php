<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicki Jensen
 * Date: 09-12-2016
 * Time: 11:02
 */


$servername = "83.89.102.65";
$username = "Nicki";
$password = "Kode2139";
$dbName = "userDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_row($result);

    // ---- Tror problemet ligger i dette while loop ----
    while ($row = mysqli_fetch_assoc($result)) {

        echo
        // Denne kode hiver sidste row i table ud
            "<br>
            id: " . $row["id"] . "  
            Name: " . $row["first_name"] . " " . $row["last_name"] . " 
            Address: " . $row["address"] . " " . $row["zip"] . " " . $row["city"] . "
            Phone: " . $row["phone"] .
            "<br>";

        // Denne kode kommer med fejl
        /*
        '{
"code" : "200",
"msg" : "Success",
"data" : [
    {
        "id" : "' . $row[0] . '",
        "firstName": "' . $row[1] . '",
        "lastName" : "' . $row[2] . '"
        "address" : "' . $row[3] . '"
        "zip" : "' . $row[4] . '"
        "city" : "' . $row[5] . '"
        "email" : "' . $row[6] . '"
        "phone" : "' . $row[7] . '"
    }
]
}';
        */

    }
} else {
    echo '{
    "code" : "403",
    "msg" : "Access denied"
    }';

}

/*
            "id" : "' . $row['id'] . '",
            "firstName": "' . $row['first_name'] . '",
            "lastName" : "' . $row['last_name'] . '"
            "address" : "' . $row['address'] . '"
            "zip" : "' . $row['zip'] . '"
            "city" : "' . $row['city'] . '"
            "email" : "' . $row['email'] . '"
            "phone" : "' . $row['phone'] . '"
*/


