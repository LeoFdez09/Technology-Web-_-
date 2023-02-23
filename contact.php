<?php

    $to = "2022e2afernandez.ledel@algeciras.salesianos.edu";
    $email = $_POST["mail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $header = "Enviado desde la pagina de tecnología";


    mail($to, $subject, $message, $header);








?>