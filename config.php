<?php



$connection = mysqli_connect('localhost', 'shop', 'shop') or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error());
$db = mysqli_select_db($connection, 'shop') or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error());
mysqli_close($connection);



