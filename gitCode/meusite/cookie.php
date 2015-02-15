<?php

#setcookie("exemplo_cookie","valor do cookie",time()+3600);

if(isset($_COOKIE['exemplo_cookie'])){
    echo $_COOKIE['exemplo_cookie'];
}