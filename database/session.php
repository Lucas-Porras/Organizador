<?php

// Aca le decimos que si no existe la variable de session que la inicie, asi nos ahorramos de pone session_start() en todas las paginas
if(!isset($_SESSION)){
    session_start();
}

// Aca le decimos que si existe un session mensaje, que este contenga lo que escribiremos mas abajo (Aca use el SwalFire)