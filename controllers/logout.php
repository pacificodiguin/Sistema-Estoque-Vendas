<?php
session_start();
session_destroy(); // encerra a sessão
header("Location: ../views/login.php"); // redireciona para login
exit();
