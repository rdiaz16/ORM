<?php
//method that allows us to enter controllers
//with their respective routes

class Route {
    private $_controllers = array();
    public function controllers($controller){
    $this->_controllers = $controller;
    //call to the method that does the routing process
    self::submit();
    //function or method that is executed each time the request is sent in the url
    }
    public function submit(){
       $uri = isset($_GET["uri"])?$_GET["uri"]:"/";//retrieves project url or path
       //echo $uri;
       $paths = explode("/",$uri);//divide the url into parts and form an array
       //print_r($paths);
       //conditional to know if it is in a controller or in the main path
       if($uri =="/"){
           //main
           $res = array_key_exists("/",$this->_controllers);//looking for the path (/) in the _controller array
           if($res != "" && $res ==1){//checking
               foreach($this->_controllers as $route=>$controller){//driving through the controllers
                   if($route == "/") {//check that the routes are the same
                       $con = $controller;//assign the controller to a variable
                   }
               }
               //echo $con;
               $this->getController();
           }
       }else{
           //controllers and methods

       }
    }
}