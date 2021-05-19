<?php
$uno=$_POST["uno"];
$dos=$_POST["dos"];
$suma=$uno+$dos;
echo $suma;
?>
<html>
<body>
    <h1>suma de numeros</h1>
<form action="suma.php" method="post">
    <label for="">ingrese el primer numero</label><br>
    <input type="text" name="uno"><br>
    <label for="">ingrese el segundo numero</label><br>
    <input type="text" name="dos"><br>
    <input type="submit" value="sumar">
</form>
</body>
</html>