<?php
session_start();
session_destroy();
header("Location: portofolio.php");
exit();
?>