<?php
  $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
  $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


  $mysql = mysqli_connect('localhost','u161671_roma','Vostra13102004','u161671_sales');
  if (!$mysql){
    die('Ошибка: Неввозможно подключиться: ' . mysqli_error());
  }
  $mysql->query("INSERT INTO `Users` (`surname`, `name`, `last_name`, `email`, `phone`, `password`) VALUES ('$surname', '$name', '$last_name', '$email', '$phone', '$password')");

  $mysql->close();

  header('Location: /');
?>
