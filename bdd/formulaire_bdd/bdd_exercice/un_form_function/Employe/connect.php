<?php
    function connection() { 
        $db = mysqli_init();
        mysqli_real_connect($db, 'localhost','root','root','afpa_test');
        return $db;
    }