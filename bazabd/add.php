<?php
$conn = mysqli_connect("localhost","developer","developer","development");

if(!empty($_POST["grupa"]) && !empty($_POST["god"])&& !empty($_POST["lastname"])){ //учителя
    
	$grupa=$_POST["grupa"];
    $god=$_POST["god"];
	$lastname=$_POST["lastname"];
    $sql="INSERT INTO student(group_id,lastname,god) VALUES('$grupa','$lastname','$god')";
    mysqli_query($conn,$sql);
}
header("Location: /bazabd/");
?>
