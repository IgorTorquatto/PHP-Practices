<?php
setcookie('theme', 'dark', time() + 3600); // o campo theme de $_COOKIE recebe o valor 'dark'
header('Location: index.php'); //redireciona para o index