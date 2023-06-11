<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert ('anda telah logout');document.location='index.php'</script>";
