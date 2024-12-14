<?php
setcookie('theme', 'light', time() + 3600); // o campo theme de $_COOKIE recebe o valor 'light'
header('Location: index.php'); //redireciona para o index