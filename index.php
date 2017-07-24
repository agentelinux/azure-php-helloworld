<html>
<head>
<title>A test app!</title>
</head>
<body>

<?php
if (isset($_POST["name"]) && $_POST["name"] <> "") {
    echo "Hello there, " . htmlspecialchars($_POST["name"]);
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
<br />
<br />
<br />
<br />
<br />
<br />
A terribly simple "hello world" type program written for learning Azure by Sarah Withee (<a href="https://twitter.com/geekygirlsarah" target="_blank">@geekygirlsarah</a>).
</body>
</html>
