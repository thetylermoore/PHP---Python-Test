<html>
<head>
<meta charset="UTF-8" />
<title>PHP and Python Test</title>
</head>


<?php
if (isset($_POST['Input1']))
{
exec("python input1telnet.py");
}
if (isset($_POST['Input2']))
{
exec("python input2telnet.py");
}
?>
<form method="post">
<button name="Input1">Input One</button>&nbsp;
<button name="Input2">Input Two</button><br>



</form>
</html>
