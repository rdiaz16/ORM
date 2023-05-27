<?php
define("APP_ROUTE",BASE_ROUTE."app/");
//echo APP_ROUTE;
define("VIEW_ROUTE",BASE_ROUTE."view/");
define("ROUTE",APP_ROUTE."routes/");
//echo ROUTE;
include "Route.php";
include ROUTE."routes.php";
