<?php

setcookie('name', 'fasa', time() + 60);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';


setcookie('name', 'fasa', time() + 2 * 60);

setcookie('name', 'fasa', time() - 1);

