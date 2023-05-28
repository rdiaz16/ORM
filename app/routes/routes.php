<?php
//all available routes within the application
$route = new Route();
$route->controllers(array(
   "/"=>"MainController",
    "/users"=>"UserController"
));