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
        $phpmailer->Body = 'teste conteudo email .............';


      /*  if ($phpmailer->send()) {
            echo "Email enviado com sucesso!";
        } else {
            echo "Erro ao enviar o email: " . $phpmailer->ErrorInfo;
        }*/
     $phpmailer->send();
    }
?>5