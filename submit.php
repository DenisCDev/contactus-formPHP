<?php
    $to = "denisscarabelli@gmail.com"; 

    $assunto = "Formulário do site";

    $mensagem = $_POST['mensagem']." - ".$_POST['name'];

    $email = $_POST['email'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';

    $status = mail($to, $assunto, $mensagem);

    if($status==true){
        print "The message was sent";
    }else{
        print "Error";
    } 
?>