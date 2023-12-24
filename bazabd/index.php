<html>
<head>
<title>HomeWork</title>
</head>
<?php
include("connect.php");
?>
<table  border=1 cellpadding=10>
<form action="add.php", method="POST">
<tr><td><label>Добавить фамилию </label></td><td><label>Год</label></td><td><label>Группа</label></td></tr>
<tr><td><input type="text" name="lastname"></td><br>
<td><input type="date" name="god"></td><br>
<td><select name="grupa">
  <option value="fullname">Выберите группу</option>
  <?php
  $sql='SELECT * FROM grupa';
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)){
    echo '<option value ="'.$row['id']. '">' .$row['name_group'].'</option>';
  }
    ?>
	</select></td></tr>
	<td colspan=" 3 "><center><input type="submit"></center></td></tr><br></tr>
</form>

<?php
$q=mysqli_query($conn,"SELECT * FROM student JOIN grupa ON student.group_id = grupa.id");
echo "<table border=1 cellpadding=10>";
while($result=mysqli_fetch_assoc($q)){
	echo "<tr>";
	
	echo "<td>".$result['lastname']."</td>";
	echo "<td>".$result['name_group']."</td>";
	echo "<td>".$result['god']."</td>";
	echo "<td>".$result['date']."</td>";
	echo "</tr>";
	}
	echo "<br>";

?>	
</html>