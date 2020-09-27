<?php

        // setcookie — Отправляет cookie
// setcookie('test', 'My Value', time()+3600*24);

// echo $_COOKIE['test'];

isset($_COOKIE['counter']) ? setcookie('counter', $_COOKIE['counter']++, time()+3600, '/') : setcookie('counter', 1, time()+3600, '/');

// Если у нас существует кука, ты выводим её. Иначе выводим 1
echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;
        