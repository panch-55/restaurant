<?php

    require './controllers/autoload.php';

    $autoload = new autoload();

    $url = isset($_GET["url"]) ? $_GET["url"]:"index";

    $url = explode("/", $url);

    //print_r($url);

    $router = new Router($url);

    //$validaUsuario = new UserModel();


    //$usuario = $validaUsuario->validaUsuario("@jonmircha","chafo");

   // print_r ($usuario);
    

?>
