<?php 
    //carregar autoload
    require_once '../vendor/autoload.php' ;

    function sendEmail($destinatario, $nomeDestinatario, $subject){

        $phpmailer = new PHPMailer\PHPMailer\PHPMailer();

        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 587;
        $phpmailer->Username = 'fc117c19f121d8';
        $phpmailer->Password = '37521013f60f57';

        $phpmailer->setFrom('banco@gmail.com', 'Banco Meu Dinheiro');
        $phpmailer->addAddress($destinatario, $nomeDestinatario);
        $phpmailer->Subject = $subject;
        $phpmailer->isHTML(true);
        $phpmailer->Body ='
        <html>
            <head>
                <meta charset="UTF-8">
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                    }
                    .container {
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 5px;
                        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);

      /*  if ($phpmailer->send()) {
            echo "Email enviado com sucesso!";
        } else {
            echo "Erro ao enviar o email: " . $phpmailer->ErrorInfo;
        }*/
        </style>
        </html>';
     $phpmailer->send();
    }
?>5