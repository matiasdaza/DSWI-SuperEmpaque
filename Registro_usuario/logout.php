<?php
session_start();

if(isset($_SESSION['usu_run'])) {
    session_destroy();
    unset($_SESSION['USU_RUN']);
    unset($_SESSION['USU_NOMBRES']);
    unset($_SESSION['USU_APAT']);
    unset($_SESSION['USU_CORREO']);
    header("Location: ../starter.html");
} else {
    header("Location: ../starter.html");
}
?>