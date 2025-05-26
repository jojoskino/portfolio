<?php
session_start();

// Vérifier si les données de session existent
if (!isset($_SESSION['name']) || !isset($_SESSION['email']) || !isset($_SESSION['message'])) {
    $_SESSION['message_error'] = "Données du formulaire manquantes";
    header("Location: ../../../index.php");
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Mise à jour des chemins d'inclusion
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $config = require_once '../config/config.php';
    
    // Vérification de la configuration
    if (!isset($config['email_user']) || !isset($config['email_password'])) {
        throw new Exception("Configuration email manquante");
    }

    // Configuration de PHPMailer
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $config['email_user'];
    $mail->Password = $config['email_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = "utf-8";

    // Mode debug activé pour le débogage
    $mail->SMTPDebug = 3; // Niveau de debug plus détaillé
    $mail->Debugoutput = function($str, $level) {
        error_log("PHPMailer Debug [$level]: $str");
    };

    // Configuration des emails
    $mail->setFrom($config['email_user'], 'Portfolio Contact Form'); // Utilisation de l'email configuré comme expéditeur
    $mail->addAddress($config['email_user'], 'ESSE Henry-Joel');

    // Configuration du message
    $mail->isHTML(true);
    $mail->Subject = $_SESSION['subject'];

    // Corps du message en HTML
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
                color: #333;
            }
            .email-container {
                max-width: 600px;
                margin: 20px auto;
                background: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }
            .email-header {
                background: #007BFF;
                color: #ffffff;
                text-align: center;
                padding: 20px;
                font-size: 24px;
                font-weight: bold;
            }
            .email-body {
                padding: 30px;
                line-height: 1.8;
                font-size: 16px;
            }
            .info {
                background: #f1f1f1;
                padding: 10px;
                border-left: 4px solid #007BFF;
                margin-bottom: 20px;
            }
            .email-footer {
                background: #007BFF;
                color: #ffffff;
                text-align: center;
                padding: 10px;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="email-header">
                Message de ' . htmlspecialchars($_SESSION['name']) . '
            </div>
            <div class="email-body">
                <div class="info">
                    <strong>Nom :</strong> ' . htmlspecialchars($_SESSION['name']) . '<br>
                    <strong>Email :</strong> ' . htmlspecialchars($_SESSION['email']) . '<br>
                    <strong>Sujet :</strong> ' . htmlspecialchars($_SESSION['subject']) . '
                </div>
                <p><strong>Message :</strong></p>
                <p style="font-style: italic; border-left: 4px solid #007BFF; padding-left: 10px;">
                    ' . nl2br(htmlspecialchars($_SESSION['message'])) . '
                </p>
            </div>
            <div class="email-footer">
                &copy; ' . date("Y") . ' Portfolio ESSE Henry-Joel. Tous droits réservés.
            </div>
        </div>
    </body>
    </html>';

    // Version texte du message
    $mail->AltBody = "Message de : " . $_SESSION['name'] . "\n" .
        "Email : " . $_SESSION['email'] . "\n" .
        "Sujet : " . $_SESSION['subject'] . "\n\n" .
        "Message :\n" . $_SESSION['message'];

    // Envoi de l'email
    if (!$mail->send()) {
        error_log("Erreur d'envoi PHPMailer: " . $mail->ErrorInfo);
        $_SESSION['message_error'] = "Erreur : L'email n'a pas pu être envoyé.";
    } else {
        $_SESSION['message_success'] = "Votre message a été envoyé avec succès !";
        // Nettoyer les données de session après l'envoi réussi
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['subject']);
        unset($_SESSION['message']);
    }
} catch (Exception $e) {
    error_log("Exception PHPMailer: " . $e->getMessage());
    $_SESSION['message_error'] = "Erreur lors de l'envoi de l'e-mail. Veuillez réessayer plus tard.";
}

// Redirection vers la page de message
header("Location: ../../../index.php");
exit();