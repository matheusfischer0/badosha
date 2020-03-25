
<?php
$servername = "sql177.main-hosting.eu";
$database = "u403785945_badosha";
$username = "u403785945_matheusfischer";
$password = "160497";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$$itemArray = new array()

$sql = "SELECT * FROM cardapio";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        $item->id=$row['id'];
        $item->name=$row['name'];
        $item->description=$row['description'];
        $item->type=$row['type'];
        $item->price=$row['price'];
        $item->modified_at=$row['modified_at'];
           
        echo json_encode($item)
        }
    }


?>