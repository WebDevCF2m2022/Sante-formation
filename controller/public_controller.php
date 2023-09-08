<?php


//Pour le mailer

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// ...

$transport = Transport::fromDsn(MAILER_DSN);

// include menu dans toute la page
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'homepage':
            include "../view/public_view/homepage.php";
            break;
        case 'asbl':
            include "../view/public_view/asbl.php";
            break;
        case 'actions':
            include "../view/public_view/action.php";
            break;
        case 'agenda':
            include "../view/public_view/agenda.php";
            break;       
        case 'contact':
            include "../view/public_view/contact.php";
            break;
        case 'donation':
            include "../view/public_view/donation.php";
            break;
        case 'formations':
            include "../view/public_view/formation.php";
            break;
        case 'admin':
            include "../view/public_view/admin.php";
            break;
        default:
            include_once "../view/public_view/homepage.php";
            break;
    }
} else {
    include_once "../view/public_view/homepage.php";
}




 $mailer = new Mailer($transport);



// on veut envoyer un message
if(isset($_POST['lastname'],$_POST['message'] )&&filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
   $firstname = htmlspecialchars(strip_tags(trim($_POST['lastname'])),ENT_QUOTES);
    $mailCustomer = trim($_POST["mail"]);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);


    try {

        //pour l'user
        $mail = (new Email())
            ->from(MAIL_FROM)
            ->to($mailCustomer)
            ->subject('Votre message a bien été posté ! ')
            ->text("Votre message : " . $message . "Merci de votre retour ")
            ->html("<p>Votre message : " . $message . "Merci pour votre message </p>");
        $mailer->send($mail);


        //pour adnim
        $mail =(new Email())
            ->from(MAIL_FROM)
            ->to(MAIL_ADMIN)
            ->subjet('Vous avez recu un message')
            ->text('Le message :'. $message . "posté par:".$mailCustomer)
            ->html("<p>Le message :". $message ."posté par :".$mailCustomer ."</p>");
        $mailer->send($mail);
        $e="Merci pour votre contribution";


        }
        catch(PDOException $e) {
            $e = throw new Exception(" un problème est survenu !");
        }


    }elseif (isset($_POST['mail'])&& !filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
        $e = throw new Exception("Veuillez entrer un mail valide svp");

}











    /*if($mailCustomer==false || empty($messageDB)){
        $message = "Mail et/ou message non valides, veuillez recommencer !";
    }else{
        $insert = insertMessages($connection,$mail,$messageDB);
        if(is_string($insert)){
            $message = $insert;
        }else{
            $message = "Votre message à bien été envoyé!";

            // pour l'admin du site
            $mailMessage = "Mail envoyé par $mail \r\n \r\n " . $messageMail;
            $envoi = sendMail(MAIL_FROM, MAIL_ADMIN, "Message sur votre site", $mailMessage);

            // pour l'utilisateur du site
            $mailMessage = "Votre message a bien été envoyé sur le site http://mailmvc.webdev-cf2m.be/";
            $envoi2 = sendMail(MAIL_FROM, $mail, "Message du site mailmvc.webdev-cf2m.be", $mailMessage);

            if ($envoi === true && $envoi2 == true) {
                $message .= "<br>Félicitation";
            }
        }
    }

}*/
/**
 * fonction pour envoyer des mails
 * @param string $mailfrom
 * @param string $mailto
 * @param string $subject
 * @param string $message
 * @return bool
 */
/*function sendMail(string $mailfrom, string $mailto, string $subject, string $message): bool {

    // création des entêtes
    $headers = array(
        'From' => $mailfrom,
        'Reply-To' => $mailfrom,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    // envoi réel du mail
    $envoi = @mail($mailto, $subject, $message, $headers);
    // mail envoyé
    if($envoi){
        // message de réussite de l'envoi
        return true;
    }else {
        // problème de la fonction mail, erreur personnalisée
        return false;
    }
}
*/





