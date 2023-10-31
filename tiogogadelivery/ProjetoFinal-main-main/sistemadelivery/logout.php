<?php
@session_start();
@session_destroy();
echo "<script language='javascript'>window.location='http://localhost/ProjetoFinal/sistemadelivery/index.php'; </script>";

?>