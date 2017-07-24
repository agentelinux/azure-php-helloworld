<html>
<head>
<title>A test app!</title>
</head>
<body>

<?php
if (isset($_POST["name"]) && $_POST["name"] <> "") {
    echo "Hello there, " . $_POST["name"];
}
else {
?>

Hi there! What's your name?


<form action="./" method="post">
    <input type="text" name="name" />
    <input type="submit" />
</form>

<?php 
}


?>
