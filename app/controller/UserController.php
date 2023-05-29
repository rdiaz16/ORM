<?php

use view\View;
class UserController {
    public function index(){
       return View::create("users.list");
    }
    public function insert(){
        echo "inserted correctly";
    }
}