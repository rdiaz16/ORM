<?php

use view\View;
use App\model\User;

class UserController {
    public function index(){

        $user =new User();
        $user->name = "Ricardo";
        $user->lastname = "Diaz";

        echo $user->name;
        //$user->getTable();

    }
    public function insert(){

    }
}