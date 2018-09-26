<?php

//получили данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//вызвали функцию отправки почты и передали ей аргументы
mail('professor.faust.st.p@gmail.com', 'Сообщение с сайта', "От: $name, email: $email, текст сообщения: $message");