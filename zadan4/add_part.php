<?php
$conn = mysqli_connect("localhost","developer","developer","development");
if (!empty($_POST["edit_id"])){
    $eid=$_POST["edit_id"];
    $t=$_POST["name"];
    $c=$_POST["entry_date"];
    $d=$_POST["supplier"];
    $d1=$_POST["manufacturer"];
    $d2=$_POST["code"];
    $d3=$_POST["operator_id"];
    $d4=$_POST["price"];
    $sql="UPDATE postav SET nem_del='$t',date='$c',postavhik='$d',proizvod='$d1',kod_det='$d2',operator='$d3',price='$d4' WHERE id='$eid'";
    //echo $sql;
    mysqli_query($conn, $sql);
    //exit;
    
    header("Location:/shainov/Zadan4/add_part.php");
    }
    if(!empty($_POST["delete_id"])){
    $del_id=$_POST["delete_id"];
    $sql="DELETE FROM postav WHERE id='$del_id'";
    mysqli_query($conn,$sql);
    header("Location:/shainov/Zadan4/add_part.php");
    }
    $q=mysqli_query($conn,"SELECT * FROM postav");
    echo "<table border=1 cellpadding=10>";
    echo "<tr><td>Наименование детали</td><td>Дата поступления</td><td>Поставщик</td><td>Производитель</td><td>Код детали</td><td>Идентификатор оператора</td><td>Цена</td></tr>";
    while($result=mysqli_fetch_assoc($q)){
    echo "<tr>";
   // echo "<td>".$result['id']."</td>";
    if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
    echo "<form action=\"\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"edit_id\" value=\"" .$result['id']."\">";
    echo "<td><input type=\"text\" name=\"name\" value=\"".$result['nem_del']."\"></td>";
    echo "<td><input type=\"text\" name=\"entry_date\" value=\"".$result['date']."\"></td>";
    echo "<td><input type=\"text\" name=\"supplier\" value=\"".$result['postavhik']."\"></td>";
    echo "<td><input type=\"text\" name=\"manufacturer\" value=\"".$result['proizvod']."\"></td>";
    echo "<td><input type=\"text\" name=\"code\" value=\"".$result['kod_det']."\"></td>";
    echo "<td><input type=\"text\" name=\"operator_id\" value=\"".$result['operator']."\"></td>";
    echo "<td><input type=\"text\" name=\"price\" value=\"".$result['price']."\"></td></tr>";
    }else{
        echo "<tr>
        <td>".$result["nem_del"]."</td>
        <td>".$result["date"]."</td>
        <td>".$result["postavhik"]."</td>
        <td>".$result["proizvod"]."</td>
        <td>".$result["kod_det"]."</td>
        <td>".$result["price"]."</td>
        <td>".$result["operator"]."</td>
     
    </tr>";
    }

    //exit;
    if(!empty($_GET["edit"])&& $_GET["edit"]==$result['id']){
    echo "<td><input type=\"submit\" value=\"UPDATE\">";
    echo "</td></form>";
    }else{
    echo "<td><a href=\"?edit=".$result['id']."\"> Редактировать</a></td>";

    }
    if(!empty($_GET["delete"])&& $_GET["delete"]==$result['id']){
    echo "<form action=\"\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"delete_id\" value=\"".$result['id']."\">";
    echo "<td><input type=\"submit\" value=\"DELETE\">";
    echo "</td></form>";
    }else{
    echo "<td><a href=\"?delete=".$result['id']."\">Удалить</a></td>";
    }
    echo "</tr>";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM postav";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="ru">
<title>Задание №4</title>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список деталей</title>
</head>
<body>
    <h1>Список деталей</h1>
    <table border="3">
        <tr>
            <th>Наименование детали</th>
            <th>Дата поступления</th>
            <th>Поставщик</th>
            <th>Производитель</th>
            <th>Код детали</th>
            <th>Цена</th>
            <th>Идентификатор оператора</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                 echo "<tr>
                        <td>".$row["nem_del"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["postavhik"]."</td>
                        <td>".$row["proizvod"]."</td>
                        <td>".$row["kod_det"]."</td>
                        <td>".$row["price"]."</td>
                        <td>".$row["operator"]."</td>
                    </tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>
</html>
