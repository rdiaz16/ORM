<?php
require_once ("help/helps.php");
define("APP_ROUTE",BASE_ROUTE."app/");
//echo APP_ROUTE;
define("VIEW_ROUTE",BASE_ROUTE."view/");
define("LIBRARY",BASE_ROUTE."library/");
define("ROUTE",APP_ROUTE."routes/");
define("MODELS",APP_ROUTE."model/");
//echo ROUTE;
//configuration
require_once BASE_ROUTE."config/config.php";
require_once ("ORM/Connection.php");
require_once ("ORM/RdORM.php");
require_once ("ORM/Model.php");


includeModels();
require_once ("View.php");
include "Route.php";
include ROUTE."routes.php";

