<?php
session_start();
require_once('./core/routing.php');
require_once('./core/db.php');

$url = key($_GET);  // Значение в адресной строке

Routing::addRoute("/", "pages/products-page.php");
Routing::addRoute("/login", "pages/login-page.php");
Routing::addRoute("/sign-up", "pages/sign-up-page.php");
Routing::addRoute("/vendors", "pages/vendors-page.php");
Routing::addRoute("/products", "pages/products-page.php");
Routing::addRoute("/wp-admin", "mysite/wp-admin/index.php");
Routing::addPrivateRoute("/vendor-form", "pages/vendor-form.php");
Routing::addPrivateRoute("/product-form", "pages/product-form.php");

Routing::route("/".$url);