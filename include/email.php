
<?php
$recepient = "mail@mail.ru";
$sitename = "Перегородки в стиле ЛОФТ";
$pagetitle = "Subject";

$name='Заявка';
$tel = trim($_POST["tel"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $tel \nEmail: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>