<?php 
    include "model.php";
    Class Ajax extends Controller{

    }

    $ajax = new Controller();

    if(!empty($_POST["title"]) && !empty($_POST["content"])) {
        $value = array($_POST["title"], $_POST["content"]);
        $ajax->new($value);
    }else{
        echo json_encode("Empty", $success = false);
    }
?>