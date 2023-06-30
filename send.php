<?php
    //Отримуємо дані з форми

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];

    //Оброблюємо отримані дані

    //Преобразуємо символи в спеціальні сутності відповідно до кодування
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);
    $budget = htmlspecialchars($budget);
    $message = htmlspecialchars($message);

    //Декодуємо можливу url адресацію
    $name = urldecode($name);
    $email = urldecode($email);
    $tel = urldecode($tel);
    $budget = urldecode($budget);
    $message = urldecode($message);

    //Видаляємо символи пробілу з обидвох сторін поля введення
    $name = trim($name);
    $email = trim($email);
    $tel = trim($tel);
    $budget = trim($budget);
    $message = trim($message);


    //Надсилаємо дані з форми адресату
    if (mail("fugopannakota@gmail.com",
        "Нове замовлення",
    "Ім'я: ".$name."\n".
            "Пошта: ".$email."\n".
            "Телефон: ".$tel."\n".
            "Бюджет: ".$budget."\n".
            "Повідомлення: ".$message,
    "From: no-reply@gmai.com \r\n")
    ){
        echo ('Лист успішно надісланий!');
    }
    else{
        echo ('Наявні помилки! Перевірте дані...');
    }
    
?>