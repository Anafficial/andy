<!Doctype html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
</head>
<body>

<?php

$user='root';
$password='';
$db='registration';

$db= mysqli_connect('localhost:8080', $user, $password, $db) or die();

if(isset($_POST['send']))
{
	$surname = ($_POST['surname']);
	$name = ($_POST['name']);
	$DOB = ($_POST['DOB']);
	$sex = ($_POST['sex']);
	$field = ($_POST['field']);
	$mail = ($_POST['mail']);
	$result = $db->query("INSERT INTO Оюутан (Овог, Нэр, Төрсөн огноо, Хүйс, Мэргэжлийн хөтөлбөр, И-мэйл) VALUE ('$surname','$name','$DOB','$sex','$field','$mail')");
}
$db->close();

?>

<h1>REGISTER SECTION</h1>
<hr>
<form method="post">

	<br><br>Овог: <input type="text" name="surname">
	<br><br>Нэр: <input type="text" name="name">
	<br><br>Төрсөн огноо: <input type="date" name="DOB">
	<br><br>Хүйс: <input type="radio" name="sex" checked>Эр
	<br><br> <input type="radio" name="sex">Эм
	<br><br>Мэргэжлийн хөтөлбөр: <input type="text" name="field">
	<br><br>E-mail: <input type="text" name="mail">
	<br><br><input type="submit" name="send" value="Register">
</form>

</body>
</html>