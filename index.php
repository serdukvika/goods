<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goods";
// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("set names utf8");
// Проверка соединения 
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT good_name, good_price, good_sales FROM goods";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    echo "<table>";
     // output data of each row
     while ($row = $result->fetch_assoc()) {
         echo  "<tr>Name: </tr>" . "<td> $row["good_name"] </td>". " <tr>Цена:</tr> " . $row["good_price"] . "<tr>Продажи: </tr>" . $row["good_sales"] .  "";
     }
     echo "</table>";
 } else {
     echo "0 results";
 } $conn->close();
