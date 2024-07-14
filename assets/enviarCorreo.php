<?php

    $name = $_POST['name'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $content = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                <p style="font-size: 20px;">Asunto: '.$subject.'</p>
                <p style="font-size: 19px;">Nombre del cliente: '.$name.'</p>
                <p style="font-size: 18px;">Número de contacto: '.$cellphone.'</p>
                <p style="font-size: 17px;">Contenido: '.$message.'</p>
            </body>
        </html>
    ';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $options  = 'MIME-Version: 1.0' . "\r\n";
    $options .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail('runivtv@gmail.com', $subject , $content, $options);

    $data = [
        'name' => $name,
        'cellphone' => $cellphone,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
    ];

    echo json_encode($data);