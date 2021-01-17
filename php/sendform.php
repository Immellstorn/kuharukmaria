<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone_number'])&&$_POST['phone_number']!=""&&(isset($_POST['email'])&&$_POST['email']!=""))){
    $name = htmlspecialchars(trim($_POST['name']));
    $phone_number = htmlspecialchars(trim($_POST['phone_number']));
    $email = htmlspecialchars(trim($_POST['email']));
	$to = ""; // емайл получателя данных из формы
	$subject = "Сообщение с сайта";
	$message = "Меня зовут: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
	$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	$message .= "Номер телефона: ".$_POST['phone_number']."<br>"; //полученное из формы name=phone
	$headers  = 'MIME-Version: 1.0' . "\r\n" .
	'Content-type: text/html' . "\r\n";
	mail($to, $subject, $message, $headers);
}
?>