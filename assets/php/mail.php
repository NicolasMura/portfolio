<?php

/* =====================================================
 * change $email_to and $email_form
 * ===================================================== */
$email_to = "contact@nicolasmura.fr"; // the email address to which the form sends submissions
$email_from = "contact@nicolasmura.fr"; // the email address used as "From" when submissions are sent to the $email_to above (important that it has the same domain as the domain of your site - unless you have configured your server's mail settings)
$email_subject = "Soumission d'un formulaire sur nicolasmura.fr";
$email_subject_exp = "Soumission de votre formulaire sur nicolasmura.fr"; // Ajout Nico 14/10/2014

// check CAPTCHA code first
session_start();
if (!isset($_POST["captcha"]) || 
    $_SESSION["captcha_code"] != $_POST["captcha"])
{
    echo 'captcha';
    die();
}

if(isset($_POST['email']))
{

    function return_error($error)
    {
        echo $error;
        die();
    }

    // check for empty required fields
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message']))
    {
        return_error('incomplete');
    }

    // form field values
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $contact_number = $_POST['contact_number']; // not required
    $message = $_POST['message']; // required

    // form validation
    $error_message = "";

    // name
    $name_exp = "/^[a-z0-9 .\-]+$/i";
    if (!preg_match($name_exp,$name))
    {
        $this_error = 'Please enter a valid name.';
        $error_message .= ($error_message == "") ? $this_error : "<br/>".$this_error;
    }        

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp,$email))
    {
        $this_error = 'Please enter a valid email address.';
        $error_message .= ($error_message == "") ? $this_error : "<br/>".$this_error;
    } 

    // if there are validation errors
    if(strlen($error_message) > 0)
    {
        return_error($error_message);
    }

    // Ajout Nico 14/10/2014 (cf. http://fr.openclassrooms.com/informatique/cours/e-mail-envoyer-un-e-mail-en-php)
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email))
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }

    // prepare email message
    $email_message = "Form details below.\n\n";

    // Lecture et mise en forme de la pièce jointe.

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    // Pièce jointe n°1
    $filename1 = "Nicolas-MURA-vcard.vcf";
    $fichier1 = fopen("../divers/".$filename1, "r") or die('File '.$filename1.'can t be open');
    $attachement1 = fread($fichier1, filesize("../divers/".$filename1));
    $attachement1 = chunk_split(base64_encode($attachement1));
    $f1 = fclose($fichier1);

    // Pièce jointe n°2
    $filename2 = "Nicolas-MURA-visit-card.jpg";
    $fichier2 = fopen("../pdf/".$filename2, "r") or die('File '.$filename2.'can t be open');
    $attachement2 = fread($fichier2, filesize("../pdf/".$filename2));
    $attachement2 = chunk_split(base64_encode($attachement2));
    $f2 = fclose($fichier2);
    
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Contact number: ".clean_string($contact_number)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

    // Ajout Nico 14/10/2014
    
    // Création de la boundary
    $boundary = "-----=".md5(rand());
    $boundary_alt = "-----=".md5(rand());
    
    // Création message pour le visiteur
    $message_brut = "Message texte plein";
    $message_html = "<html>
                    <head>
                    </head>
                    <body>
                      Bonjour,<br><br>
                      J'ai bien reçu votre message et vous répondrai dans les plus brefs délais.<br><br>
                      Cordialement,<br><br>
                      <b>Nicolas MURA</b><br>
                      <span style='#f0563d'>Chef de Projet Digital Freelance<br>
                      Intégration &amp; développement de sites et d'applications web</span><br>
                      www.nicolasmura.fr<br>
                      mel : contact@nicolasmura.fr<br>
                      tel : (+33) (0)6 48 34 74 59
                    </body>
                    </html>";

    $email_message_exp = $passage_ligne."--".$boundary.$passage_ligne;
    $email_message_exp .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
    $email_message_exp .= $passage_ligne."--".$boundary_alt.$passage_ligne;

    //===== Ajout du message au format texte.
    /*$email_message_exp .= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
    $email_message_exp .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $email_message_exp .= $passage_ligne.$message_brut.$passage_ligne;
     
    $email_message_exp .= $passage_ligne."--".$boundary_alt.$passage_ligne;*/
     
    // =====Ajout du message au format HTML.
    $email_message_exp .= "Content-Type: text/html; charset=\"utf-8\"".$passage_ligne;
    $email_message_exp .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $email_message_exp .= $passage_ligne.$message_html.$passage_ligne;
    // ==========
     
    // =====On ferme la boundary alternative.
    $email_message_exp .= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
    // ==========

    $email_message_exp .= $passage_ligne."--".$boundary.$passage_ligne;

    // =====Ajout de la pièce jointe n°1
    $email_message_exp .= "Content-Type: application/vcf; name=\"Nicolas-MURA-vcard.vcf\"".$passage_ligne;
    $email_message_exp .= "Content-Transfer-Encoding: base64".$passage_ligne;
    $email_message_exp .= "Content-Disposition: attachment; filename=\"Nicolas-MURA-vcard.vcf\"".$passage_ligne;
    $email_message_exp .= $passage_ligne.$attachement1.$passage_ligne.$passage_ligne;

    $email_message_exp .= $passage_ligne."--".$boundary.$passage_ligne;
    
    // =====Ajout de la pièce jointe n°2
    $email_message_exp .= "Content-Type: application/jpg; name=\"Nicolas-MURA-visit-card.jpg\"".$passage_ligne;
    $email_message_exp .= "Content-Transfer-Encoding: base64".$passage_ligne;
    $email_message_exp .= "Content-Disposition: attachment; filename=\"Nicolas-MURA-visit-card.jpg\"".$passage_ligne;
    $email_message_exp .= $passage_ligne.$attachement2.$passage_ligne.$passage_ligne;

    $email_message_exp .= $passage_ligne."--".$boundary."--".$passage_ligne;

    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    // Ajout Nico 14/10/2014 : headers pour mail visiteur
    $headers_exp = 'From: '.$email_from.$passage_ligne.
    'Reply-To: '.$email_to.$passage_ligne.
    'Mime-Version: 1.0'.$passage_ligne.
    'Content-Type: multipart/mixed;'.$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    if (mail($email_to, $email_subject, $email_message, $headers))
    {
        echo 'success';
        // Envoi mail visiteur
        mail(clean_string($email), $email_subject_exp, $email_message_exp, $headers_exp); // Ajout Nico 14/10/2014
    }
    else 
    {
        echo 'error';
        die();        
    }
}
else
{
    echo 'incomplete';
    die();
}
?>