<?php
session_start();
session_destroy();

header("Location: welcome.php");
exit();
