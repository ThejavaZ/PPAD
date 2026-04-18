<?php

function post_image(){
    if(isset($_FILES["image"])){
        $extention = explode('.', $_FILES["image"]["name"]);
        $name = rand() . "." . $extention[1];
        $path = "";

    }
}