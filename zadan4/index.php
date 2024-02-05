<?php
    
    $conn = mysqli_connect("localhost","developer","developer","development");



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $entry_date = $_POST["entry_date"];
//     $supplier = $_POST["supplier"];
//     $manufacturer = $_POST["manufacturer"];
//     $code = $_POST["code"];
//     $price = $_POST["price"];
//     $operator_id = $_POST["operator_id"];

//     $sql = "INSERT INTO postav (name, entry_date, supplier, manufacturer, code, price, operator_id)
//             VALUES ('$name', '$entry_date', '$supplier', '$manufacturer', '$code', '$price', '$operator_id')";
//  $result = mysqli_query($conn,$sql);
// }

?> 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    input{
        font-size: 25px;
    }
    label{
        font-size: 20px;
    }
    </style>
</head>

<body>
    <h1>Добавление новой детали</h1>
    <form action="add.php" method="post">
        <label for="name">Наименование детали:</label>
        <input type="text" name="name" required><br>

        <label for="entry_date">Дата поступления:</label>
        <input type="date" name="entry_date" required><br>

        <label for="code">Код детали:</label>
        <input type="text" name="code" required><br>

        <label for="price">Цена:</label>
        <input type="text" name="price" required><br>

        <label for="operator_id">Идентификатор оператора:</label>
        <input type="text" name="operator_id" required><br>

        <input type="submit" value="Добавить деталь">
        
        <select name="manufacturer">
            <option value="text">Производитель</option>

         
            <?php
            $sql='SELECT * FROM proizvoditel';
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo '<option value="'.$row['name_proizvodit'].'">'.$row['name_proizvodit'].'</option>';
            }
            
            ?>

          </select>
          <select name="supplier">
            <option value="text">Поставщик</option>
            <?php
            $sql='SELECT * FROM postavshik';
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
            }
            ?>


          </select>
          </form>
        
        
        
   

    
</body>
</html>

