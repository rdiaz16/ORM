<?php

use view\View;
class UserController {
    public function index(){
        $users = array(
            1=>array(
                "name"=>"Ricardo",
                "lastname"=>"Diaz",
            ),
            2=>array(
                "name"=>"Ricardo",
                "lastname"=>"Diaz",
            ),
            3=>array("name"=>"Ricardo",
                "lastname"=>"Diaz",
            ),
            4=>array("name"=>"Ricardo",
                "lastname"=>"Diaz",
            )
        );
       //return View::create("users.list","users",$users);
        return View::create("users.list","users",array(
            "users"=>$users,
        ));
    }
    public function insert(){
        echo "inserted correctly";
    }
}