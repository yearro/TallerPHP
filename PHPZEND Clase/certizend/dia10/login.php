<?php
$_POST['UsuNom'];
$_POST['Contra'];
if (empty($_POST['UsuNom']) and empty($_POST['Contra'])){ header('location:index.php?a=1'); exit();}
if ((strlen(trim($_POST['UsuNom'])) == 0) or (strlen(trim($_POST['UsuNom'])) > 30) or 
(strlen(trim($_POST['Contra'])) == 0) or (strlen(trim($_POST['Contra'])) >  30)) {header('location:index.php?a=2'); exit();}
if ((strcmp($_POST['UsuNom'],'admin')!=0) and (strcmp($_POST['Contra'],'123456')!=0)) {header('location:index.php?a=3'); exit();}

session_name($_POST['UsuNom']);
session_start();



?>