<?php

session_start();
session_unset();  
session_destroy();
echo "<script>window.open('index2.php', '_self') </script>";

?>