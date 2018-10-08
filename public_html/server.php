<?php

//получили данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//вызвали функцию отправки почты, передали ей аргументы, сохранили в переменную результат вызова.
$result = mail('professor.faust.st.p@gmail.com', 'Сообщение с сайта', "От: $name, email: $email, текст сообщения: $message");

//проверяем результат работы функции и выводим соответствуещее сообщение в формате JSON.
echo json_encode(['result' => $result]);