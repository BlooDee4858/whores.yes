<?php
 $url = $_GET['url'];
 $url = rtrim($url, '/');
 $url = explode('/', $url);
 require 'controllers/'.$url[0].'.php';
 $controller = new $url[0];
 $controller->render();
 ?>
