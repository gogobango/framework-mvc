<?php
    require('settings/config.php');
    require(CONTROLLERS.'Routeur.php');

    $routeur = new Routeur();
    $routeur->routerReq($_GET);