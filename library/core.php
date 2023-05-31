<?php
include "help/helps.php";
define("APP_ROUTE",BASE_ROUTE."app/");
//echo APP_ROUTE;
define("VIEW_ROUTE",BASE_ROUTE."view/");
define("LIBRARY",BASE_ROUTE."library/");
define("ROUTE",APP_ROUTE."routes/");
define("MODELS",APP_ROUTE."model/");
//echo ROUTE;
//configuration
include BASE_ROUTE."config/config.php";
include LIBRARY."ORM/Connection.php";
include "ORM/RdORM.php";
include "ORM/Model.php";


includeModels();
include "View.php";
include "Route.php";
include ROUTE."routes.php";

