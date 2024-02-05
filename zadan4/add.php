<?php
$conn = mysqli_connect("localhost","developer","developer","development");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $entry_date = $_POST["entry_date"];
    $supplier = $_POST["supplier"];
    $manufacturer = $_POST["manufacturer"];
    $code = $_POST["code"];
    $price = $_POST["price"];
    $operator_id = $_POST["operator_id"];

    $sql = "INSERT INTO postav (nem_del, date, postavhik, proizvod, kod_det, price, operator)
            VALUES ('$name', '$entry_date', '$supplier', '$manufacturer', '$code', '$price', '$operator_id')";
//echo $sql;
mysqli_query($conn,$sql);

//exit;
    
   
} header("Location:/shainov/Zadan4/add_part.php");

$conn->close();
?>