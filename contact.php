<?php

    $to = "2022e2afernandez.ledel@algeciras.salesianos.edu";
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["textarea"];
    $name = $_POST["nome"];

    $header = "Enviado desde la pagina de tecnología";
    $mensajeCompleto = $message . "\nAtentamente:" . $name;

    mail($to, $subject, $mensajeCompleto, $header);

    
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>location.href='index.html'</script>";

?>