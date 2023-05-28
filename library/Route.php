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
                       $control = $controller;//assign the controller to a variable
                   }
               }
               //echo $con;
               $this->getController("index",$control);//call the method that recovers the controller
           }
       }else{
           //controllers and methods
           $status = false;
            foreach($this->_controllers as $route=>$cont){
               if(trim($route,"/") == $paths[0]){
                $status = true;
                   $con = $cont;
                   $method= "";
                   if(count($paths)>1){
                    $method = $paths[1];
                   }
                   $this->getController($method,$con);
               }
           }
           if($status == false){
               die("error route");
           }
       }
    }
    public function getController($method,$control){
        $methodController = "";//method
        //check method or function if is index or not
        if($method == "index" || $method==""){
            $methodController = "index";
        }else{
            $methodController =$method;
        }
        //the controller is included
        $this->includeController($control);
        //check that the clas exists
        if(class_exists($control)){
            //a temporary class is created based on the controller variable = (MainController)
            $ClassTemp = new $control();
            //check if you can call the function or method of that class
           if(is_callable(array($ClassTemp,$methodController))){
                //echo "success";
                //call to the method of that class
               //class->index();
               $ClassTemp->$methodController();
           }else{
               die("the method does not exist");
           }
        }else{
            die("the class does not exist");;
        }

    }
    public function includeController($control){
        //validating if the file exists
        if(file_exists(APP_ROUTE."controller/".$control.".php")){
            //if it exists is included
            include APP_ROUTE."controller/".$control.".php";
        }else{
            die("error finding controller file");
        }
    }
}