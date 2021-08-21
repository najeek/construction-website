<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php

    
    $name = $_POST['name'];
    $number = $_POST['number'];
    $issue = $_POST['issue'];
    $subject = $_POST['subject'];

    $name = htmlspecialchars($name);
    $number = htmlspecialchars($number);
    $issue = htmlspecialchars($issue);
    $subject = htmlspecialchars($subject);

    echo $name;
    echo "<br>";
    echo $number;

    if (mail("perfectstileinc@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$number ,"From: shuhsaib.777@gmail.com \r\n")){
    echo "Сообщение успешно отправлено";
    } else {
    echo "При отправке сообщения возникли ошибки";
 }
}
?>
</body>
</html>


