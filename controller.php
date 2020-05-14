<?php
    include "model.php";
    Class Controller extends Model{
        function new($val){
            $data = array("title", "content");

            $x = $this->add($val);
            echo json_encode("Success", $success = true);
        }
    }
?>