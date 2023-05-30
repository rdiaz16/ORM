<?php namespace view;


class View {
    public static function create($path,$key=null,$value=null){
    //check if the path variable exists
    if($path != ""){
        $paths = explode(".",$path);//its converted to a point-separated array
        //echo count($paths);
        $route = "";//initialize
        for($i =0; $i <(count($paths)); $i++){//go through variable paths.
            if($i == count($paths)-1){//is checked if it is the last
                $route.= $paths[$i].".php";//is added .php
            }else{
                $route.= $paths[$i]."/";//is concatenated (/)
            }

        }
        //echo $route;
        //echo VIEW_ROUTE.$route;
        //check if the file exists
        if(file_exists(VIEW_ROUTE.$route)){
            //check that the $key exists
            if(!is_null($key)){
               if(is_array($key)){
                   //Extract key value and convert to variable
                   extract($key,EXTR_PREFIX_SAME,"");
               }else{
                   //("$index","$users",$users)
                   //$users = $users;
                   ${$key}=$value;
               }
            }
            include VIEW_ROUTE.$route;
        }else{
            die("the view does not exists");
        }
    }
    }

}
return null;