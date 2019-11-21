<?php
require_once("Router.php");
require_once("api/controllers/ComentariosApi.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("comentarios", "GET", "ComentariosApiController", "getComentarios");
$router->addRoute("comentarios/:ID", "GET", "ComentariosApiController", "getComentario");
$router->addRoute("comentarios", "POST", "ComentariosApiController", "addComentario");

// rutea
$router->route($resource, $method);
