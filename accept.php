<?php
    	$accept_id = $_GET["id"];

        require_once('dbconfig.php');

        $connect = mysqli_connect( HOST, USER, PASS, DB )
    
            or die("Can not connect");

?>