<?php
    include "db.php";
    class Model extends Databases{
        // Methods
        function add($value = array()) {
            $title = $value[0];
            $content = $value[1];
            $sql = "INSERT INTO article
                (title, content)
            VALUES 
                ('" . $title ."','". $content ."')";
            return $this->db($sql);
        }
    }
?>