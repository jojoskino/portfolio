<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'essejoel34@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   $contact->smtp = array(
//     'host' => 'smtp.gmail.com',
//     'username' => 'essejoel34@gmail.com',
//     'password' => 'zwfntmzxwhzpuwor',
//     'port' => '587'
//   );

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   if(isset($_POST['phone'])) {
//     $contact->add_message( $_POST['phone'], 'Phone');
//   }
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
// ?>





<?php
// Affichage des erreurs pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); 

// Log pour voir si le script est exécuté
error_log("Formulaire de contact - Début du script");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    error_log("Formulaire de contact - Méthode non autorisée");
    die("Méthode non autorisée.");
}

$name  = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

// Log des données reçues
error_log("Formulaire de contact - Données reçues : " . print_r($_POST, true));

if (isset($_POST['envoyer'])) {
    if (empty($name) || !preg_match("/^[\p{L} \'-]+$/u", $name)) {
        $_SESSION['message_error'] = "Veuillez donner un nom valide !";
        error_log("Formulaire de contact - Erreur : Nom invalide");
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message_error'] = "Veuillez donner une adresse email valide !";
        error_log("Formulaire de contact - Erreur : Email invalide");
    } elseif (empty($message)) {
        $_SESSION['message_error'] = "Veuillez remplir le champ message !";
        error_log("Formulaire de contact - Erreur : Message vide");
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['subject'] = !empty($subject) ? $subject : 'Sans sujet';
        $_SESSION['message'] = $message;

        error_log("Formulaire de contact - Redirection vers sendmail.php");
        // Redirection vers l'envoi d'email
        header("Location: ../assets/vendor/PHPMailer/sendmail.php");
        exit();
    }
}

// En cas d'erreur, redirection vers la page d'accueil avec un message d'erreur
error_log("Formulaire de contact - Redirection vers index.php avec erreur");
header("Location: ../index.php");
exit();
?>