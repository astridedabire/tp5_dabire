<?php
session_start();
include("config.php");
if (isset($_POST['email']) && isset($_POST['password']))
{


$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
$check ->execute(array($email));
$data = $check->fetch();
$row = $check->rowCount();

  if($row == 1)
  {
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
 {
 $password = hash('sha256', $password);
 if($data['password'] === $password)
 {
 $_SESSION['user']= $data['pseudo'];

 header('Location:acceuil.php');
}else header('Location:connexion.php?login_err=password');
}else header('Location:connexion.php?login_err=email');
}else header('Location:connexion.php?login_err=already');
}else header('Location:connexion.php?');


