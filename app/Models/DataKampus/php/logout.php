<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
header("Location: ../tampil_login.php"); // Langsung mengarah ke Home index.php
}
?>