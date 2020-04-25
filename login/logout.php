<?php

session_start();

session_destroy();

header ("location: http://localhost/covid_19/login/index.php");

?>