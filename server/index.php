<?php
include ('../client/dist/static.html');

/* Look if loged in */

function isLoggedIn(){
    if(isset($_COOKIE['user'])) {
        return true;
    } else {
        return false;
    }
}