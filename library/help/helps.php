<?php

function includeModels(){
    $directory = opendir(MODELS);
    //echo $directory;
    while($file = readdir($directory)){
        if(!is_dir($file)){
            require_once MODELS.$file;
        }
    }
}